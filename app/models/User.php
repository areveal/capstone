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

	static public $rules = [
    	'email' => 'required|max:100',
    	'password' => 'required|max:100|min:6',
    	'first_name' => 'required|max:100',
    	'last_name' => 'required|max:100' 
    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function jobs() 
	{
		return $this->hasMany('Job');
	}

	public function schools() 
	{
		return $this->hasMany('School');
	}

}


