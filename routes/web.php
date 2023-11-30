<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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





require __DIR__.'/auth.php';

Route::get('/',[AdminController::class,'adminLogin'])->name('admin.login');

//Admin Middleware
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');
    Route::get('/add/product',[ProductController::class,'addProduct'])->name('product.add');
    Route::post('/store/product',[ProductController::class,'storeProduct'])->name('product.store');
    Route::get('/manage/product',[ProductController::class,'manageProduct'])->name('product.manage');
    Route::get('/edit/product/{id}',[ProductController::class,'editProduct'])->name('product.edit');
    Route::post('/update/product/{id}',[ProductController::class,'updateProduct'])->name('product.update');
    Route::get('/delete/product/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
});
