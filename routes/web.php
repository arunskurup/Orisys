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
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\Backend\AdminauthController::class, 'login'])->name('user.login');
Route::post('/admin', [App\Http\Controllers\Backend\AdminauthController::class, 'loginadmin'])->name('admin.login');

// auth
Route::middleware(['auth:sanctum'])->group(function () {
Route::get('/Admin/User', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('user');
Route::get('/Admin/User/Delete/{id}', [App\Http\Controllers\Backend\UserController::class, 'delete'])->name('user.delete');

Route::get('/Admin/Category', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('Category');
Route::post('/Admin/Category/Create', [App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('Category.create');
Route::get('/Admin/Category/Delete/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('Category.delete');

Route::get('/Admin/Subcategory', [App\Http\Controllers\Backend\SubcategoryController::class, 'index'])->name('Subcategory');
Route::post('/Admin/Subcategory/Create', [App\Http\Controllers\Backend\SubcategoryController::class, 'create'])->name('Subcategory.create');
Route::get('/Admin/Subcategory/Delete/{id}', [App\Http\Controllers\Backend\SubcategoryController::class, 'delete'])->name('Subcategory.delete');
Route::get('/Admin/Subcategory/find/{id}', [App\Http\Controllers\Backend\SubcategoryController::class, 'find'])->name('Subcategory.find');

Route::get('/Admin/Product', [App\Http\Controllers\Backend\ProductController::class, 'index'])->name('Product');
Route::get('/Admin/Product/Create', [App\Http\Controllers\Backend\ProductController::class, 'create'])->name('Product.create');
Route::post('/Admin/Product/Create', [App\Http\Controllers\Backend\ProductController::class, 'created'])->name('Product.created');
Route::get('/Admin/ProductDelete/{id}', [App\Http\Controllers\Backend\ProductController::class, 'delete'])->name('Product.delete');

Route::get('/Admin/Product/Update/{id}', [App\Http\Controllers\Backend\ProductController::class, 'update'])->name('Product.update');
Route::post('/Admin/Product/Update/{id}', [App\Http\Controllers\Backend\ProductController::class, 'updated'])->name('Product.Update');


});
