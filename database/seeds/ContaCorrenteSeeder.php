<?php

use Illuminate\Database\Seeder;
use App\ContaCorrente;

class ContaCorrenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(ContaCorrente::class, 10)->create();
    }
}
