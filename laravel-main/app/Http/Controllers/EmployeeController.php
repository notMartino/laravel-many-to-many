<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeView(){

        return view('pages.index');
    }
}
