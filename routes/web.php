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

Route::get('Employee','Employee\EmployeeController@index')->name('Employee');
Route::get('Employee/new','Employee\EmployeeController@newEmployee')->name('Employee/new');
Route::get('Employee/list', 'Employee\EmployeeController@listEmployee')->name('Employee/list');
