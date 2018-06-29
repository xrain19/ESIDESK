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

Route::Get('/detailsDemande/{id}', [
    'middleware' => 'auth',
    'uses' => 'DemandeController@detailsDemande'
]);

Route::Get('/listDemande/{list}/{tri}', [
    'middleware' => 'auth',
    'uses' => 'DemandeController@listDemande'
]);

Route::Post('createDemande/{id}', [
    'middleware' => 'auth',
    'uses' => 'DemandeController@createDemande'
]);

Route::Get('createDemandeForm/{id}', [
   'middleware' => 'auth',
   'uses' => 'DemandeController@showForm'
]);

Route::Get('/listCat/{id}', [
    'middleware' => 'auth',
    'uses' => 'CategoriesController@listCat'
]);

Route::Get('/editCatForm/{id}', [
    'middleware' => 'auth',
    'uses' => 'CategoriesController@showEditForm'
]);

Route::Post('/editCat/{id}', [
    'middleware' => 'auth',
    'uses' => 'CategoriesController@editCat'
]);

Route::Get('/catForm/{id}', [
    'middleware' => 'auth',
    'uses' => 'CategoriesController@showForm'
]);

Route::Post('/catRegister/{id}', [
    'middleware' => 'auth',
    'uses' => 'CategoriesController@createCat',
]);

Route::Get('/registerUserForm', [
    'middleware' => 'auth',
    'uses' => 'UserController@showForm'
])->name('userForm');

Route::Post('/registerUser', [
    'middleware' => 'auth',
    'uses' => 'UserController@createUser',
])->name('createUser');

Route::Get('/registerFormEquipe', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@showForm'
])->name('userForm');

Route::Post('/registerEquipe', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@createEquipe',
    'name' => 'createEquipe'
])->name('createEquipe');

Route::Get('/homeEquipe', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@homeEquipe'
])->name('homeEquipe');

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

Route::Get('/editEquipeForm/{id}', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@showEditForm'
]);

Route::Get('/deleteEquipe/{id}', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@deleteEquipe'
]);

Route::Post('/editEquipe/{id}', [
    'middleware' => 'auth',
    'uses' => 'EquipeController@editEquipe',
    'name' => 'editEquipe'
])->name('editEquipe');

Route::Get('/validerDemande/{id}', [
    'middleware' => 'auth',
    'uses' => 'DemandeController@validerDemande'
]);