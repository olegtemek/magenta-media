<?php

namespace App\Providers;

use App\Models\Insta;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $global_data = [];
            $global_data['pages'] = Page::all();

            // if (Insta::find(1)) {
            //     $insta = Insta::find(1);
            //     $instagram = new InstagramBasicDisplay([
            //         'appId' => env('APP_ID'),
            //         'appSecret' => env('APP_SECRET'),
            //         'redirectUri' => env('REDIRECT_URI')
            //     ]);

            //     $instagram->setAccessToken($insta->token);
            //     $media = $instagram->getUserMedia('me', 8);
            //     $global_data['insta_image'] = [];

            //     foreach ($media->data as $item) {
            //         if ($item->media_type == 'IMAGE') {
            //             array_push($global_data['insta_image'], ['image' => $item->media_url, 'image_url' => $item->permalink]);
            //         } elseif ($item->media_type == 'CAROUSEL_ALBUM') {
            //             foreach ($item->children->data as $itemChildren) {
            //                 if ($itemChildren->media_type == 'IMAGE') {
            //                     array_push($global_data['insta_image'], ['image' => $item->media_url, 'image_url' => $item->permalink]);
            //                     break;
            //                 }
            //             }
            //         }
            //     }

            //     //if u want to show in the view
            //     // @foreach ($global_data['insta_image'] as $item)
            //     //     <a href="{{$item['image_url']}}" target="_blank"><img src="{{$item['image']}}" alt="" style="max-width:150px"></a>
            //     //     <br>
            //     // @endforeach
            // }

            $global_data['settings'] = Setting::find(1);
            View::share('global_data', $global_data);
        });
    }
}
