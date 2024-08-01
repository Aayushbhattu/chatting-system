<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/loginpage',function(){
    return view('loginpage');
});

Route::get('/loggedinpage',function(){
    return view('loggedinpage');
});

Route::get('/signuppage',function(){
    return view('signuppage');
});

Route::get('/chatbox',function(){
    return view('chatbox');
});

Route::get('/admin',function(){
    return view('admindashboard');
});