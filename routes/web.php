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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman', function () {
    return view('halaman');
});






Auth::routes();

Route::get('/beranda', [App\Http\Controllers\MainController::class, 'beranda'])->name('beranda');
Route::get('/bunga', [App\Http\Controllers\MainController::class, 'bunga'])->name('bunga');

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return redirect('/beranda');
});

Route::get('/b3', function () {
    return view('beranda3');
});





Route::get('/cobaa', 'App\Http\Controllers\CobaController@coba');
// Route::get('/beranda', 'App\Http\Controllers\MainController@beranda');
// Route::get('/bunga', 'App\Http\Controllers\MainController@bunga');

Route::get('/bunga2', function () {
    return view('bunga2');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/try', [App\Http\Controllers\HomeController::class, 'try'])->name('try');
