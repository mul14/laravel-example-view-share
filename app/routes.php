<?php

Route::get('/', 'HomeController@showWelcome'); 
Route::get('/about', 'HomeController@showAbout'); 
Route::get('/contact', 'HomeController@showContact'); 
Route::get('/other', 'HomeController@showOther'); 
