<?php

use App\Http\Controllers\SliderController;
use App\Models\Slider;
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

Route::get('/', function () {
    return view('main');
});
Route::get('/admin', function () {
    return view('void');
});
Route::get('/slider', function () {
    return view('slider');
});

Route::post('/sliders', [SliderController::class, 'abc'])->name('sliders.abc');



Route::get('/animated', function () {
    return view('animated_text');
});
Route::get('/excursion', function () {
    return view('excursion');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/about_company', function () {
    return view('about_company');
});
Route::get('/diagrams', function () {
    return view('diagrams');
});
