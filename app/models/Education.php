<?php

class Education extends BaseModel {

	// The db table this model refers to 
    protected $table = 'education';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

}