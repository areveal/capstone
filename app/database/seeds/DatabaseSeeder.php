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
		  $user->city = $faker->city;
		  $user->state = $faker->stateAbbr;
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

// class SkillUserTableSeeder extends Seeder {

// 	public function run() 
// 	{
// 		DB::table('skill_user')->delete();

// 		DB::table('skill_user')->insert(
// 			array(
// 				for ($i=0; $i < 50; $i++) { 
// 					array('skill_id' => mt_rand(1,5)),
// 					array('skill_id' => mt_rand(1,5))
// 				}
// 			));
		 
// 			$skill_user = DB::table('skil');
// 			$skill_user->skill_user = 'Disabled';
// 			$skill_user->save();			

// 	}

// }

