<?php

class ConnectionsController extends \BaseController {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$connections = DB::table('connections')->where('user_id', '=', $id)->lists('connection_id');
		if(count($connections) > 0)
		{
			$connections = User::whereIn('id', $connections)->get();
		}
		else
		{
			$connections = [];
		}
		$user = User::findOrFail($id);
		return View::make('connections.edit')->with('user' , $user)->with('connections', $connections);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Auth::check())
		{
			$friend = User::findOrFail($id);
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
		//
	}



}
