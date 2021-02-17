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



Auth::routes();
Route::get('logout', [App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/store_dashboard', [App\Http\Controllers\HomeController::class, 'storeDashboard'])->name('store_dashboard');
Route::get('/store_login', [App\Http\Controllers\Auth\LoginController::class, 'storeLogin'])->name('store_login');
Route::post('/storelogin', [App\Http\Controllers\Auth\LoginController::class, 'storeuserLogin'])->name('storelogin');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::get('/add_product_category', [App\Http\Controllers\AdminController::class, 'addCategory'])->name('add_product_category');
Route::get('/add_product_sub-category', [App\Http\Controllers\AdminController::class, 'addSubcategory'])->name('add_product_sub-category');
Route::get('/add-products', [App\Http\Controllers\AdminController::class, 'addProducts'])->name('add-products');
Route::get('/view-stock', [App\Http\Controllers\AdminController::class, 'viewStock'])->name('view-stock');
Route::get('/add-store-category', [App\Http\Controllers\AdminController::class, 'addStore'])->name('add-store-category');
Route::get('/add-store-registration', [App\Http\Controllers\AdminController::class, 'storeRegistration'])->name('add-store-registration');
Route::get('/list-store-registration', [App\Http\Controllers\AdminController::class, 'listRegistration'])->name('list-store-registration');
Route::get('/invoice', [App\Http\Controllers\AdminController::class, 'invoice'])->name('invoice');
Route::post('/create_category', [App\Http\Controllers\AdminController::class, 'createCategory'])->name('create_category');
Route::post('/add_products', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('add_products');
Route::post('/create_subcategory', [App\Http\Controllers\AdminController::class, 'createSubcategory'])->name('create_subcategory');
Route::post('/add_store', [App\Http\Controllers\AdminController::class, 'addStorecategory'])->name('add_store');
Route::post('/store_reg', [App\Http\Controllers\AdminController::class, 'storeReg'])->name('store_reg');
