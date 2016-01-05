<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/property/{addressSlug}', [
// 	'as' => 'property.show',
// 	'uses' => 'PropertiesController@show'
// ]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
	Route::get('/property/{addressSlug}', [
	'as' => 'property.show',
	'uses' => 'PropertiesController@show'
]);

	Route::auth();

	Route::get('/', [
		'as' => 'index',
		'uses' => 'AdminController@index'
	]);

	Route::get('/admin/property/create', [
		'as' => 'property.create',
		'uses' => 'AdminController@propertyCreate'
	]);

	Route::get('/admin/property/edit/{id}', [
		'as' => 'property.edit',
		'uses' => 'AdminController@propertyEdit'
	]);

	Route::post('/admin/property/store', [
		'as' => 'property.store',
		'uses' => 'AdminController@propertyStore'
	]);

	Route::put('/admin/property/update/{id}', [
		'as' => 'property.update',
		'uses' => 'AdminController@propertyUpdate'
	]);

	Route::delete('/admin/property/destroy/{id}', [
		'as' => 'property.destroy',
		'uses' => 'AdminController@propertyDestroy'
	]);

	Route::post('/property/{id}/upload', 'AdminController@upload');

	Route::post('/inquire/{address}', [
		'as' => 'inquire',
		'uses' => 'PropertiesController@inquire',
	]);
});
