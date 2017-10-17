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


Route::resource('schools', 'SchoolController');
Route::resource('restaurants', 'RestaurantController');
Route::resource('foods', 'FoodController');
Route::resource('permissions', 'PermissionController');
Route::resource('users', 'UserController');
Route::resource('roles','RoleController');
Route::resource('permissions','PermissionController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Permission */
Route::get('assign-role','RoleController@assignRole');
Route::post('assign-role','RoleController@assignedRole')->name('assignedRole');
Route::get('assign-permission','PermissionController@assignPermission');
Route::post('assign-permission','PermissionController@assignedPermission')->name('assignedPermission');
/* */
