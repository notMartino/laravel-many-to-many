<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@employeeView') -> name('employeeLink');
Route::get('/details/{id}', 'EmployeeController@detailsView') -> name('detailsLink');