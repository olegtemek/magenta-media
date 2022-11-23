<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $req)
    {
        $name = $req->name;
        $number = $req->number;
        $page_id = $req->page_id;
        $page = Page::find($page_id);

        if ($req->type == 'simple') {


            return $name . ' || ' . $number . ' || ' . $page_id;
        } else {
            $title = $req->title;

            return $name . ' || ' . $number . ' || ' . $title . ' || ' . $page_id;
        }
    }
}
