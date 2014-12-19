<?php
use Illuminate\Support\MessageBag;
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

	/*
	* This function handles the login
	*/
	public function login()
	{
		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			return Redirect::route('home');
		}

		$messageBag = new MessageBag;
		$messageBag->add('login-error',"");
		return Redirect::back()->with('messages', $messageBag);
	}

	/*
	* This function displays the user registration page which is used by the controller
	*/
	public function show_register()
	{
		return View::make('user.register');
	}

	/*
	* This function handles the registration part
	*/
	public function register()
	{
		$user = new User;
		$user->saveFromInput();
		$user->save();
		Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));
		return Redirect::route('home');
	}

	/*
	* Logs out the user
	*/
	public function logout()
	{
		if(Auth::check()) Auth::logout();
		return Redirect::Route('home');
	}

}