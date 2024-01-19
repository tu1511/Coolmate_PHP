<?php

use App\Http\Controllers\Admin\uploadController;
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

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/product_add', function () {
    return view('admin.product_add');
});

Route::get('/admin/product_list', function () {
    return view('admin.product_list');
});

Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});

Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});

Route::post('/upload', [uploadController::class,'uploadImage']);

Route::get('/', function () {
    return view('welcome');
});
