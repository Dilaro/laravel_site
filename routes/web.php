<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\SliderController;
use App\Models\Animation;
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
    return view('slider', ['data' => Slider::all()]);
});
Route::post('/sliders', [SliderController::class, 'addData'])->name('sliders.addData');
Route::get('/slider/{id}', [SliderController::class, 'searchId'])->name('sliderid');
Route::post('/slider/{id}/update', [SliderController::class, 'editData'])->name('slideridup');
Route::get('/slider/{id}/delete', [SliderController::class, 'deleteData'])->name('slideriddel');

Route::get('/animated', function(){
    return view('animated_text', ['data' => Animation::all()]);
});
Route::post('/animations', [AnimationController::class, 'addData'])->name('animations.addData');
Route::get('/animated/{id}', [AnimationController::class, 'searchId'])->name('animatedid');
Route::post('/animated/{id}/update', [AnimationController::class, 'editData'])->name('animatedidup');
Route::get('/animated/{id}/delete', [AnimationController::class, 'deleteData'])->name('animatediddel');



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
