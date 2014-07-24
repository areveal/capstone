<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$skills = Skill::orderBy('skill','asc')->get();

		if(Auth::check())
		{
			$connections = DB::table('connections')->where('user_id', '=', Auth::user()->id)->lists('connection_id');
			$current_user = DB::table('users')->where('id', '=', Auth::user()->id)->lists('id');
			//this will return a page to search through all users
			if(Input::has('last_name'))
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
			elseif(Input::has('zip'))
			{
				$zip = Input::get('zip');
				$displacement = Input::get('displacement');
				$zip_array = DB::select("CALL zip_proximity($zip, $displacement, 'mi')");
				foreach ($zip_array as $zip) {
					$zips[] = $zip->zip;
				}
				$users = User::whereNotIn('id',$current_user)->whereIn('zip',$zips)->paginate(20);
			}		
			else 
			{
				$users = User::whereNotIn('id',$current_user)->orderBy('last_name','asc')->paginate(20);
			}
		}
		else 
		{
			$connections = [];
			if(Input::has('last_name'))
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
			elseif(Input::has('zip'))
			{
				$zip = Input::get('zip');
				$displacement = Input::get('displacement');
				$zip_array = DB::select("CALL zip_proximity($zip, $displacement, 'mi')");
				foreach ($zip_array as $zip) {
					$zips[] = $zip->zip;
				}
				$users = User::whereIn('zip',$zips)->paginate(20);
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
	public function show($slug)
	{
		// this is our user's home page
		$user = User::findBySlug($slug);
		
		$connections = $user->connections->take(5);

		if(Auth::guest())
		{
			$your_connections = [];
		}
		else
		{
			$your_connections = DB::table('connections')->where('user_id', '=', Auth::user()->id)->lists('connection_id');
		}

		return View::make('users.show')->with('user', $user)->with('connections', $connections)->with('your_connections', $your_connections);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		if(Auth::guest()) 
		{
			Session::flash('errorMessage','You must be logged in to edit users.');
			return Redirect::action('UsersController@index');			
		}
		elseif(Auth::user()->slug == $slug)
		{
			$user = User::findBySlug($slug);
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
	public function update($slug)
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

			if(isset($slug)) 
			{
				$user = User::findBySlug($slug);
				if(Auth::user()->slug != $slug) 
				{
						Session::flash('errorMessage','You do not have the necessary credentials to edit this user.');
						return Redirect::url('/');
				}
			}

			$slugs = DB::table('users')->lists('slug');

			if(in_array(Input::get('slug'), $slugs))
			{
				Session::flash('errorMessage','This extension is already in use. Please try a different URL extension.');
				return Redirect::back();
			}


			$user->first_name = ucfirst(Input::get('first_name'));
			$user->last_name = ucfirst(Input::get('last_name'));		
			$user->email = Input::get('email');	
			$user->zip = Input::get('zip');
			$city = DB::table('zipcodes')->where('zip', '=', $user->zip)->lists('city');
			$user->city = $city[0];
			$state = DB::table('zipcodes')->where('zip', '=', $user->zip)->lists('state_abbrev');
			$user->state_abbrev = $state[0];
			$user->country = Input::get('country');
			$user->status = Input::get('status');
			$password = Input::get('password');
			$confirmPassword = Input::get('confirmPassword');

			if($confirmPassword == $password)
			{
				$user->password = Hash::make(Input::get('password'));
				$user->save();

				if(!empty(Input::get('slug')))
				{
					$new_slug = Input::get('slug');
					$user->slug = $new_slug;	
				}
				else
				{
					$user->slug = $user->id . '-' . $user->first_name . '-' . $user->last_name ;
				}
				
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
			else 
			{
			    $user->img_path = '/img-upload/user.jpg';
			    $user->save();
			}
			
			if(isset($slug)) 
			{
				Session::flash('successMessage', 'You have successfully edited your account.');
    			return Redirect::action('UsersController@show', $user->slug);
			}
			else
			{
				Session::flash('successMessage', 'You have successfully created an account.');
    			Auth::login($user);
    			return Redirect::action('UsersController@show', $user->slug);
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
			return Redirect::action('UsersController@show', Auth::user()->slug);
		}
		else
		{
			return View::make('users.landing');
		}
	}

}
