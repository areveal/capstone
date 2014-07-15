<?php

class Experience extends BaseModel {

	// The db table this model refers to 
    protected $table = 'experience';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

    public function renderBody()
    {
        
    }

}