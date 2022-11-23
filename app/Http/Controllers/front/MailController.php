<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $req)
    {
        if ($req->type == 'simple') {
            $name = $req->name;
            $number = $req->number;

            return $name . ' || ' . $number;
        } else {
            $name = $req->name;
            $number = $req->number;
            $title = $req->title;

            return $name . ' || ' . $number . ' || ' . $title;
        }
    }
}
