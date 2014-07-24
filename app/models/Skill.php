<?php

class Skill extends BaseModel {

	// The db table this model refers to 
    protected $table = 'skills';

    // Validation rules for our model properties
    static public $rules = [
    	'skills' => 'unique'
    ];

    public function users() 
    {
    	return $this->belongsToMany('User');
    }

    

}