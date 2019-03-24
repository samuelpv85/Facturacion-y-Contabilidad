<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('grupos', function () {
//     return view('administracion/grupos');
// });

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('/', ['as' => 'home', 'uses' =>  'HomeController@index']);
Route::get('home', 'HomeController@index')->name('home');

Route::get('roles', 'RolesController@index')->name('roles');
Route::post('roles', ['as' =>'roles', 'uses' => 'RolesController@store']);

Route::get('grupos', 'GroupsController@index')->name('grupos');
Route::post('grupos', ['as' =>'grupos', 'uses' => 'GroupsController@store']);

