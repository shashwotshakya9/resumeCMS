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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [App\Http\Controllers\frontController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin']);
Route::post('addSettings', [App\Http\Controllers\crudController::class, 'insertData']);
// Route::post('addSettings', [App\Http\Controllers\crudController::class, 'insertAboutme']);

Auth::routes();

Route::get('/admin', function(){
    return view('backend.index');
})->middleware('admin');

Route::resource('/admin/pages','App\Http\Controllers\Admin\PagesController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


