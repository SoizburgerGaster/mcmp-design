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

Route::post('/subscribe', [HomeController::class, 'subscribe']) ->name('subscribe');





Route::get('/', function () {
    return view('home');
});

Route::get('/home', [
    HomeController::class, 'index'
]);

Route::get('/subscribe', [
    HomeController::class, 'subscribe']
);

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/o-nama', function () {
    return view('o-nama');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
