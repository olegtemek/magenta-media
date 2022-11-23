<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['products'] = Product::where('page_id', 1)->limit(4)->get();
        $data['gallery'] = Gallery::where('page_id', 1)->get();
        $data['page'] = Page::find(1);
        return view('front.home.index', compact('data'));
    }
    public function getProducts(Request $req)
    {
        return view('front.components.products', ['products' => Product::where('page_id', $req->id)->get(), 'btn' => 'Скрыть']);
    }
    public function other($slug)
    {
        $data  = [];
        $data['page'] = Page::where('slug', $slug)->first();
        $data['products'] = Product::where('page_id', $data['page']->id)->limit(4)->get();
        $data['gallery'] = Gallery::where('page_id', $data['page']->id)->get();

        if ($data['page']->id == 1) {
            return abort(404);
        }

        return view('front.other.index', compact('data'));
    }
}
