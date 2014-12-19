<?php
Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));


Route::get('login',array('before'=>'guest','as'=>'login','uses'=>'UserController@show_login'));
Route::get('register',array('before'=>'guest','as'=>'register','uses'=>'UserController@show_register'));