<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('SchoolsTableSeeder');
		$this->call('JobsTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('AssociationsTableSeeder');
		// $this->call('ZipcodesTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


		$faker = Faker\Factory::create();
		 
		for ($i = 0; $i < 100; $i++)
		{
		    $user = new User;
		    $user->first_name = $faker->firstName;
		    $user->last_name = $faker->lastName;
		    $user->email = $faker->email;
		    $user->password = Hash::make('password');
		    $user->img_path = '/img-upload/user.jpg';
			$zips = DB::table('zipcodes')->lists('zip');
			$zip = array_rand($zips);
		    $user->zip = $zips[$zip];
			$city = DB::table('zipcodes')->where('zip', '=', $zips[$zip])->lists('city');
			$user->city = $city[0];
			$state = DB::table('zipcodes')->where('zip', '=', $zips[$zip])->lists('state_abbrev');		    
			$user->state_abbrev = $state[0];
		    $user->country = 'US';
		    $user->status = 'Job Seeker';
		    $user->save();
		}

	}

}

class SchoolsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('schools')->delete();


		for ($i=1; $i <=70 ; $i++) { 
			$school = new School();
			$school->college = 'That University';
			$school->date_began = '2010-05-01';
			$school->date_complete = '2014-05-01';
			$school->major = 'BS in Comp Science';
			$school->gpa = '3.0';
			$school->user_id = mt_rand(1,50);
			$school->save();

		}
	}

}


class JobsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('jobs')->delete();


		for ($i=1; $i <=400 ; $i++) { 
			$job = new Job();
			$job->job_title = 'That Job';
			$job->start_date = '2010-05-01';
			$job->end_date = '2014-05-01';
			$job->company = 'That Business';
			$job->description = 'Lorem ipsum dolor sit amet, volutpat nam, egestas massa pellentesque. Arcu et, amet orci vitae. Ante in vehicula, sit vitae nisl, diam exercitationem ac. At nunc nibh. Donec augue volutpat.';
			$job->user_id = mt_rand(1,50);
			$job->save();

		}
	}

}


class SkillsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('skills')->delete();
		 
			$skill = new Skill();
			$skill->skill = 'Web Development';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Math';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Art';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Graphic design';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Communication';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Management';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Reading';
			$skill->save();
			$skill = new Skill();
			$skill->skill = 'Organization';
			$skill->save();			

	}

}


class AssociationsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('associations')->delete();
		 
			$association = new Association();
			$association->association = 'Disabled';
			$association->save();
			$association = new Association();
			$association->association = 'Veteran';
			$association->save();
			$association = new Association();
			$association->association = 'African American';
			$association->save();
			$association = new Association();
			$association->association = 'Latin American';
			$association->save();
			$association = new Association();
			$association->association = 'Asian American';
			$association->save();			

	}

}

class ZipcodesTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('zipcodes')->delete();

		$filename = "/vagrant/sites/final-project.dev/public/US.txt";

		$filesize = filesize($filename);
	    //open file to read
	    $read = fopen($filename, 'r');
	    //read file into string
	    $list_string = fread($read, $filesize);
	    //turn string into array
	    $zipcode_array = explode("\n", $list_string);

	    foreach ($zipcode_array as $key => $zipcodes) {
	    	$pieces[] = explode("\t",$zipcodes);
	    }    

	    foreach($pieces as $piece)
	    {
			$zipcode = new Zipcode();
			$zipcode->zip = $piece[1];
			$zipcode->lat = $piece[9];
			$zipcode->lon = $piece[10];
			$zipcode->city = $piece[2];
			$zipcode->state = $piece[3];
			$zipcode->state_abbrev = $piece[4];
			$zipcode->save();
	    	
	    }


	}

}

