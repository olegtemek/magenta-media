<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        Page::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'description' => $request->description,
            'custom_title' => $request->custom_title,
            'custom_description' => $request->custom_description,
            'custom_image' => $request->custom_image,
            'seo_title' => $request->seo_title,
            'seo_text' => $request->seo_text,
            'seo_description' => $request->seo_description,
            'slug' => Str::slug($request->slug),

        ]);

        return redirect()->route('admin.page.index')->with('message', 'Страница была добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Page::find($id);
        return view('admin.page.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
        Page::find($id)->update($request->only(['title', 'subtitle', 'description', 'image', 'custom_title', 'custom_description', 'custom_image', 'seo_title', 'seo_text', 'seo_description']));

        return redirect()->route('admin.page.index')->with('message', 'Страница была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect()->route('admin.page.index')->with('message', 'Страница была удалена');
    }
}
