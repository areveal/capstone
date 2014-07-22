<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$skills = Skill::get();

		if(Auth::check())
		{
			$connections = DB::table('connections')->where('user_id', '=', Auth::user()->id)->lists('connection_id');
			$current_user = DB::table('users')->where('id', '=', Auth::user()->id)->lists('id');
			//this will return a page to search through all users
			if(Input::has('first_name') || Input::has('last_name'))
			{
				$first = Input::get('first_name');
				$last = Input::get('last_name');
				$users = User::whereNotIn('id', $current_user)->where('first_name','LIKE', "%{$first}%")->where('last_name','LIKE', "%{$last}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('skill'))
			{
				$skill = Input::get('skill');
				$skilled_users = DB::table('skill_user')->where('skill_id', '=', $skill)->lists('user_id');
				if(count($skilled_users) > 0)
				{
					$users = User::whereNotIn('id',$current_user)->whereIn('id', $skilled_users)->orderBy('last_name','asc')->paginate(20);
				}
				else
				{
					$users = [];
				}
			}
			elseif(Input::has('state'))
			{
				if(Input::has('city') != '')
				{
					$city = Input::get('city');
					$state = Input::get('state');
					$users = User::whereNotIn('id',$current_user)->where('city','LIKE', "%{$city}%")->where('state', 'LIKE', "%{$state}%")->orderBy('last_name','asc')->paginate(20);
				}
				else 
				{
					$state = Input::get('state');
					$users = User::whereNotIn('id',$current_user)->where('state', 'LIKE', "%{$state}%")->orderBy('last_name','asc')->paginate(20);
				}
			}		
			else 
			{
				$users = User::whereNotIn('id',$current_user)->orderBy('last_name','asc')->paginate(20);
			}
		}
		else 
		{
			$connections = [];
			if(Input::has('first_name') || Input::has('last_name'))
			{
				$first = Input::get('first_name');
				$last = Input::get('last_name');
				$users = User::where('first_name','LIKE', "%{$first}%")->where('last_name','LIKE', "%{$last}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('skill'))
			{
				$skill = Input::get('skill');
				$skilled_users = DB::table('skill_user')->where('skill_id', '=', $skill)->lists('user_id');
				if(count($skilled_users) > 0)
				{
					$users = User::whereIn('id', $skilled_users)->orderBy('last_name','asc')->paginate(20);
				}
				else
				{
					$users = [];
				}
			}
			elseif(Input::has('state'))
			{
				$city = Input::get('city');
				$state = Input::get('state');
				$users = User::where('city','LIKE', "%{$city}%")->where('state', 'LIKE', "%{$state}%")->orderBy('last_name','asc')->paginate(20);
			}		
			else 
			{
				$users = User::orderBy('last_name','asc')->paginate(20);
			}
		}
		
		return View::make('users.index')->with('users',$users)->with('skills', $skills)->with('connections', $connections);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// //this is our signup page
		// $email = Input::get('email');
		// $password = Input::get('password');
		// $result = array(
		// 	'email' => $email
		// 	'password' => $password
		// 	)
		return View::make('users.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->update(null);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// this is our user's home page
		$user = User::with('jobs')->with('skills')->with('associations')->with('schools')->with('connections')->findOrfail($id);
		
		$connections = $user->connections->take(5);

		$most_recent = Job::where('user_id', '=', $user->id)->orderBy('end_date','asc')->first();

		return View::make('users.show')->with('user', $user)->with('most_recent',$most_recent)->with('connections', $connections);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::guest()) 
		{
			Session::flash('errorMessage','You must be logged in to edit users.');
			return Redirect::action('UsersController@index');			
		}
		elseif(Auth::user()->id == $id)
		{
			$user = User::find($id);
			return View::make('users.create-edit')->with('user', $user);
		}
		else
		{
			Session::flash('errorMessage','You do not have authorization to edit this user.');
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
		// update function
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage','We could not create a new profile. Please see errors below.');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = new User();

			if(isset($id)) 
			{
				$user = User::findOrfail($id);
				if(Auth::user()->id != $id) 
				{
						Session::flash('errorMessage','You do not have the necessary credentials to edit this user.');
						return Redirect::url('/');
				}
			}


			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');		
			$user->email = Input::get('email');	
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->status = Input::get('status');
			$password = Input::get('password');
			$confirmPassword = Input::get('confirmPassword');

			if($confirmPassword == $password)
			{
				$user->password = Hash::make(Input::get('password'));
				$user->save();
			}
			else 
			{
				Session::flash('errorMessage', 'Your password and your confirmation password did not match.');
	    		return Redirect::back()->withInput();
			}
			
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
			    $user->addUploadedImage(Input::file('image'));
			    $user->save();
			}
			
			if(isset($id)) 
			{
				Session::flash('successMessage', 'You have successfully edited your account.');
    			return Redirect::action('UsersController@show',$id);
			}
			else
			{
				Session::flash('successMessage', 'You have successfully created an account.');
    			Auth::login($user);
    			return Redirect::action('UsersController@show', Auth::user()->id);
			}

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
		// this deletes the user
	}


	public function showLanding()
	{
		if(Auth::check())
		{
			return Redirect::action('UsersController@show', Auth::user()->id);
		}
		else
		{
			return View::make('users.landing');
		}
	}

}
