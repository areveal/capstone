<?php

class Skill extends BaseModel {

	// The db table this model refers to 
    protected $table = 'skills';

    // Validation rules for our model properties
    static public $rules = [
    ];

    public function users() 
    {
    	return $this->hasMany('User');
    }

    

}