<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
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
    return view('frontoffice.home');
});
Route::get('/gallery/farm', function () {
    return view('frontoffice.gallery_farm');
});
Route::get('/gallery/product', function () {
    return view('frontoffice.gallery_product');
});
Route::get('/contact-us', function () {
    return view('frontoffice.contact');
});

// Backoffice
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('validation', [LoginController::class, 'validation'])->name('validation');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/admin/slider', [SliderController::class, 'index'])->name('slider')->middleware('auth');
Route::get('/admin/slider/create', [SliderController::class, 'create'])->name('create-slider')->middleware('auth');
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('edit-slider')->middleware('auth');
Route::post('/admin/slider/store', [SliderController::class, 'store'])->name('store-slider')->middleware('auth');
Route::put('/admin/slider/update/{id}', [SliderController::class, 'update'])->name('update-slider')->middleware('auth');
Route::get('/admin/slider/delete/{id}', [SliderController::class, 'delete'])->name('delete-slider')->middleware('auth');
Route::get('/admin/slider/toggle/{id}/{status}', [SliderController::class, 'toggleSlide'])->name('toggle-slider')->middleware('auth');

Route::get('/admin/home', [SectionController::class, 'index'])->name('home')->middleware('auth');
Route::get('/admin/home/create', [SectionController::class, 'create'])->name('create-section')->middleware('auth');
Route::get('/admin/home/edit/{id}', [SectionController::class, 'edit'])->name('edit-section')->middleware('auth');
Route::post('/admin/home/store', [SectionController::class, 'store'])->name('store-section')->middleware('auth');
Route::put('/admin/home/update/{id}', [SectionController::class, 'update'])->name('update-section')->middleware('auth');
Route::get('/admin/home/delete/{id}', [SectionController::class, 'delete'])->name('delete-section')->middleware('auth');
Route::get('/admin/home/toggle/{id}/{status}', [SectionController::class, 'toggleSlide'])->name('toggle-section')->middleware('auth');

Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('gallery')->middleware('auth');
Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->name('create-gallery')->middleware('auth');
Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('edit-gallery')->middleware('auth');
Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->name('store-gallery')->middleware('auth');
Route::put('/admin/gallery/update/{id}', [GalleryController::class, 'update'])->name('update-gallery')->middleware('auth');
Route::get('/admin/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('delete-gallery')->middleware('auth');
Route::get('/admin/gallery/toggle/{id}/{status}', [GalleryController::class, 'toggleSlide'])->name('toggle-gallery')->middleware('auth');

Route::get('/admin/news', [NewsController::class, 'index'])->name('news')->middleware('auth');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create-news')->middleware('auth');
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('edit-news')->middleware('auth');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('store-news')->middleware('auth');
Route::put('/admin/news/update/{id}', [NewsController::class, 'update'])->name('update-news')->middleware('auth');
Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete'])->name('delete-news')->middleware('auth');
Route::get('/admin/news/toggle/{id}/{status}', [NewsController::class, 'toggleSlide'])->name('toggle-news')->middleware('auth');