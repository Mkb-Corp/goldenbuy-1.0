<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProductController as ClientProductController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [ClientProductController::class, 'product_details'])->name('product_details');
Route::get('/products/category/{id}', [ClientProductController::class, 'products_by_category'])->name('products_category');
Route::get('/products/all/}', [ClientProductController::class, 'index'])->name('products.all');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/products', [ProductController::class, 'index'])
    ->name('dashboard.products.index');
    Route::get('/dashboard/products/new', [ProductController::class, 'add'])
    ->name('dashboard.products.add');
    Route::post('/dashboard/products/new', [ProductController::class, 'new'])
    ->name('dashboard.products.new');
    Route::get('/dashboard/categories/', [CategoryController::class, 'index'])
    ->name('dashboard.categories.index');
    Route::get('/dashboard/subcategories/', [SubCategoryController::class, 'index'])
    ->name('dashboard.subcategories.index');

    // Post Requests
    Route::post('/dashboard/categories/add', [CategoryController::class, 'add'])
    ->name('dashboard.categories.new');
    Route::post('subcategories/add', [SubCategoryController::class, 'add'])
    ->name('dashboard.subcategories.new');
});
