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

// --------------------------- IN HEADER ----//

Route::get('/', function () {
    return view('home');
});


Route::get('/how-it-works', function() {
	return view('how-it-works');
});

Route::get('/discover', function() {
	return view('discover');
});

Route::get('/shop', function() {
	return view('shop');
});

Route::get('/categories', function() {
	return view('categories');
});

// Using controller to handle post
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@send');

// Using controller to handle post
Route::get('/order', 'OrderController@index');
Route::post('/order', 'OrderController@send');



// --------------------------- IN FOOTER ----//
Route::get('/about', function() {
	return view('about');
});

Route::get('/app', function() {
	return view('app');
});

Route::get('/terms', function() {
	return view('terms');
});

Route::get('/media', function() {
	return view('media');
});

Route::get('/resellers', function() {
	return view('resellers');
});
