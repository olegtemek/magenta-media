<?php

namespace App\Providers;

use App\Models\Insta;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
use Illuminate\Support\Facades\URL;
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
        if (env('APP_ENV' !== 'local')) {
            URL::forceScheme('https');
        }
        view()->composer('*', function ($view) {
            $global_data = [];
            $global_data['pages'] = Page::all();

            $global_data['settings'] = Setting::find(1);
            View::share('global_data', $global_data);
        });
    }
}
