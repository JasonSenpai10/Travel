<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FroIndexController;
use App\Http\Controllers\FroSliderController;
use App\Http\Controllers\ImgController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PhotographController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\VlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::resource('slider', FroSliderController::class);
Route::resource('photograph', PhotographController::class);
Route::resource('contact', ContactController::class);
Route::resource('response', ResponseController::class);
Route::resource('about', AboutController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('skill', SkillController::class);
Route::resource('location', LocationController::class);
Route::resource('img', ImgController::class);
Route::resource('vlog',VlogController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/froindex', [FroIndexController:: class, 'Index'])->name('froindex');
Route::get('/froabout', [FroIndexController::class, 'About'])->name('froabout');
Route::get('/froblog',[FroIndexController::class, 'Blog'])->name('froblog');
Route::get('/content/{vlog}', [FroIndexController::class,'Content'])->name('content');