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

Route::get('/', [
    'uses' => 'HomeController@getHome',
    'as' => 'home'
]);

Route::get('/about',[
    'uses' => 'HomeController@getAbout',
    'as' => 'about'
]);

Route::get('/fees', [
    'uses' => 'HomeController@getFees',
    'as' => 'fees'
]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show-consultation/{id}', [
    'uses' => 'HomeController@getConsultation',
    'as' => 'showConsultation'
]);

Route::post('/register-user', [
    'uses' => 'UsersController@postSignUp',
    'as' => 'registerUser',
    'middleware' => 'guest'
]);

Route::get('/register-user', [
    'uses' => 'UsersController@getSignUp',
    'as' => 'registerUser'
]);


Route::post('/login-user', [
    'uses' => 'UsersController@postSignIn',
    'as' => 'loginUser',
    'middleware' => 'guest'
]);

Route::get('/user-profile', [
    'uses' => 'UsersController@getUserProfile',
    'as' => 'userProfile',
    'middleware' => 'auth'
]);

Route::get('/user-update', [
    'uses' => 'UsersController@getUpdate',
    'as' => 'userUpdate',
    'middleware' => 'auth'
]);

Route::post('/user-update', [
    'uses' => 'UsersController@postUpdate',
    'as' => 'getUpdate',
    'middleware' => 'auth'
]);

Route::get('/user-bookings', [
    'uses' => 'UsersController@getBooking',
    'as' => 'getBooking'
]);

Route::get('/save-booking', [
    'uses' => 'UsersController@insertBooking',
    'as' => 'insertBooking'
]);

Route::get('/user-appointment', [
    'uses' => 'UsersController@getAppointment',
    'as' => 'getAppointment'
]);

Route::post('/user-bookings', [
    'uses' => 'UsersController@postBooking',
    'as' => 'postBooking'
]);

Route::get('/user-delete', [
    'uses' => 'UsersController@deleteBooking',
    'as' => 'deleteBooking'
]);

Route::get('/logout-user', [
    'uses' => 'UsersController@getLogout',
    'as' => 'logoutUser',
    'middleware' => 'auth'
]);

// admin login section
Route::get('/admin/login', [
    'uses' => 'Auth\HcpLoginController@showLoginForm',
    'as' => 'adminLogin'
]);

Route::post('/admin/login', [
    'uses' => 'Auth\HcpLoginController@login',
    'as' => 'adminLogin'
]);


Route::get('/admin/home', [
    'uses' => 'HcpController@index',
    'as' => 'adminDashboard'
]);

Route::get('/admin/chart', [
    'uses' => 'HcpController@getChart',
    'as' => 'getChart'
]);

Route::get('/admin/calendar', [
    'uses' => 'HcpController@getCalendar',
    'as' => 'getCalendar'
]);

Route::get('/admin/booking', [
    'uses' => 'HcpController@getBookings',
    'as' => 'getBookings'
]);

Route::get('/admin/user', [
    'uses' => 'HcpController@getUser',
    'as' => 'getUser'
]);

Route::get('/admin/completed/{id}', [
    'uses' => 'HcpController@getCompleted',
    'as' => 'getCompleted'
]);

Route::get('/admin/delete/{id}', [
    'uses' => 'HcpController@getDelete',
    'as' => 'getDelete'
]);


Route::auth();
