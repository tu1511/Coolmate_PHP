<?php

use App\Http\Controllers\Admin\productController;
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

// admin
Route::get('/admin', function () {
    return view('admin.home');
});
// product
Route::post('/admin/product/add', [productController::class, 'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/list', [productController::class,'list_product']);
Route::get('/admin/product/delete', [productController::class,'delete_product']);
Route::get('/admin/product/edit/{id}', [productController::class,'edit_product']);
Route::post('/admin/product/edit/{id}', [productController::class,'update_product']);



Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});

Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});
// upload
Route::post('/upload', [uploadController::class,'uploadImage']);
Route::post('/uploads', [uploadController::class,'uploadImages']);

// frontend
Route::get('/', function () {return view('home');});
