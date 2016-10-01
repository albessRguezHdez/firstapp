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

Route::get('/', function () {
    return view('welcome');;
});

Route::get('/home', 'GeneralController@showHome');

Route::get('home/news', 'GeneralController@showNews');

Route::get('home/products', 'GeneralController@showProducts');

Route::get('home/about', 'GeneralController@showAbout');

Route::get('home/ourwork', function () {
	return view('ourwork');
});

Route::get('home/signup', function () {
	return view('signup');
});

Route::get('home/search', function () {
	return view('search');
});

Route::get('home/social', function () {
	return view('social');
});