<?php
use App\Http\Controllers\GymController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles','ArticleController@index');

Route::get('article/{id}','ArticleController@show');

Route::post('article','ArticleController@store');

Route::put('article','ArticleController@store');

Route::delete('article/{id}','ArticleController@destroy');




Route::get('students','StudentController@indexes');

Route::get('students/{id}','StudentController@show');

Route::post('students','StudentController@stores');

Route::put('students/{id}','StudentController@update');

Route::delete('students/{id}','StudentController@destroy');












Route::get('gyms','GymController@indexes');

Route::get('gyms/{id}','GymController@show');

Route::post('gyms','GymController@stores');

Route::put('gyms/{id}','GymController@update');

Route::delete('gyms/{id}','GymController@destroy');