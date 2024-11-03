<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::resource('produits', ProductController::class);


Route::resource('profils', App\Http\Controllers\ProfilController::class);






Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('pros', App\Http\Controllers\proController::class);


Route::resource('produitees', App\Http\Controllers\produiteesController::class);
