<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DutyCalendarController extends Controller
{
    //calendar
    public function DutyCalendar(){
      return view('Attendance.DutyCalendar');
    }
}
