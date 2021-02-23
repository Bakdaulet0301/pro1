<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
public function name(){
    	
    	return view('lname',["name"=>"Bakdaulet"]);
    }	

     public function date(){
    	return view('dateofbirth')->with("date","03-01-2002");
    }	
    public function age($age){
    	return view('age',compact('age'));
    }	


}
