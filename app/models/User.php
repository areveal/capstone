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
    	'last_name' => 'required|max:100',
    	'country' => 'required',
    	'zip' => 'required',
    	'status' => 'required'
    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $imgDir = 'img-upload';

	public function jobs() 
	{
		return $this->hasMany('Job');
	}

	public function schools() 
	{
		return $this->hasMany('School');
	}

	public function skills() 
	{
		return $this->belongsToMany('Skill');
	}

	public function associations() 
	{
		return $this->belongsToMany('Association');
	}

	public function connections() 
	{
		return $this->belongsToMany('User', 'connections', 'user_id', 'connection_id');
	}

	public function messages() 
	{
		return $this->hasMany('Message');
	}
		


	public function addUploadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';

        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

}


