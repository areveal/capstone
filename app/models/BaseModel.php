<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	protected $imgDir = 'img-upload';

	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function upload($img)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $img->getClientOriginalName();
        $img->move($systemPath , $imageName);
        $this->img_path = '/'  .$this->imgDir . '/' . $imageName;
    }

  

}