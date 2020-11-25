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



Route::get('/', [App\Http\Controllers\frontController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin']);
Route::post('addIntro', [App\Http\Controllers\crudController::class, 'insertIntro']);
Route::post('addAboutme', [App\Http\Controllers\crudController::class, 'insertAboutme']);
Route::post('addFaq', [App\Http\Controllers\crudController::class, 'insertFaq']);
Route::post('addDetails', [App\Http\Controllers\crudController::class, 'insertDetails']);
Route::post('addReviews', [App\Http\Controllers\crudController::class, 'insertReviews']);
// Route::get('introduction', [App\Http\Controllers\crudController::class, 'showIntro']);
Route::get('introduction',[App\Http\Controllers\crudController::class, 'show']);


Route::get('introduction', function()
{
    return view('backend.introduction');
})->name('introduction');;

Route::get('aboutme', function()
{
    return view('backend.aboutme');
})->name('aboutme');;

Route::get('faq', function()
{
    return view('backend.faq');
})->name('faq');;

Route::get('details', function()
{
    return view('backend.details');
})->name('details');;

Route::get('reviews', function()
{
    return view('backend.reviews');
})->name('reviews');;

Auth::routes();

Route::get('/admin', function(){
    return view('backend.index');
})->middleware('admin');

Route::resource('/admin/pages','App\Http\Controllers\Admin\PagesController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


