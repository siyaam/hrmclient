<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceTypeController extends Controller
{
    //Attendance type
    public function Type(){
      return view('Attendance.Type');
    }
}
