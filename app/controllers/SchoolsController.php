<?php

class SchoolsController extends \BaseController {


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		if(Auth::check())
		{
			if(Auth::user()->slug == $slug)	
			{
				$schools = School::where('user_id', Auth::user()->id)->get();
				return View::make('schools.create-edit')->with('schools', $schools);
			}
			else 
			{
				Session::flash('errorMessage','You do not have the necessary priveleges to edit this user.');
				return Redirect::action('UsersController@index');
			}
		}
		else
		{
			Session::flash('errorMessage','You must be logged in to edit users.');
			return Redirect::action('UsersController@index');
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// store function
		$validator = Validator::make(Input::all(), School::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage','We could not add your new school. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$school = new School();

			$school->user_id = Auth::user()->id;
			$college = Input::get('college');
			$words = explode(' ', $college);
			foreach ($words as $word) {
				$new_word = ucfirst($word);
				$new_college[] = $new_word;
			}
			$college = implode(' ', $new_college);
			$school->college = $college;
			$school->date_began = Input::get('date_began');		
			$school->date_complete = Input::get('date_complete');
			$major = Input::get('major');
			$words = explode(' ', $major);
			foreach ($words as $word) {
				$new_word = ucfirst($word);
				$new_major[] = $new_word;
			}
			$major = implode(' ', $new_major);			
			$school->major = $major;
			$school->gpa = Input::get('gpa');
			$school->save();
		}
		Session::flash('successMessage', 'You have successfully edited your account.');	
		return Redirect::action('SchoolsController@edit', Auth::user()->slug);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$school = School::findOrFail($id);
		$school->delete();
		Session::flash('successMessage', 'School deleted successfully.');
		return Redirect::action('SchoolsController@edit', Auth::user()->slug);
	}


}
