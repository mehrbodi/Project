<?php

use App\Http\Controllers\MyController;
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

Route::get('/',[MyController::class,'index']);

Route::get('/panel/add_home',[MyController::class,'create'])->name('add_home');
Route::post('/panel/add_home',[MyController::class,'store'])->name('store_home');
Route::post('/panel/update_home/{home}',[MyController::class,'update'])->name('update_home');
Route::get('/pages/show_homes',[MyController::class,'show'])->name('show_home');
Route::get('/pages/single_page/{post_id}',[MyController::class,'edit'])->name('single_page');
Route::post('/panel/delete/{del}',[MyController::class,'destroy'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
