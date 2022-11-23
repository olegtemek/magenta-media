<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $req)
    {
        $name = $req->name;
        $number = $req->number;

        return $name . ' || ' . $number;
    }
}
