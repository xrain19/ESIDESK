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

Route::Get('/', 'HomeController@index');

Auth::routes();

Route::Get('/home', 'HomeController@index')->name('home');


Route::Get('/registerUserForm', [
    'middleware' => 'auth',
    'uses' => 'UserController@showForm'
])->name('userForm');

Route::Post('/registerUser', [
    'middleware' => 'auth',
    'uses' => 'UserController@createUser',
])->name('createUser');

Route::Get('/editUserForm/{id}', [
    'middleware' => 'auth',
    'uses' => 'UserController@showEditForm'
]);

Route::Post('/editUser/{id}', [
    'middleware' => 'auth',
    'uses' => 'UserController@editUser',
]);

Route::Get('/adminUsers', [
    'middleware' => 'auth',
    'uses' => 'UserController@showAdminUsers',
])->name('adminUsers');
