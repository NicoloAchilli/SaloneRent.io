<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::view('/','home' )->name('home');

Route::view('/catalogo', 'catalog')->name( 'catalogo');

Route::view('/faq', 'faq')->name('faq');

Route::view('/who', 'who')->name('who');

Route::view('/where', 'where')->name('where');

Route::view('/cond_e_term', 'cond_e_term')->name('cond_e_term');

//Route::get('/', HomeController::class, 'showHome')
//    ->name('home');

/*  Rotte aggiunte da Breeze

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/
require __DIR__.'/auth.php';
