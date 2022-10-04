<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\studentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;





//Route::get('/', [SiteController::class, 'showHome']);
//Route::get('/about', [SiteController::class, 'showAbout']);
//Route::get('/service', [SiteController::class, 'showService']);
//Route::get('/portfolio', [SiteController::class, 'showPortfolio']);
//Route::get('/login', [SiteController::class, 'showLogin']);
//Route::get('/product_list', [SiteController::class, 'showProductList']);
Route::get('/all',[studentsController::class,'allSelect']);
Route::get('/',[CategoryController::class,'cat_select'])->name('admin.category_list');
Route::get('/category/{id}/show',[CategoryController::class,'show'])->name('admin.show');
Route::get('/category/{id}/delete',[CategoryController::class,'destroy'])->name('admin.destroy');
Route::get('/category/create',[CategoryController::class,'create'])->name('admin.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('admin.store');
Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('admin.edit');
Route::patch('/category/{id}/edit',[CategoryController::class,'update'])->name('admin.update');



// secret route
Route::view('/admin/login', 'admin/login');
Route::view('/admin/dashboard', 'admin/dashboard');
Route::view('/admin/category_list', 'admin/category_list');
//Route::view('/admin/category_add', 'admin/category_add');

//Route::group(['prefix'=>'admin'],function(){


//
//    Route::get('/admin/persons',  function(){
//    return view('admin.category_add');
//    })->name('admin.category_add');


    Route::get('/admin/1',function (){
    dd('Showing-->>');
    });

    Route::fallback(function (){
        dd ('plz select correct directory');
    });

//    Route::get('/category/{id}',[categoriesController::class,'show'])->name('category.show');


//});

Route::view('/admin/category_show', 'admin/category_show');
Route::view('/admin/category_edit', 'admin/category_edit');
Route::view('/admin/profile_detail', 'admin/profile_detail');
Route::view('/admin/profile_edit', 'admin/profile_edit');
Route::view('/admin/product_list', 'admin/product_list');
Route::view('/admin/product_add', 'admin/product_add');
Route::view('/admin/product_show', 'admin/product_show');
Route::view('/admin/product_edit', 'admin/product_edit');
