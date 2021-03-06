<?php

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



Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/medecine', 'MedecineController');
    Route::resource('/stock', 'StockController');
    Route::resource('/supplyOrder', 'SupplyOrderController');
    Route::resource('/supplyOrderDetail', 'SupplyOrderDetailController');
    Route::resource('/customer', 'CustomerController');
    Route::resource('/role', 'RoleController');
    Route::resource('/invoice', 'invoiceController');
    Route::resource('/invoiceDetail', 'invoiceDetailController');
    Route::resource('/supplier', 'SupplierController');
    Route::resource('/type', 'TypeController');
});
