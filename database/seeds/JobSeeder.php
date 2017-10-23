<?php

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user1 = \App\User::create([
            'name' => 'Pt Superindo',
            'biodata' => '',
            'cv' => '',
            'email' => 'superindo@mail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'type' => 1,
        ]);

        $jobType1 = \App\Models\JobType::create([
            'name' => 'web'
        ]);
        $jobType2 = \App\Models\JobType::create([
            'name' => 'techno'
        ]);
         $job1 = Job::create([
             'name' => 'Web Designer',
             'creator_id' =>$user1->id,
             'location' => 'jepara',
             'Description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
             'status' => true,
         ]);
         $jobArr = [$jobType1, $jobType2];
         $job1->jobTypes()->saveMany($jobArr);

        $jobType3 = \App\Models\JobType::create([
            'name' => 'office'
        ]);
         $job2 = Job::create([
             'name' => 'Office Boy',
             'creator_id' =>$user1->id,
             'location' => 'jepara',
             'Description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
             'status' => true,
         ]);
        $job2->jobTypes()->saveMany([$jobType3]);
    }
}
