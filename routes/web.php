<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::redirect('/','/en');

Route::group(['prefix' => '{language}'] , function() {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/jobs', function () {
        return view('front.jobs');
    })->name('jobs');

    Route::get('/faqs', function () {
        return view('front.faqs');
    })->name('faqs');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('/terms', function () {
        return view('front.terms');
    })->name('terms');

    Route::get('/privacy', function () {
        return view('front.privacy');
    })->name('privacy');

    Route::get('/candidate', function () {
        return view('front.candidate');
    })->name('candidate');

    Route::get('/candidate-listing', function () {
        return view('front.candidate-listing');
    })->name('candidate-listing');

    Route::post('/checkLogin', [HomeController::class,'checkLogin'])->name('checkLogin');
    Route::get('/successLogin', [HomeController::class,'successLogin'])->name('successLogin');
    Route::get('/logout', [HomeController::class,'logout'])->name('logout');

});

