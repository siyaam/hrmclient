<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShiftController extends Controller
{
    //shifts
    public function Shift(){
      return view('Attendance.Shift');
    }
}
