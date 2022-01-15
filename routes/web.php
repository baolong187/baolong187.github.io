<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;
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


Route::get('home',[ItemController::class,'index'])->name('item');
Route::post('saveItem',[ItemController::class,'itemSave'])->name('saveItem');
Route::get('editItem/{id}',[ItemController::class,'edit'])->name('editItem');
Route::post('updateItem',[ItemController::class,'update'])->name('updateItem');
Route::get('searchItem',[ItemController::class,'search'])->name('searchItem');
Route::get('deleteItem/{id}',[ItemController::class,'delete'])->name('deleteItem');
