<?php

class SkillsController extends \BaseController {

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
		if(Auth::check())
		{

			if(Auth::user()->slug == $slug)	
			{
				$skills_owned = DB::table('skill_user')->where('user_id', '=', Auth::user()->id)->lists('skill_id');
				if( count($skills_owned) > 0)
				{
					$skills = Skill::whereNotIn('id',$skills_owned)->orderBy('skill', 'asc')->get();
					$skills_owned = Skill::whereIn('id', $skills_owned)->get();
				}
				else
				{
					$skills = Skill::get();
				}
				return View::make('skills.create-edit')->with('skills', $skills)->with('skills_owned', $skills_owned);
			}
			else 
			{
				Session::flash('errorMessage','You do not have the necessary priveleges to edit this user.');
				return Redirect::action('UsersController@index');
			}
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
			if(Input::has('existing_skills'))
			{
				$add = Input::get('existing_skills');
				$user = Auth::user();
				$user->skills()->attach($add);
				return Redirect::action('SkillsController@edit', $user->slug);

			}
			elseif(Input::has('new_skills'))
			{
				$validator = Validator::make(Input::all(), Skill::$rules);

				if($validator->fails())
				{
					Session::flash('errorMessage','This skill already exists in the database.');
					return Redirect::back()->withInput()->withErrors($validator);
				}

				$add = Input::get('new_skills');
				$words = explode(' ', $add);
				foreach ($words as $word) {
					$new_word = ucfirst($word);
					$new_words[] = $new_word;
				}
				$add = implode(' ', $new_words);
				$skill = new Skill;
				$skill->skill = $add;
				$skill->save();
				$user = Auth::user();
				$user->skills()->attach($skill->id);
				return Redirect::action('SkillsController@edit', $user->slug);
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
		$user->skills()->detach($id);
		return Redirect::action('SkillsController@edit', $user->slug);
	}



}
