<?php

use App\Niveau;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niveau::create([
            'name' => '1 Cycle',
        ]);
        Niveau::create([
            'name' => 'Second Cycle',
        ]);
    }
}
