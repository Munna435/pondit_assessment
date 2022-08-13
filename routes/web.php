<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;





Route::get('/', [SiteController::class, 'showHome']);
Route::get('/about', [SiteController::class, 'showAbout']);
Route::get('/service', [SiteController::class, 'showService']);
Route::get('/portfolio', [SiteController::class, 'showPortfolio']);
Route::get('/login', [SiteController::class, 'showLogin']);
Route::get('/productlist', [SiteController::class, 'showProductList']);




// secret route
Route::view('/admin/login', 'admin/login');
Route::view('/admin/dashboard', 'admin/dashboard');
Route::view('/admin/category_list', 'admin/category_list');
Route::view('/admin/category_add', 'admin/category_add');
Route::view('/admin/category_show', 'admin/category_show');
Route::view('/admin/category_edit', 'admin/category_edit');
Route::view('/admin/Profile_detail', 'admin/Profile_detail');
Route::view('/admin/profile_edit', 'admin/profile_edit');
Route::view('/admin/product_list', 'admin/product_list');
Route::view('/admin/product_add', 'admin/product_add');
Route::view('/admin/product_show', 'admin/product_show');
Route::view('/admin/product_edit', 'admin/product_edit');
