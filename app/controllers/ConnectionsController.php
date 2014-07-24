<?php

class ConnectionsController extends \BaseController {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$user = User::findBySlug($slug);
		$connections = DB::table('connections')->where('user_id', '=', $user->id)->lists('connection_id');
		
		if(Auth::check())
		{
			$your_connections = DB::table('connections')->where('user_id', '=', Auth::user()->id)->lists('connection_id');
		}
		else
		{
			$your_connections = [];
		}


		if(Input::has('last_name'))
		{
			$first = Input::get('first_name');
			$last = Input::get('last_name');
			$users = DB::table('users')->where('first_name','LIKE', "%{$first}%")->where('last_name','LIKE', "%{$last}%")->lists('id');
			$connections = DB::table('connections')->whereIn('connection_Id', $users)->where('user_id', '=', Auth::user()->id)->lists('connection_id');
		}
		

		if(count($connections) > 0)
		{
			$connections = User::whereIn('id', $connections)->get();
		}
		else
		{
			$connections = [];
		}
		return View::make('connections.edit')->with('user' , $user)->with('connections', $connections)->with('your_connections', $your_connections);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		if(Auth::check())
		{
			$friend = User::findBySlug($slug);
			$user = Auth::user();
			$user->connections()->attach($friend);
			Session::flash('successMessage', 'You have successfully addded a connection.');
			return Redirect::back();
		}
		else
		{
			Session::flash('errorMessage','You do not have the necessary priveleges to edit this user.');
			return Redirect::action('UsersController@index');			
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::check())
		{
			$friend = User::findOrFail($id);
			$user = Auth::user();
			$user->connections()->detach($friend);
			Session::flash('successMessage', 'You have successfully deleted the connection.');
			return Redirect::back();
		}
		else
		{
			Session::flash('errorMessage','You do not have the necessary priveleges to edit this user.');
			return Redirect::action('UsersController@index');			
		}
	}



}
