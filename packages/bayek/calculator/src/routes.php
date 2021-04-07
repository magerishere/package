<?php

use Illuminate\Support\Facades\Route;

Route::get('calculator',function(){
    echo 'Hello i am your calculator';
});

Route::get('add/{a}/{b}','Bayek\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}','Bayek\Calculator\CalculatorController@subtract');