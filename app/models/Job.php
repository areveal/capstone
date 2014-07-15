<?php

class Job extends BaseModel {

	// The db table this model refers to 
    protected $table = 'jobs';

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