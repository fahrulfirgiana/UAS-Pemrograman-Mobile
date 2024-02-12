<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

Route::resource('/reset', App\Http\Controllers\Auth\ResetController::class);

Route::resource('/img', App\Http\Controllers\ImageController::class);

Route::get('/user/logout', [AdminController::class, 'logout'])->name('user.logout');


Route::resource('admin',AdminController::class);
Route::get('view_product', [AdminController::class, 'view_product']);
Route::post('add_product', [AdminController::class, 'add_product']);
Route::get('showProduct', [AdminController::class, 'showProduct']);
Route::get('editProduct/{id}', [AdminController::class, 'edit']);
Route::put('/update_product/{id}', [AdminController::class, 'updateProduct']);
Route::delete('deleteProduct/{id}', [AdminController::class, 'deleteProduct']);

Route::get('view_category', [AdminController::class, 'view_category'])->name('categories');
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('editKategori/{id}', [AdminController::class, 'editCategory']);
Route::put('/updateCategory/{id}', [AdminController::class, 'updateKategori']);
Route::delete('deleteKategori/{id}', [AdminController::class, 'deleteKategori']);
