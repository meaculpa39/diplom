<?php

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return view('main');
    });
    Route::get('/blog', function () {
        return view('blog');
    });
    Route::get('/blog/1', function () {
        return view('blog-single');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/coming-soon', function () {
        return view('coming-soon');
    });
    Route::get('/404', function () {
        return view('404');
    });

});
