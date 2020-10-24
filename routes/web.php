<?php
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',"StudentController@index");
Route::get('/edit/{id}',"StudentController@edit");
Route::get('/show/{id}',"StudentController@show");
Route::get('/store',"StudentController@store");
Route::get('/create',"StudentController@create");
Route::get('/update/{id}',"StudentController@update");
Route::get('/delete/{id}',"StudentController@destroy");

//Route::get('mail',"StudentController@mail");
