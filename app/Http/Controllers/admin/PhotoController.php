<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page = Page::find($id);
        $gallery = Photo::where('page_id', $page->id)->get();
        return view('admin.photo.index', compact('page', 'gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $page = Page::find($id);
        return view('admin.photo.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Photo::create([
            'image' => $request->image,
            'page_id' => $id,
            'title' => $request->title
        ]);

        return redirect()->route('admin.photo.index', $id)->with('message', 'Изображение успешно был добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Photo::find($id);

        return view('admin.photo.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page_id = Photo::find($id)->page_id;

        Photo::find($id)->update([
            'image' => $request->image,
            'page_id' => $page_id,
            'title' => $request->title
        ]);

        return redirect()->route('admin.photo.index', $page_id)->with('message', 'Изображение успешно было изменено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page_id = Photo::find($id)->page_id;
        $gallery = Photo::destroy($id);
        return redirect()->route('admin.photo.index', $page_id)->with('message', 'Изображение было успешно удалено');
    }
}
