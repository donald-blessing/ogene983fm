<?php

declare(strict_types=1);

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Contact;
use App\Services\LoyaltyService;
use App\Traits\sendMails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
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
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(50);

        return view('site.dashboard.contact.index', ['contacts' => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'name' => ['required', 'string', 'max:190'],
            'email' => ['required', 'email', 'max:190'],
            'subject' => ['required', 'string', 'max:190'],
            'message' => ['required', 'string'],
        ]);
        DB::beginTransaction();
        try {
            $contact = Contact::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                ]
            );

            if (Auth::check()) {
                $this->loyaltyService->awardContactPoints(Auth::user());
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        alert()->success("Your message has been received. <br> You'll get a response from one of our Admins soonest");

        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Contact $contact)
    {
        return view('site.dashboard.contact.show', ['contact' => $contact]);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function get(Contact $contact)
    {
        return response()->json($contact->toArray());
    }

    /**
     * Send a newly created email.
     *
     * @return Response
     */
    public function send(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'to' => ['required', 'string'],
            'bcc' => ['string'],
            'cc' => ['string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
            'attachment' => ['file'],
        ]);
        $details = [];
        $to = $request->to;
        $bcc = $request->bcc ?? null;
        $cc = $request->cc ?? null;
        $details['subject'] = $request->subject;
        $details['message'] = $request->message;
        if ($request->hasFile('attachment')) {
            $details['attachment'] = $request->file('attachment');
        }
        if ($request->has('personal') && ($request->personal == 'personal')) {
            $details['from'] = Auth::user()->email;
        }
        $this->sendMail($to, $bcc, $cc, $details);
        alert()->success('Email sent successfully!');
        session()->flash('success', 'Email sent successfully!');

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function reply(Request $request, Contact $contact)
    {
        $request->flash();
        $this->validate($request, [
            'bcc' => ['string'],
            'cc' => ['string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
            'attachment' => ['file'],
        ]);
        $details = [];
        $to = $contact->email;
        $bcc = $request->bcc ?? null;
        $cc = $request->cc ?? null;
        $details['subject'] = $request->subject;
        $details['message'] = $request->message;
        if ($request->hasFile('attachment')) {
            $details['attachment'] = $request->file('attachment');
        }
        if ($request->has('personal') && ($request->personal == 'personal')) {
            $details['from'] = Auth::user()->email;
        }
        $this->sendMail($to, $bcc, $cc, $details);
        alert()->success('Email sent successfully!');
        session()->flash('success', 'Email sent successfully!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('success', 'Contact was deleted successfully!');

        return back();
    }
}
