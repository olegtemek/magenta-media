<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Insta;
use Illuminate\Http\Request;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

class InstaController extends Controller
{
    public function index()
    {
        $instagram = new InstagramBasicDisplay([
            'appId' => env('APP_ID'),
            'appSecret' => env('APP_SECRET'),
            'redirectUri' => env('REDIRECT_URI')
        ]);

        if (Insta::find(1)) {
            print_r('last update token = <strong>' . Insta::find(1)->day . '</strong><br>');
        }
        echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";

        if (isset($_GET['code'])) {
            $code = $_GET['code'];

            $token = $instagram->getOAuthToken($code, true);
            $token = $instagram->getLongLivedToken($token, true);


            $token60Days = $instagram->refreshToken($token)->access_token;

            $today = date('d-m-Y');


            if (Insta::find(1)) {
                Insta::find(1)->update([
                    'token' => $token60Days,
                    'day' => $today
                ]);
            } else {
                Insta::create([
                    'token' => $token60Days,
                    'day' => $today
                ]);
            }
        }


        // check token
        // use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
        // add model
        // use use App\Models\Insta;

        if (Insta::find(1)) {
            $insta = Insta::find(1);
            $day = date('d-m-Y', strtotime("+30 day", strtotime($insta->day)));

            if (strtotime($day) < strtotime(date('d-m-Y'))) {
                $token60Days = $instagram->refreshToken($insta->token)->access_token;
                $insta->update([
                    'token' => $token60Days,
                    'day' => date('d-m-Y')
                ]);
                echo '<h1>Token was updated</h1>';
            } else {
                echo '<h1>Good<h1>';
            }

            echo '<br><br><a href="' . route('admin.home.index') . '">Go to admin panel</a>';
        }
    }
    public function instaToken()
    {
        $instagram = new InstagramBasicDisplay([
            'appId' => env('APP_ID'),
            'appSecret' => env('APP_SECRET'),
            'redirectUri' => env('REDIRECT_URI')
        ]);

        if (Insta::find(1)) {
            $insta = Insta::find(1);
            $day = date('d-m-Y', strtotime("+30 day", strtotime($insta->day)));

            if (strtotime($day) < strtotime(date('d-m-Y'))) {
                $token60Days = $instagram->refreshToken($insta->token)->access_token;
                $insta->update([
                    'token' => $token60Days,
                    'day' => date('d-m-Y')
                ]);
                echo '<h1>Token was updated</h1>';
            } else {
                echo '<h1>Good<h1>';
            }

            // Add to cron url
        }
    }
}
