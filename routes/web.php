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

Route::get('/', 'InventoryController@index')->name('inventory');


Route::get('/inventory', 'InventoryController@index')->name('inventory');

Route::get('products', function() {
    return view('inventory.products');
});

Route::get('/getProducts', 'InventoryController@getProducts')->name('getProducts');


Route::get('productEdit', function() {
    return view('inventory.productEdit');
});
Route::post('productEdit', 'InventoryController@productEdit')->name('productEdit');
Route::post('productEdit/{id}', 'InventoryController@productEdit')->name('productEdit');

Route::get('deleteProduct/{id}', 'InventoryController@deleteProduct')->name('deleteProduct');

Route::post('statusChange/{id}', 'InventoryController@statusChange')->name('statusChange');



