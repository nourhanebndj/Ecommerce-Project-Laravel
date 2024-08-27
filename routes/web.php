<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/guest/home', [GuestController::class, 'home']);
Route::get('/product/{id}', [GuestController::class, 'productDetails'])->name('product.details');
Route::get('/shop', [GuestController::class, 'shop'])->name('shop');
Route::get('/categoryDetails/{id}', [GuestController::class, 'categoryDetails'])->name('category.details');
Route::post('/product/search', [GuestController::class, 'search'])->name('search');


Route::get('/contact', [ContactController::class, 'Contact'])->name('Contact');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/admin/Profil', [App\Http\Controllers\AdminController::class, 'Profil'])->middleware('auth');
Route::post('/admin/Profil/update', [App\Http\Controllers\AdminController::class, 'updateprofile'])->middleware('auth');
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->middleware('auth');


Route::get('/client/dashboard', [App\Http\Controllers\ClientController::class, 'dashboard']);
Route::get('/client/profile', [App\Http\Controllers\ClientController::class, 'profile']);
Route::post('/client/profile/update', [App\Http\Controllers\ClientController::class, 'updateprofile'])->middleware('auth');
Route::post('/client/order/store', [App\Http\Controllers\CommandeController::class, 'store'])->middleware('auth');
Route::get('client/cart/{commande}', [App\Http\Controllers\CommandeController::class, 'showCart'])->name('client.cart');
Route::get('/client/cart/remove/{id}', [App\Http\Controllers\CommandeController::class, 'removeItem'])->name('client.cart.remove');
Route::get('/client/checkout', [App\Http\Controllers\CommandeController::class, 'checkoutPage'])->name('client.checkout');
Route::post('/client/checkout', [App\Http\Controllers\CommandeController::class, 'checkout'])->name('client.checkout');
Route::get('/client/commande', [App\Http\Controllers\CommandeController::class, 'listOrders'])->name('client.commande');

Route::get('/admin/Commandes', [App\Http\Controllers\CommandeController::class, 'showOrders'])->name('admin.Commandes');
Route::post('/admin/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->middleware('auth');
Route::get('/admin/category/{id}/delete', [App\Http\Controllers\CategoryController::class, 'destroy'])->middleware('auth');
Route::post('/admin/category/update', [App\Http\Controllers\CategoryController::class, 'update'])->middleware('auth');
/*Product*/
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('auth');
Route::post('/admin/product/store', [App\Http\Controllers\ProductController::class, 'store'])->middleware('auth');
Route::get('/admin/product/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy'])->middleware('auth');
Route::post('/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->middleware('auth');