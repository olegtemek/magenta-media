<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['products'] = Product::where('page_id', 1)->get();
        $data['gallery'] = Product::where('page_id', 1)->get();
        return view('front.home.index', compact('data'));
    }
}
