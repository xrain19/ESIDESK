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
    return view('welcome');
});

Auth::routes();

Route::Get('/home', 'HomeController@index')->name('home');


Route::Get('/registerForm', [
    'middleware' => 'auth',
    'uses' => 'UserController@showForm'
])->name('userForm');

Route::Post('/registerUser', [
    'middleware' => 'auth',
    'uses' => 'UserController@createUser',
    'name' => 'createUser'
])->name('createUser');
