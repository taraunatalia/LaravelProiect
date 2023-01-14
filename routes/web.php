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


Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/', [ProductController::class, 'index']);
// Route::get('cart', [ProductController::class, 'cart'])->name('cart');
// Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
// Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
// Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  Auth::routes();

//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){
Route::resource('tasks', 'App\Http\Controllers\TaskController');

//Product Routes
Route::get('/', [ProductController::class, 'index']); //afisare pagina de start
Route::get('cart', [ProductController::class, 'cart'])->name('cart'); //cos
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');//adaug in cos
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart'); //modific cos
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');//sterg din cos


});