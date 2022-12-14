<?php

use App\Http\Controllers\admin\IndexController as adminIndexController;
use App\Http\Controllers\admin\PageController as adminPageController;
use App\Http\Controllers\admin\PageProductsController as adminPageProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\PageGalleryController as adminPageGalleryController;
use App\Http\Controllers\admin\SettingController as adminSettingController;
use App\Http\Controllers\admin\InstaController as adminInstaController;
use App\Http\Controllers\admin\PhotoController as adminPhotoController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\MailController;
use App\Http\Controllers\front\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [adminIndexController::class, 'index'])->name('home.index');
    Route::resource('/page', adminPageController::class)->except(['show']);


    Route::controller(adminPageProductsController::class)->group(function () {
        Route::get('/product/{id}', 'index')->name('product.index');
        Route::get('/product/{id}/create', 'create')->name('product.create');
        Route::post('/product/{id}', 'store')->name('product.store');
        Route::get('/product/{id}/edit', 'edit')->name('product.edit');
        Route::put('/product/{id}/update', 'update')->name('product.update');
        Route::delete('/product/{id}', 'destroy')->name('product.destroy');
    });
    Route::controller(adminPhotoController::class)->group(function () {
        Route::get('/photo/{id}', 'index')->name('photo.index');
        Route::get('/photo/{id}/create', 'create')->name('photo.create');
        Route::post('/photo/{id}', 'store')->name('photo.store');
        Route::get('/photo/{id}/edit', 'edit')->name('photo.edit');
        Route::put('/photo/{id}/update', 'update')->name('photo.update');
        Route::delete('/photo/{id}', 'destroy')->name('photo.destroy');
    });
    Route::controller(adminPageGalleryController::class)->group(function () {
        Route::get('/gallery/{id}', 'index')->name('gallery.index');
        Route::get('/gallery/{id}/create', 'create')->name('gallery.create');
        Route::post('/gallery/{id}', 'store')->name('gallery.store');
        Route::get('/gallery/{id}/edit', 'edit')->name('gallery.edit');
        Route::put('/gallery/{id}/update', 'update')->name('gallery.update');
        Route::delete('/gallery/{id}', 'destroy')->name('gallery.destroy');
    });

    Route::get('/inst/insta-token-check', [adminInstaController::class, 'index'])->name('insta.index');
    Route::resource('/setting', adminSettingController::class)->only(['index', 'update']);
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'request'])->name('login.post');


Route::group(['as' => 'front.'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
    Route::get('/{slug}', [IndexController::class, 'other'])->name('other.index');
    Route::post('/get-products', [IndexController::class, 'getProducts']);
    Route::post('/send-mail', [MailController::class, 'mail'])->name('mail');
    Route::get('/photo/{id}', [PhotoController::class, 'index'])->name('photo.index');
});





//Insta token for cron url
Route::get('/inst/insta-token-check/check', [adminInstaController::class, 'instaToken'])->name('insta.check');
Route::get('/inst/insta-token-check/get', [adminInstaController::class, 'getPosts'])->name('insta.get');
