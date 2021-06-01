<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class EmployeeController extends Controller
{
    public function employeeView(){
        $employees = Employee::all();

        return view('pages.index', compact('employees'));
    }

    public function detailsView($id){
        $employee = Employee::findOrFail($id);

        return view('pages.details', compact('employee'));
    }
    
}
