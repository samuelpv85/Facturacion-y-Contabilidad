<?php

Route::resource('books', 'BookController');//->name('books');
// Route::resource('roles', 'RolesController');//->name('books');

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
Route::delete('roles/{id}', ['as' =>'roles', 'uses' => 'RolesController@destroy']);
Route::get('roles/{roles}/edit', ['as' =>'roles.edit', 'uses' => 'RolesController@edit']);
Route::put('roles/{roles}', ['as' =>'roles.update', 'uses' => 'RolesController@update']);

 // books/{book}/edit 
Route::get('grupos', 'GroupsController@index')->name('grupos');
Route::post('grupos', ['as' =>'grupos', 'uses' => 'GroupsController@store']);



//pruebas log
// Route::post('roles', ['as' =>'roles', 'uses' => 'RolesController@store'], Log::info('Info ABM Roles'));
// Route::post('roles', ['as' =>'roles', 'uses' => 'RolesController@store'], Log::debug($errors));


// 	function (){
// 	// try {
//         // La variable no existe
// 		Log::info('Info log test');
// 	// } catch (\Exception $e) {
//         // Almacenamos la información del error.
// 		// Log::debug('Test var fails' . $e->getMessage());
// 	// },

// }


// Route::get('errors', 'Auth\RegisterController@getRegister');

// Route::get('error', function () {
// 	// if (errors == 401) {
// 		return view('errors/401');
// 	// }

// 	});




Route::get('test', function () {
    try {
        // La variable no existe
        return $test_var;
    } catch (\Exception $e) {
        // Almacenamos la información del error.
        \Log::debug('Test var fails' . $e->getMessage());
    }
});

Route::get('test2', function () {
    \Log::info('Info log test');
});
