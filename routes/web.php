<?php

use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\FrontEndController;
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

// login
Route::get("/login", [FrontEndController::class,"show_login"])->name('login');
Route::post('/check_login', [FrontEndController::class,'check_login']);

// admin


Route::middleware('auth')->group(function () {
    // chan khong cho vao trang admin
    Route::prefix('admin') -> group(function () {
        Route::get('/', function () {return view('admin.home');});
        Route::get('/product/list', [productController::class,'list_product']);
        Route::get('/order/list', [orderController::class,'list_order']);
    }); 

});
// product
Route::post('/admin/product/add', [productController::class, 'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/delete', [productController::class,'delete_product']);
Route::get('/admin/product/edit/{id}', [productController::class,'edit_product']);
Route::post('/admin/product/edit/{id}', [productController::class,'update_product']);


// order
Route::get('/admin/order/detail/{order_detail}',[orderController::class,'detail_order']);


// upload
Route::post('/upload', [uploadController::class,'uploadImage']);
Route::post('/uploads', [uploadController::class,'uploadImages']);

// frontend
Route::get('/', [FrontEndController::class,'index']);
Route::get('/product/{id}', [FrontEndController::class,'show_product']);
Route::get('/order/confirm', function () {return view('order.confirm');});
Route::get('/order/success', function () {return view('order.success');});

// cart
Route::post('/cart/add', [FrontEndController::class,'add_cart']);
Route::get('/cart', [FrontEndController::class,'show_cart']);
Route::get('/cart/delete/{id}', [FrontEndController::class,'delete_cart']);
Route::post('/cart/update', [FrontEndController::class,'update_cart']);
Route::post('/cart/send', [FrontEndController::class,'send_cart']);