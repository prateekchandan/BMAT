<?php
Route::get('/',array('as'=>'home','uses'=>'HomeController@home'));


Route::get('login',array('before'=>'guest','as'=>'login','uses'=>'UserController@show_login'));
Route::post('login',array('before'=>'guest','as'=>'login','uses'=>'UserController@login'));
Route::get('register',array('before'=>'guest','as'=>'register','uses'=>'UserController@show_register'));
Route::post('register',array('before'=>'guest','as'=>'register','uses'=>'UserController@register'));
Route::any('logout',array('before'=>'login','as'=>'logout','uses'=>'UserController@logout'));

Route::get('FAQs',array('as'=>'faq','uses'=>'HomeController@faq'));
