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
		$this->call('EducationTableSeeder');
		$this->call('ExperienceTableSeeder');
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
	        $user->password = Hash::make('letmein');
	        $user->save();
        	
        }
    }

}

class EducationTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('education')->delete();


		for ($i=1; $i <=8 ; $i++) { 
			$education = new Education();
			$education->college = 'That University';
			$education->year_began = '2010';
			$education->year_completed = '2014';
			$education->major = 'BS in Comp Science';
			$education->GPA = '3.0';
			$education->user_id = mt_rand(1,5);
			$education->save();

		}
	}

}


class ExperienceTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('experience')->delete();


		for ($i=1; $i <=15 ; $i++) { 
			$experience = new Experience();
			$experience->job_title = 'That Job';
			$experience->start_date = 'May 1 2010';
			$experience->end_date = 'May 1 2014';
			$experience->company = 'That Business';
			$experience->description = 'Lorem ipsum dolor sit amet, volutpat nam, egestas massa pellentesque. Arcu et, amet orci vitae. Ante in vehicula, sit vitae nisl, diam exercitationem ac. At nunc nibh. Donec augue volutpat.';
			$experience->user_id = mt_rand(1,5);
			$experience->save();

		}
	}

}
