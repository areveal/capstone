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
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        for ($i=1; $i <= 5 ; $i++) { 
	        
	        $user = new User();
	        $user->first_name = 'Bob';
	        $user->last_name = 'Somebody';
	        $user->email = "user{$i}@codeup.com";
	        $user->password = Hash::make('password');
	        $user->save();
        	
        }
    }

}

class SchoolsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('schools')->delete();


		for ($i=1; $i <=8 ; $i++) { 
			$school = new School();
			$school->college = 'That University';
			$school->date_began = '2010-05-01';
			$school->date_complete = '2014-05-01';
			$school->major = 'BS in Comp Science';
			$school->gpa = '3.0';
			$school->user_id = mt_rand(1,5);
			$school->save();

		}
	}

}


class JobsTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('jobs')->delete();


		for ($i=1; $i <=15 ; $i++) { 
			$job = new Job();
			$job->job_title = 'That Job';
			$job->start_date = '2010-05-01';
			$job->end_date = '2014-05-01';
			$job->company = 'That Business';
			$job->description = 'Lorem ipsum dolor sit amet, volutpat nam, egestas massa pellentesque. Arcu et, amet orci vitae. Ante in vehicula, sit vitae nisl, diam exercitationem ac. At nunc nibh. Donec augue volutpat.';
			$job->user_id = mt_rand(1,5);
			$job->save();

		}
	}

}
