<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NestedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KarakterController;

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


Route::get('/nested', [NestedController::class, 'index'])->name('nested');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('karakter', KarakterController::class)->middleware('auth');

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
