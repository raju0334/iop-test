<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [AdminController::class, 'adminLoginFormShow'])->name('admin.login.form');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/categories', [CategoryController::class, 'showCategoryList'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'showCategoryForm'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoryController::class, 'categoryDestroy'])->name('category.destroy');

Route::get('/brands', [BrandController::class, 'showBrandList'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'showBrandForm'])->name('brand.create');
Route::post('/brand/store', [BrandController::class, 'brandStore'])->name('brand.store');
Route::get('/brand/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'brandUpdate'])->name('brand.update');
Route::get('/brand/destroy/{id}', [BrandController::class, 'brandDestroy'])->name('brand.destroy');

Route::get('/products', [ProductController::class, 'showProductList'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'showProductForm'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'productStore'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
Route::get('/product/destroy/{id}', [ProductController::class, 'productDestroy'])->name('product.destroy');
