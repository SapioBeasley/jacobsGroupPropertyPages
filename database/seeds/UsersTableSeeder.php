<?php

use Illuminate\Database\Seeder;
use App\User;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
    	$users = [
    		[
	    		'name' => 'Andreas Beasley',
	    		'email' => 'andreas@sapioweb.com',
	    		'password' => bcrypt('2wsxzaq1')
    		]
    	];

    	foreach ($users as $user) {
    		User::create($user);
    	}
    }
}
