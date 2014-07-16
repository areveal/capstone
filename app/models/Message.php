<?php

class Message extends BaseModel {

	// The db table this model refers to 
    protected $table = 'messages';

    // Validation rules for our model properties
    static public $rules = [
    	'subject' => 'required'
    	'body' => 'required|max:10000'
    ];

    public function users() 
    {
    	return $this->hasMany('User');
    }

    

}