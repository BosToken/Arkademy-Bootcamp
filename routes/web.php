<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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

Route::get('',[ProdukController::class, 'index']);
Route::get('create',[ProdukController::class, 'create']);
Route::post('store',[ProdukController::class, 'store']);
Route::get('delete/{id}',[ProdukController::class, 'delete']);
Route::get('formUpdate/{id}',[ProdukController::class, 'formUpdate']);
Route::put('update/{id}',[ProdukController::class, 'update']);
