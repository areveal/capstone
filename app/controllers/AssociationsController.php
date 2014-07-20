<?php

class AssociationsController extends \BaseController {

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
				$associations_owned = DB::table('association_user')->where('user_id', '=', $id)->lists('association_id');
				if( count($associations_owned) > 0)
				{
					$associations = Association::whereNotIn('id',$associations_owned)->get();
					$associations_owned = Association::whereIn('id', $associations_owned)->get();
				}
				else
				{
					$associations = Association::get();
				}
				return View::make('associations.create-edit')->with('associations', $associations)->with('associations_owned', $associations_owned);
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
			return Redirect::action('HomeController@showLogin');
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
		if($id == Auth::user()->id)
		{
			if(Input::has('existing_associations'))
			{
				$add = Input::get('existing_associations');
				$user = Auth::user();
				$user->associations()->attach($add);
				return Redirect::action('AssociationsController@edit', $user->id);

			}
			elseif(Input::has('new_associations'))
			{
				$add = Input::get('new_associations');
				$association = new Association;
				$association->association = $add;
				$association->save();
				$user = Auth::user();
				$user->associations()->attach($association->id);
				return Redirect::action('AssociationsController@edit', $user->id);
			}
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
		$user = Auth::user();
		$user->associations()->detach($id);
		return Redirect::action('AssociationsController@edit', $user->id);
	}


}
