<?php

use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bank::class, 1)->create(['bank5' => 'B.Sab', 'bank' => 'B.Sabadell']);
        factory(\App\Bank::class, 1)->create(['bank5' => 'BBVA', 'bank' => 'BBVA']);
        factory(\App\Bank::class, 1)->create(['bank5' => 'LaCai', 'bank' => 'LaCaixa']);
        factory(\App\Bank::class, 1)->create(['bank5' => 'B.San', 'bank' => 'B.Santander']);
        factory(\App\Bank::class, 1)->create(['bank5' => 'Banki', 'bank' => 'Bankinter']);
    }
}
