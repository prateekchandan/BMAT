<?php
Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));


Route::get('login',array('as'=>'login','uses'=>'UserController@show_login'));