<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	|	User Controller
	|--------------------------------------------------------------------------
	|
	| This Controller is used to control all user based functions which includes
	| login , logout , register etc
	|
	*/

	/*
	* This function displays the login page which is used by the controller
	*/
	public function show_login()
	{
		return View::make('user.login');
	}

	public function show_register()
	{
		return View::make('user.register');
	}


}