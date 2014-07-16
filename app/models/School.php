<?php

class School extends BaseModel {

	// The db table this model refers to 
    protected $table = 'schools';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

}