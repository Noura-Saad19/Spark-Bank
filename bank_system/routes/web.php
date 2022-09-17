<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/viewallcustomer', [\App\Http\Controllers\HomeController::class, 'viewAllCustomers']);
Route::get('/transfermoney', [\App\Http\Controllers\HomeController::class, 'transferMoney']);
Route::post('/store', [\App\Http\Controllers\HomeController::class, 'store']);
Route::get('/viewonecustomer/{email}', [\App\Http\Controllers\HomeController::class, 'viewOneCustomer']);
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutUs']);
Route::get('/transferMoney/{id}', [\App\Http\Controllers\HomeController::class, 'transferMoneey'])->name('customer.transfer');
