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

Route::get('/', function () {
    return view('welcome');
});



// ------------------------Tuan Midterm --------------------------
 

Route::group(['prefix' => 'backend/product/'], function () {
	// Add products
	Route::get('add', [
		'as' 	=> 'backend.product.addProduct',
		'uses' 	=> 'productController@addProduct'
	]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
	Route::post('add', [
		'as' 	=> 'postAdd',
		'uses' 	=> 'productController@postAdd'
	]);

	// Select products by table
	Route::get('list', [
		'as' 	=> 'backend.product.getList',
		'uses' 	=> 'productController@getList'
	]);
	// Select products by thumbanail
	Route::get('listthum', [
		'as' 	=> 'backend.product.getthumbanail',
		'uses' 	=> 'productController@getthumbanail',
		 
	]);
	

	// Delete products
	Route::get('delete/{id}', [
		'as' 	=> 'getDelete',
		'uses' 	=> 'productController@delete'
	]);

	//Edit products
	Route::get('edit/{id}', [
		'as' 	=> 'backend.product.edit',
		'uses' 	=> 'productController@edit'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'backend.product.postedit',
		'uses' 	=> 'productController@postedit'
	]);
});


Route::get('blade', function(){
	return view('pages.laravel');
});