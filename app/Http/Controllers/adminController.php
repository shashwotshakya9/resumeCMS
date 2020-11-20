<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class adminController extends Controller
{
    public function __construct(){

    }
    public function admin(){
        return view('backend.index');        
    }   
  
}
