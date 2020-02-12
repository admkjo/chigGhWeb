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
    return view('homepage');
});

Route::get('/new-registration', function () {
    return view('registration');
});
Route::get('/done', function () {
    return view('done');
});
Route::post('/regis', 'Auth\RegisterController@newRegis')->name('regis');
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);
