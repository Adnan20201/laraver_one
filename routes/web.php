<?php

use App\Http\Controllers\backend\BlogController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Blog route
Route::get('/add_post',[BlogController::class,'create'])->name('post.create');
Route::post('/store_post',[BlogController::class,'store'])->name('store.create');
Route::get('/all_post',[BlogController::class,'all'])->name('all.create');