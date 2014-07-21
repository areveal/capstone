<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check())
		{
			$current_user = DB::table('users')->where('id', '=', Auth::user()->id)->lists('id');
			//this will return a page to search through all users
			if(Input::has('first_name') || Input::has('last_name'))
			{
				$first = Input::get('first_name');
				$last = Input::get('last_name');
				$users = User::whereNotIn('id', $current_user)->where('first_name','LIKE', "%{$first}%")->where('last_name','LIKE', "%{$last}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('skills'))
			{
				$skills = Input::get('skills');
				$users = User::whereNotIn('id', $current_user)->where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('associations'))
			{
				$associations = Input::get('associations');
				$users = User::whereNotIn('id', $current_user)->where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('city') && Input::has('state'))
			{
				$city = Input::get('city');
				$state = Input::get('state');
				$users = User::whereNotIn('id', $current_user)->where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}		
			else 
			{
				$users = User::whereNotIn('id',$current_user)->orderBy('last_name','asc')->paginate(20);
			}
		}
		else 
		{
			if(Input::has('first_name') || Input::has('last_name'))
			{
				$first = Input::get('first_name');
				$last = Input::get('last_name');
				$users = User::where('first_name','LIKE', "%{$first}%")->where('last_name','LIKE', "%{$last}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('skills'))
			{
				$skills = Input::get('skills');
				$users = User::where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('associations'))
			{
				$associations = Input::get('associations');
				$users = User::where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}
			elseif(Input::has('city') && Input::has('state'))
			{
				$city = Input::get('city');
				$state = Input::get('state');
				$users = User::where('first_name','LIKE', "%{$first}%")->orderBy('last_name','asc')->paginate(20);
			}		
			else 
			{
				$users = User::orderBy('last_name','asc')->paginate(20);
			}
		}
		
		return View::make('users.index')->with('users',$users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//this is our signup page
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
		$user = User::with('jobs')->with('skills')->with('associations')->with('schools')->findOrfail($id);

		return View::make('users.show')->with('user', $user);
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
		else
		{
			$user = User::find($id);
			return View::make('users.create-edit')->with('user', $user);
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
			$user->country = Input::get('country');
			$user->zip = Input::get('zip');
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
		
		return View::make('users.landing');
	}

}
