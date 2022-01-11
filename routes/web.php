<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/add', function () {
    return view('add'); 
});



Route::get('/', [ArtikelController::class, 'show']);

Route::post('/add_process', [ArtikelController::class, 'add_process'] );

Route::get('/detail/{id}', [ArtikelController::class, 'detail']);

Route::get('/admin', [ArtikelController ::class, 'show_by_admin']);

Route::get('/edit/{id}', [ArtikelController::class, 'edit']);

Route::post('/edit_process', [ArtikelController::class, 'edit_process']);

Route::get('/delete/{id}', [ArtikelController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
