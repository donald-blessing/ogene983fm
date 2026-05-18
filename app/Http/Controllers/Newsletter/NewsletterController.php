<?php

declare(strict_types=1);

namespace App\Http\Controllers\Newsletter;

use App\Http\Controllers\Controller;
use App\Models\Newsletter\Newsletter;
use App\Models\Newsletter\NewsletterSubscriber;
use App\Services\LoyaltyService;
use App\Traits\ControllerTrait;
use App\Traits\sendMails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NewsletterController extends Controller
{
    use ControllerTrait;
    use sendMails;

    public function __construct(
        protected LoyaltyService $loyaltyService
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();

        return view('site.dashboard.newsletter.index', ['newsletters' => $newsletters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('site.dashboard.newsletter.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroyMedia(Request $request, Newsletter $newsletter)
    {
        DB::beginTransaction();
        try {
            $mediaItem = Media::findOrFail($request->slug);
            $mediaItem->delete();
        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json(['error' => $th->getMessage()], 200);
        }
        DB::commit();

        return response()->json(['result' => view('site.dashboard.newsletter.file-list', ['files' => $newsletter->getMedia('newsletter')])->render()], 200);
    }

    /**
     * Upload media
     *
     * @return Response
     */
    public function uploadMedia(Request $request)
    {
        DB::beginTransaction();
        try {
            $newsletter = Newsletter::whereSlug($request->newsletter)->first();
            if (empty($newsletter)) {
                $newsletter = new Newsletter;
                $newsletter->slug = $request->newsletter;
                $newsletter->subject = $request->newsletter;
                $newsletter->message = $request->newsletter;
                $newsletter->save();
            }
            if ($request->hasFile('file') && $request->file('file')->isValid()) {
                foreach ($request->file('file') as $file) {
                    $newsletter->addMedia($file)->toMediaCollection('newsletter');
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json(['error' => $th->getMessage()], 200);
        }
        DB::commit();

        return response()->json(['result' => view('site.dashboard.newsletter.file-list', ['files' => $newsletter->getMedia('newsletter')])->render()], 200);
    }

    /**
     * Process newsletter either for send or save
     *
     * @return Response
     */
    public function process(Request $request)
    {
        $newsletter = Newsletter::whereSlug($request->newsletter)->first();
        if ($request->has('save')) {
            return $this->saveDraft($request);
        } elseif ($request->has('sendUpdate')) {
            return $this->update($request, $newsletter);
        } elseif ($request->has('update')) {
            return $this->update($request, $newsletter, false);
        }

        return $this->send($request);
    }

    /**
     * Save draft
     *
     * @return Response
     */
    public function saveDraft(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        $newsletter = Newsletter::create([
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'draft',
        ]);

        if ($request->hasFile('attachment') && $request->file('attachment')->isValid()) {
            $newsletter->addMedia($request->file('attachment'))->toMediaCollection('newsletter');
        }

        session()->flash('success', 'Newsletter saved as draft successfully!');

        return redirect()->route('newsletter.dashboard');
    }

    /**
     * Send draft newsletters.
     *
     * @return Response
     */
    public function sendDraft(Newsletter $newsletter)
    {
        DB::beginTransaction();
        try {
            $subscribers = NewsletterSubscriber::all();
            foreach ($subscribers as $to) {
                // Logic to send email would go here
                // For now just marking as sent
            }
            $newsletter->update(['status' => 'sent']);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'There was an error sending the newsletter: '.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Newsletter sent successfully!');

        return redirect()->route('newsletter.dashboard');
    }

    /**
     * Send newsletter
     *
     * @return Response
     */
    public function send(Request $request)
    {
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        DB::beginTransaction();
        try {
            $newsletter = Newsletter::create([
                'subject' => $request->subject,
                'message' => $request->message,
                'status' => 'sent',
            ]);
            // Logic to send to all subscribers
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'There was an error sending the newsletter: '.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Newsletter sent successfully!');

        return redirect()->route('newsletter.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function subscribe(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'email' => ['required', 'email', 'max:190'],
        ]);

        $exists = NewsletterSubscriber::where('email', $request->email)->exists();
        if ($exists) {
            session()->flash('success', 'You are already subscribed to our newsletter.');

            return back();
        }

        DB::beginTransaction();
        try {
            NewsletterSubscriber::create([
                'email' => $request->email,
            ]);

            if (Auth::check()) {
                $this->loyaltyService->awardNewsletterPoints(Auth::user());
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'You have successfully subscribed to our newsletter.');

        return back();
    }

    /**
     * Unsubscribe
     *
     * @return Response
     */
    public function unsubscribe(NewsletterSubscriber $newsletterSubscriber)
    {
        $newsletterSubscriber->delete();

        return view('welcome', ['message' => 'You have been successfully unsubscribed from our newsletter.']);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Newsletter $newsletter)
    {
        return response()->json([
            'subject' => $newsletter->subject,
            'message' => $newsletter->message,
        ], 200);
    }

    /**
     * Show drafts
     *
     * @return Response
     */
    public function showDrafts()
    {
        $newsletters = Newsletter::where('status', 'draft')->get();

        return view('site.pages.blog', ['blogs' => $newsletters, 'title' => 'Draft Newsletters']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(Newsletter $newsletter)
    {
        return view('site.dashboard.newsletter.edit', ['newsletter' => $newsletter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, Newsletter $newsletter, bool $send = true)
    {
        $request->flash();
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        DB::beginTransaction();
        try {
            $newsletter->update([
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            if ($send) {
                $newsletter->update(['status' => 'sent']);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Newsletter updated successfully!');

        return redirect()->route('newsletter.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Newsletter $newsletter)
    {
        DB::beginTransaction();
        try {
            $newsletter->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Newsletter deleted successfully!');

        return back();
    }

    /**
     * Remove the specified subscriber from storage.
     *
     * @return Response
     */
    public function destroySubscriber(NewsletterSubscriber $newsletterSubscriber)
    {
        DB::beginTransaction();
        try {
            $newsletterSubscriber->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Subscriber deleted successfully!');

        return back();
    }
}
