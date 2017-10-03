<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizationController extends Controller
{

    public function index(){

      return view('Organization.index');
    }

    //designations
    public function Designation(){
      return view('Organization.Designation');
    }
    //address
    public function Address(){
      return view('Organization.Address');
    }

    public function Contact(){
      return view('Organization.Contact');
    }

    public function City(){
      return view('Organization.City');
    }

}
