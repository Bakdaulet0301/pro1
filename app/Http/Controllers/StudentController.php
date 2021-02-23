<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    
    public function name(){
    	static $name=array(0=>"Dauren",1=>"Bakdaulet",2=>"Maksat");
    	return $name;
    }	

     public function date(){
    	static $date=array(0=>"24-05-2012",1=>"03-01-2002",2=>"15-06-2012");
    	return $date;
    }	
    public function age(){
    	static $age=array(0=>"18",1=>"19",2=>"20");
    	return $age;
    }	


    public function show($id){
    	$name=$this->name();
    	$date=$this->date();
    	$age=$this->age();
    	return view("lname",["name"=>$name[$id]])."; ".view("dateofbirth",["date"=>$date[$id]])."; ".view("age",["age"=>$age[$id]]);
    }

}
