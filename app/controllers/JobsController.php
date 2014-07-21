<?php

class JobsController extends \BaseController {


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::check())
		{
			if(Auth::user()->id == $id)	
			{
				$jobs = Job::where('user_id', '=' , Auth::user()->id)->get();
				
				return View::make('jobs.create-edit')->with('jobs', $jobs);
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
		$validator = Validator::make(Input::all(), Job::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage','We could not add your new job. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$job = new Job();

			$job->user_id = Auth::user()->id;
			$job->job_title = Input::get('job_title');
			$job->start_date = Input::get('start_date');		
			$job->end_date = Input::get('end_date');
			$job->company = Input::get('company');
			$job->description = Input::get('description');
			$job->save();
		}
		Session::flash('successMessage', 'You have successfully edited your account.');	
		return Redirect::action('JobsController@edit', Auth::user()->id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$job = Job::findOrFail($id);
		$job->delete();
		Session::flash('successMessage', 'Job deleted successfully.');
		return Redirect::action('JobsController@edit', Auth::user()->id);
	}


}
