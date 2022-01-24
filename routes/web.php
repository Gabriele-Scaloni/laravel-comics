<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('views.card');
}) ->name('card');

Route::get('/', function () {
    return view('views.home');
});

