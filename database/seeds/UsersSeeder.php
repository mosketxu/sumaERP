<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(\App\User::class, 1)->create([
			'name' => 'admin',
			'email' => 'admin@mail.com',
			'password' => bcrypt('1234'),
	        // 'role_id' => \App\Role::ADMIN
		]);

		factory(\App\User::class, 1)->create([
			'name' => 'alex',
			'email' => 'alex@alex.com',
			'password' => bcrypt('1234'),
		    // 'role_id' => \App\Role::SUMA
		]);

		factory(\App\User::class, 1)->create([
			'name' => 'cliente1',
			'email' => 'cliente@cliente.com',
			'password' => bcrypt('1234'),
		    // 'role_id' => \App\Role::EXTERNO
		]);
	}
}
