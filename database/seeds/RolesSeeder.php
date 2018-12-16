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
        factory(\App\Role::class, 1)->create(['name' => 'admin', 'guard_name' => 'web']);
        factory(\App\Role::class, 1)->create(['name' => 'suma', 'guard_name' => 'web']);
        factory(\App\Role::class, 1)->create(['name' => 'externo', 'guard_name' => 'web']);
    }
}