<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    //notice board
      public function NoticeBoard(){
        return view('NoticeBoard');
      
    }
}
