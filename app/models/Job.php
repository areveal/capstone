<?php

class Job extends BaseModel {

	// The db table this model refers to 
    protected $table = 'jobs';

    // Validation rules for our model properties
    static public $rules = [
        'job_title' => 'required|max:100',
        'start_date' => 'required',
        'end_date' => 'required',
        'company' => 'required|max:100',
        'description' => 'required|max:300',
    ];

    public function user() 
    {
    	return $this->belongsTo('User');
    }

}