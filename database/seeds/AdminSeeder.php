<?php

use App\User;

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();

		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'luiza@pintos.com.br',
			'password'    => "musabela",
			'first_name'  => 'Luiza',
			'last_name'   => 'Senna',
		));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 1),
		]);

		Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
			'slug'  => 'user',
		]);

		$admin->roles()->attach($adminRole);
	}

}
