<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/doctors', [SiteController::class, 'doctors']);
Route::get('/news', [SiteController::class, 'news']);
Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/slider', [SliderController::class, 'index']);
Route::get('/admin/slider/create', [SliderController::class, 'create']);
Route::post('/admin/slider/store', [SliderController::class, 'store']);
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit']);
Route::put('/admin/slider/update/{id}', [SliderController::class, 'update']);
Route::get('/admin/slider/destroy/{id}', [SliderController::class, 'destroy']);