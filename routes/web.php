<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Th| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('welcome2');
});

Route::get('/routs-ex', function () {
  return  "Zhaparov Bakdaulet";
});

Route::get('/redirect-ex', function () {
  return  redirect("/student");
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return "Your id is: ".$id." ".$name;
})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

Route::get('/post1/{id}/{name?}', function ($id,$name=null) {
    return "Your id is: ".$id." ".$name;
})->where('name','[a-zA-Z]+');//if number: ->where('age','[\d]+');in boot()


Route::get('/global/{id}/{name}', function ($id,$name) {
    return "Your id is: ".$id." ".$name;
})->where('name','[a-zA-Z]+');


Route::get('/contr',"SecondController@index");

Route::resource('/contr2',"SecondController");

Route::get('/firstview', function () {
  return  view("/firstview",["name"=>"John","age"=>18]);
});

Route::get('/exwith', function () {
  return  view("/firstview")->with("name","Maksat")->with("age",25)->with("date","03-08-2002")->with("lname","Nick");
});

Route::get('/excompact/{name}/{age}/{date}/{lname}', function ($name,$age,$date,$lname) {
  return  view("/firstview",compact('name','age','date','lname'));
});


Route::get('/calc/{num1}/{sign}/{num2}',"CalcController@operation" );

Route::get('/dis/{id}',"StudentController@show" );

Route::get('/coms', function () {
    return view('comone');
});

Route::get('/news',"COMController@ride" );


Route::get('/name',"StudentController@name" );
Route::get('/age/{age}',"StudentController@age" );

Route::get('/date',"StudentController@date" );



Route::get('/insert', function () {
   DB::insert("insert into student(name,date_of_birth,gpa,advisor) values('Daryn','2001-10-22',3.8,'Zhanar')");
});


Route::get('/select', function () {
   $res=DB::select('select *from student where id=1');
   foreach ($res as $student) {
    
    echo "Student name is: ".$student->name;
    echo "<br>";
    echo "date of birth: ".$student->date_of_birth;
    echo "<br>";
    echo "gpa is: ".$student->gpa;
    echo "<br>";
    echo "Advisor name is: ".$student->advisor;
    echo "<br>";
    
   }
});
Route::get('/update', function () {
   $updated=DB::update('update student set name="Nurzhan",date_of_birth="2004-02-15",gpa=3.5,advisor="Azat" where id=1');
   return $updated;
});

Route::get('/delete', function () {
   $deleted=DB::delete('delete from student where id=2');
   return $deleted;
});


Route::get('/insert2', function () {
   $student=new Student;
   $student->name="Zhandos";
   $student->date_of_birth="2001-06-13";
   $student->gpa=4.0;
   $student->advisor="Galim";
   $student->save();
});

Route::get('/select2', function () {
   $student=Student::all();
   foreach ($student as $std) {
     # code...
    echo $std->name;
    echo "<br>";
   }
});
Route::get('/select3', function () {
   $student=Student::find(3);
   return $student->name;
   
});

Route::get('/update2', function () {
   $student=Student::find(3);
   $student->name="Nurzhas";
   $student->date_of_birth="2003-06-16";
   $student->gpa=3.5;
   $student->advisor="Ernar";
   $student->save();
});

Route::get('/delete2', function () {
   $student=Student::find(5);
   $student->delete();
   
});


