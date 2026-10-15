<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderCartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenderController;
use App\Http\Controllers\AdminController;


route::get('/dashboard', function () {
    return "HELLO DASHBOARD";
});


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/categories', [HomeController::class,'categories'])->name('mobile');

Route::get('/sub-categories', [SubCategoriesController::class,'subcategories'])->name('subcategories');
Route::get('/product-details', [ProductController::class,'productDetails'])->name('productdetails');
Route::get('/product-order-list', [OrderCartController::class,'orderProductList'])->name('order-product-list');
Route::get('/order-check', [CheckoutController::class,'ordercheck'])->name('ordercheck');
Route::post('/register', [UserController::class,'register'])->name('register');
Route::get('/login', [UserController::class,'login']);

// backend user section start
Route::get('/user', [UserController::class,'index']);
Route::get('/order-history', [UserController::class,'orderHistory']);
Route::get('/order-details', [UserController::class,'orderDetails']);
Route::get('/settings', [UserController::class,'settings']);


// vender dashboard section start route 
Route::get('/vender-login', [VenderController::class,'login']);
Route::get('/vender-register', [VenderController::class,'signup']);
Route::post('/vender-register', [VenderController::class,'storeVender'])->name('store.vender');
Route::get('/vender', [VenderController::class,'index']);
Route::get('/vender/add-products', [VenderController::class,'venderAddproduct']);
Route::get('/vender/view-products', [VenderController::class,'venderViewproduct']);
Route::get('/vender/update-products', [VenderController::class,'venderUpdateproduct']);
Route::get('/vender/order-history', [VenderController::class,'venderOrderHistory']);
Route::get('/vender/order-details', [VenderController::class,'venderOrderDetails']);
Route::get('/vender/users', [VenderController::class,'venderUsers']);
Route::get('/vender/profile', [VenderController::class,'venderProfile']);

// admin dashboard section start route 
Route::get('/admin-login', [AdminController::class,'login']);
Route::get('/admin-register', [AdminController::class,'signup']);
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/order-details', [AdminController::class,'venderOrderDetails']);
Route::get('/admin/add-category', [AdminController::class,'venderAddproduct']);
Route::get('/admin/view-category', [AdminController::class,'venderViewproduct']);
Route::get('/admin/update-category', [AdminController::class,'venderUpdateproduct']);
Route::get('/admin/users', [AdminController::class,'venderUsers']);
Route::get('/admin/venders', [AdminController::class,'adminVender']);
Route::get('/admin/products', [AdminController::class,'products']);

Route::get('/admin/order-history', [AdminController::class,'venderOrderHistory']);
Route::get('/admin/profile', [AdminController::class,'venderProfile']);