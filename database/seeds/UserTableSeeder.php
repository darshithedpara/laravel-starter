<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
  		User::truncate();
  		$UserTypes = [
  			[
  				'first_name' => 'Admin',
  				'last_name'  => 'User',
  				'email'      => 'admin@mailinator.com',
  				'role'       => 'admin',
                'mobile_no'=>8112250263
  			],
  			[
  				'first_name' => 'User',
  				'last_name'  => 'Candidate',
  				'email'      => 'user@mailinator.com',
  				'role'       => 'user',
                'mobile_no'=>1234567897
  			]
  		];
  		foreach ($UserTypes as $key => $value) {
  			$user = User::create([
  				'first_name' => $value['first_name'],
  				'last_name'  => $value['last_name'],
  				'password'   => bcrypt('123456'),
  				'email'      => $value['email'],
                'mobile_no'=>$value['mobile_no']
  			]);
  			$user->attachRole($value['role']);
  		}
  	}
    }
}
