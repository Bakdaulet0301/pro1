<?php

use Illuminate\Support\Facades\Route;

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
