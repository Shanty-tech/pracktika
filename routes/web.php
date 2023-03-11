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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/admin_panel', [App\Http\Controllers\AdminController::class, 'view_bd'])->name('admin');
Route::get('/home/admin_panel/add', [App\Http\Controllers\AdminController::class, 'add'])->name('add_tov');
Route::get('/home/admin_panel/delete_tov_bd{id}', [App\Http\Controllers\AdminController::class, 'delete_tov_bd'])->name('delete_tov_bd');
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\product::class, 'product'])->name('welcome');
Route::get('/cart', [App\Http\Controllers\product::class, 'products']);
Route::get('/cart/min_price', [App\Http\Controllers\product::class, 'min_price'])->name('min_price');
Route::get('/cart/max_price', [App\Http\Controllers\product::class, 'max_price'])->name('max_price');
Route::get('/korzina', [App\Http\Controllers\korzina::class, 'view_kor'])->name('korzina');
Route::get('/korzina{id}', [App\Http\Controllers\korzina::class, 'add'])->name('kor');
Route::get('/korzina/delete{id}', [App\Http\Controllers\korzina::class, 'dellete'])->name('del_kor');