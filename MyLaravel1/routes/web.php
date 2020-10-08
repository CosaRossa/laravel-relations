<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');

// Employees
Route::get('/emps', 'EmployeeController@index') -> name('emp.index');

Route::get('/emp/create', 'EmployeeController@create') -> name('emp.create');
Route::post('/emp/create', 'EmployeeController@store') -> name('emp.store');

Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp.show');

Route::get('emp/edit/{id}', 'EmployeeController@edit') -> name('emp.edit');
Route::post('emp/update/{id}', 'EmployeeController@update') -> name('emp.update');

Route::get('/emp/destroy/{id}', 'EmployeeController@destroy') -> name('emp.destroy');

// Tasks
Route::get('/task/{id}', 'TaskController@show') -> name('task.show');

// Location
Route::get('/loc/{id}', 'LocationController@show') -> name('loc.show');
