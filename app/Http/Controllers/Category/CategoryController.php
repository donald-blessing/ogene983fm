<?php

namespace App\Http\Controllers\Category;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category\Category;
use App\Models\Platform\Platform;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CategoryController extends Controller
{
    use ControllerTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function dashboard()
    {
        $categories = Category::with('description')->orderBy('created_at', 'desc')->get();

        return view('site.dashboard.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('site.dashboard.category.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request;  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'cover_image' => ['required', 'file', 'mimes:png,jpg,jpeg'],
        ]);
        DB::beginTransaction();
        try { // attach the category to the platform
            $category = Category::firstOrCreate(
                ['name' => $request->name]
            );
            if ($request->has('category_id') && ($request->category_id != null)) {
                $category->category_id = $request->category_id;
                $category->save();
            }
            $category->storeAbout($request->description);
            $category->uploadMediaFromRequest('cover_image', 'category');
            $helper = new Helper;
            $tags = $helper->getKeywords(implode(' ', [$request->name, $request->description]));
            $category->attachTags($tags);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'Error occurred while adding category.'.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Category was added successfully.');

        return redirect()->route('category.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category\Category  $category
     * @return Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $category
     * @return Response
     */
    public function edit($category)
    {
        $categories = Category::pluck('name', 'id');

        return view('site.dashboard.category.edit', ['categories' => $categories, 'category' => Category::whereSlug($category)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $request->flash();
        $validated = $request->validate();
        DB::beginTransaction();
        try {
            $category = Category::whereSlug($category->slug)->first();
            $category->name = $validated['name'];
            if ($request->has('category_id')) {
                $category->category_id = $validated['category_id'];
            }
            $category->save();
            $category->storeAbout($validated['description']);
            if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
                $category = Category::findOrFail($category->id);
                $media = $category->getMedia('category');
                if ($media) {
                    foreach ($media as $item) {
                        $mediaItem = Media::findOrFail($item->id);
                        $mediaItem->delete();
                    }
                }
                $category->uploadMedia($request->file('cover_image'), 'category');
            }
            $helper = new Helper;
            $tags = $helper->getKeywords(implode(' ', [$validated['name'], $validated['description']]));
            $category->syncTags($tags);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'Error occurred while updating category.'.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Category was updated successfully.');

        return redirect()->route('category.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category\Category  $category
     * @return Response
     */
    public function destroy($category)
    {
        DB::beginTransaction();
        try {
            $category = Category::whereSlug($category)->first();
            $category->deleteAbout();
            $category->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'Error occurred while deleting category.'.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Category was deleted successfully.');

        return redirect()->route('category.dashboard');
    }

    public function subcategory($category)
    {
        $helper = new Helper;
        if ($helper->isNumber($category)) {
            $category = Category::findOrFail($category);

            return response()->json($category->childrenCategories, 200);
        }

        $category = Category::whereSlug($category)->first();

        return response()->json($category->childrenCategories, 200);
    }
}
