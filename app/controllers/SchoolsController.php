<?php

class SchoolsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return Auth::user()->id;
		// exit();
		return View::make('schools.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// store function
		$validator = Validator::make(Input::all(), School::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage','We could not create a new school. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$school = new School();

			$school->user_id = 1;
			$school->college = Input::get('college');
			$school->date_began = Input::get('date_began');		
			$school->date_complete = Input::get('date_complete');
			$school->major = Input::get('major');
			$school->gpa = Input::get('gpa');
			$school->save();
		}
			return View::make('schools.create-edit');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
