<?php

use App\Http\Controllers\ProductsController;
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

Route::view('/', 'home.index')->name('home.index');
Route::view('/institut', 'institute.index')->name('institute.index');
Route::view('/rayonnement', 'rayonnement.index')->name('rayonnement.index');
Route::get('/produits', [ProductsController::class, 'index'])->name('products.index');
Route::view('/blog', 'blog.index')->name('blog.index');
Route::view('/contact', 'contact.index')->name('contact.index');
