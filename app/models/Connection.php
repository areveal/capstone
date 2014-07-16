<?php

class Connection extends BaseModel {

	// The db table this model refers to 
    protected $table = 'connections';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function users() 
    {
    	return $this->hasMany('User');
    }

    

}