<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function saveFromInput(){
		$this->plan=Input::get('plan');
		$this->name=Input::get('name');
		$this->school=Input::get('school');
		$this->parent=Input::get('parent');
		$this->phone=Input::get('contact');
		$this->gender=Input::get('gender');
		$timestamp =strtotime(Input::get('dob'));
		$this->dob=date("Y-m-d H:i:s", $timestamp);
		$this->email=Input::get('email');
		$this->password= Hash::make(Input::get('password'));
		$this->country=Input::get('country');
	}

}
