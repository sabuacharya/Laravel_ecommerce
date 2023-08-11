<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminController;

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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect',[UserController::class,'redirect']);

Route::get('/',[UserController::class,'index']);
Route::get('/search',[UserController::class,'search']);
Route::post('/addcart/{id}',[UserController::class,'addcart']);
Route::get('/showcart',[UserController::class,'showcart']);
Route::get('/delete/{id}',[UserController::class,'deletecart']);
Route::post('/order',[UserController::class,'confirmorder']);

Route::get('/product',[AdminController::class,'product']);
Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);
Route::get('/showproduct',[AdminController::class,'showproduct']);
Route::get('/updateproduct/{id}',[AdminController::class,'updateproduct']);
Route::post('/productupdate/{id}',[AdminController::class,'productupdate']);
Route::get('/showorder',[AdminController::class,'showorder']);
Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);
