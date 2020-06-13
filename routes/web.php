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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::view('/','home');

Route::get('/hotels', 'HotelController@index');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name('auth0-callback');

Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');

Route::get('/logout','Auth\Auth0IndexController@logout')->middleware('auth');

Route::group(['prefix'=>'dashboard'], function() {

	Route::view('/', 'dashboard/dashboard');

	Route::get('reservations/create/{id}', 'ReservationController@create');

	// Route::post('reservations/create/{id}', 'ReservationController@create');
	// Route::get('reservations/create/{id}', 'ReservationController@create');
	Route::get('reservationSingle', 'ReservationController@show');
	Route::get('dashboard/reservations/edit/{id}', 'ReservationController@edit');
	Route::post('dashboard/reservations/update/{id}', 'ReservationController@update');

	
	Route::resource('reservations','ReservationController')->except('create');
});
