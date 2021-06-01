<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@EmployeeView') -> name('employeeLink');
