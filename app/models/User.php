<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

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
    	'country' => 'required|max:100',
    	'zip' => 'required',
    	'status' => 'required',
    	'slug' => 'unique:users'
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

	    $maxHeight = 80;
	    $maxWidth = 80;

	    $newHeight = 0;
	    $newWidth = 0;

	    $inputFile = public_path() . "/img-upload/{$imageName}";

	    $newImageName = substr($imageName, 0, strlen($imageName)-4) . "-small.jpg";

	    $outputFile = public_path() . "/img-upload/{$newImageName}";

	    // load the image to be manipulated
	    $image = new Imagick($inputFile);

	    // get the current image dimensions
	    $currentWidth = $image->getImageWidth(); 
	    $currentHeight = $image->getImageHeight();

	    // determine what the new height and width should be based on the type of photo
	    if ($currentWidth > $currentHeight)
	    {
	        // landscape photo
	        // width should be resized to max and height should be resized proportionally
	        $newWidth = $maxWidth;
	        $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
	    }
	    else if ($currentHeight > $currentWidth)
	    {
	        // portrait photo
	        // height should be resized to max and width should be resized proportionally
	        $newHeight = $maxHeight;
	        $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
	    }
	    else
	    {
	        // square photo
	        // resize image to max dimensions
	        $newHeight = $newWidth = $maxHeight;
	    }

	    // perform the image resize
	    $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);  

	    // write out the new image
	    $image->writeImage($outputFile);

	    // clear memory resources
	    $image->clear(); 
	    $image->destroy();    

        $this->img_path = '/' . $this->imgDir . '/' . $newImageName;
    }

    static public function findBySlug($slug) 
    {
        $user = self::where('slug', $slug)->first();
        return ($user == null) ? App::abort(404) : $user;
    }

    public function setSlugAttribute($value) 
    {
        $value = str_replace(' ','-',trim($value));
        $this->attributes['slug'] = strtolower($value);
    }

}


