<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\MailSend;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function mail(Request $req)
    {
        $mailData = [];
        $mailData['name'] = $req->name;
        $mailData['number'] = $req->number;
        $mailData['page_id'] = $req->page_id;
        $page = Page::find($mailData['page_id']);

        $mailData['page_name'] = $page->title;

        if ($req->type == 2) {
            FacadesMail::to('your_email@gmail.com')->send(new MailSend($mailData));
            return response()->json([
                'status' => 200
            ]);
        } else {
            $mailData['title'] = $req->title;
            FacadesMail::to('your_email@gmail.com')->send(new MailSend($mailData));
            return response()->json([
                'status' => 200
            ]);
        }
    }
}
