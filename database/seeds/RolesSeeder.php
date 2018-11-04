<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'suma']);
        factory(\App\Role::class, 1)->create(['name' => 'externo']);
    }
}