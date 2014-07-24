<?php

class School extends BaseModel {

	// The db table this model refers to 
    protected $table = 'schools';

    // Validation rules for our model properties
    static public $rules = [
    	'college' => 'required|max:100',
    	'date_began' => 'required',
    	'date_complete' => 'required',
    	'major' => 'max:100',
    	'gpa' => 'max:6',
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

}