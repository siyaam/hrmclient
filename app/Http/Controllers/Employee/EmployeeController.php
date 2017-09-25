<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    //
    public function index(){

      return view('Employee.index');
    }//

    //add new staff
    public function newEmployee(){

      return view('Employee.new');
    }

    //employee list admin
    public function listEmployee(){
      
      return view('Employee.list');
    }
}
