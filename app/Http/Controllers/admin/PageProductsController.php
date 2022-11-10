<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class PageProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page = Page::find($id);
        $products = Product::all();
        return view('admin.product.index', compact('page', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $page = Page::find($id);
        return view('admin.product.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, $id)
    {

        Product::create([
            'title' => $request->title,
            'image' => $request->image,
            'page_id' => $id,
            'price' => $request->price
        ]);

        return redirect()->route('admin.product.index', $id)->with('message', 'Товар успешно был добавлен');
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
        $item = Product::find($id);
        $page = Page::find($item->page_id);
        return view('admin.product.edit', compact('page', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {

        $page_id = Product::find($id)->page_id;

        Product::find($id)->update([
            'title' => $request->title,
            'image' => $request->image,
            'page_id' => $page_id,
            'price' => $request->price
        ]);

        return redirect()->route('admin.product.index', $page_id)->with('message', 'Товар успешно был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $page_id = Product::find($id)->page_id;
        Product::destroy($id);
        return redirect()->route('admin.product.index', $page_id)->with('message', 'Товар успешно был удален');
    }
}
