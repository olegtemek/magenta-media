<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index($id)
    {
        $data = [];
        $data['photos'] = Photo::where('page_id', $id)->get();
        $data['pages'] = Page::all();
        $data['page'] = Page::find($id);
        return view('front.photo.index', compact('data'));
    }
}
