<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'makeLogin'])->name('admin.makeLogin');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    /* Category Routes */
    Route::get('/category/addCategory',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/addCategory',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
     Route::post('/category/edit', [CategoryController::class,'update']);

});
