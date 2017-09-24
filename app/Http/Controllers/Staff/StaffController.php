<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    //
    public function index(){

      return view('Staff.index');
    }//

    //add new staff
    public function newStaff(){

      return view('Staff.new');
    }
}
