<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Krlove\EloquentModelGenerator\Helper\Prefix;

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

Route::get('/login', function () {
    return view('backstage.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('news', [MainController::class, 'news'])->name('news');
Route::get('about_us', [MainController::class, 'about_us'])->name('about_us');
Route::get('product', [MainController::class, 'product'])->name('product');
Route::get('news_detail/{id}', [MainController::class, 'news_detail']);

Route::prefix('admin/banner')->middleware(['auth'])->group(function() {
    Route::get('/', [BannerController::class, 'index'])->name('banner');
    Route::post('/store', [BannerController::class, 'store']);
});

Route::prefix('admin/new_product')->middleware(['auth'])->group(function () {
    Route::get('/', [NewProductController::class, 'index'])->name('new_product');
    Route::post('/store', [NewProductController::class, 'store'])->name('store_product');
    // 
});

Route::prefix('admin/news')->middleware(['auth'])->group(function() {
    Route::get('/', [NewsController::class, 'index'])->name('back_news');
    Route::post('/store', [NewsController::class, 'store'])->name('store_news');
    Route::get('/create', [NewsController::class, 'create'])->name('add_news');
    Route::get('/edit/{id}', [NewsController::class, 'edit']);
    Route::post('/update/{id}', [NewsController::class, 'update']);
    Route::delete('/delete/{id}', [NewsController::class, 'delete']);
});
