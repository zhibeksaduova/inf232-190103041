<?php

use Illuminate\Support\Facades\Route;



Route::get('/student/{id}', "StudentController@show");
Route::get('/name/{id}',"StudentController@name");
Route::get('/date/{id}',"StudentController@date");
Route::get('/age/{age}',"StudentController@date");
