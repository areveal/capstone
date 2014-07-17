<?php

class Association extends BaseModel {

	// The db table this model refers to 
    protected $table = 'associations';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function users() 
    {
    	return $this->belongsToMany('User');
    }

    

}