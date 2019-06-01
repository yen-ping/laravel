<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'ProductController@getIndex');

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);
Route::get('user/profile/{name?}', ['as' => 'profile', function($name){
	echo 'this '.$name.' user';
}]);
Route::get('/signup', [
	'uses' => 'UserController@getSignup',
	'as' => 'user.signup'
]);

Route::post('/signup', [
	'uses' => 'UserController@postSignup',
	'as' => 'user.signup'
]);