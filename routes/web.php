<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\ExcursionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use App\Models\Animation;
use App\Models\Company;
use App\Models\Diagram;
use App\Models\Excursion;
use App\Models\News;
use App\Models\Slider;
use App\Models\Video;
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


Route::get('/excursion', function(){
    return view('excursion', ['data' => Excursion::all()]);
});
Route::post('/excursions', [ExcursionController::class, 'addData'])->name('excursions.addData');
Route::get('/excursion/{id}', [ExcursionController::class, 'searchId'])->name('excursionid');
Route::post('/excursion/{id}/update', [ExcursionController::class, 'editData'])->name('excursionidup');
Route::get('/excursion/{id}/delete', [ExcursionController::class, 'deleteData'])->name('excursioniddel');


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/video', function(){
    return view('video', ['data' => Video::all()]);
});
Route::post('/videos', [VideoController::class, 'addData'])->name('videos.addData');
Route::get('/video/{id}', [VideoController::class, 'searchId'])->name('videoid');
Route::post('/video/{id}/update', [VideoController::class, 'editData'])->name('videoidup');
Route::get('/video/{id}/delete', [VideoController::class, 'deleteData'])->name('videoiddel');


Route::get('/news', function(){
    return view('news', ['data' => News::all()]);
});
Route::post('/newss', [NewsController::class, 'addData'])->name('newss.addData');
Route::get('/news/{id}', [NewsController::class, 'searchId'])->name('newsid');
Route::post('/news/{id}/update', [NewsController::class, 'editData'])->name('newsidup');
Route::get('/news/{id}/delete', [NewsController::class, 'deleteData'])->name('newsiddel');


Route::get('/about_company', function(){
    return view('about_company', ['data' => Company::all()]);
});
Route::post('/about_companies', [CompanyController::class, 'addData'])->name('companies.addData');
Route::get('/about_company/{id}', [CompanyController::class, 'searchId'])->name('companyid');
Route::post('/about_company/{id}/update', [CompanyController::class, 'editData'])->name('companyidup');
Route::get('/about_company/{id}/delete', [CompanyController::class, 'deleteData'])->name('companyiddel');


Route::get('/diagram', function(){
    return view('diagram', ['data' => Diagram::all()]);
});
Route::post('/diagrams', [DiagramController::class, 'addData'])->name('diagrams.addData');
Route::get('/diagram/{id}', [DiagramController::class, 'searchId'])->name('diagramid');
Route::post('/diagram/{id}/update', [DiagramController::class, 'editData'])->name('diagramidup');
Route::get('/diagram/{id}/delete', [DiagramController::class, 'deleteData'])->name('diagramiddel');
