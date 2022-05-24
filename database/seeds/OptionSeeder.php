<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    Option::create([
            'name' => 'Première',
            'niveau_id' => 2,
        ]);

    Option::create([
            'name' => 'Terminale',
            'niveau_id' => 2 ,
        ]);
        Option::create([
            'name' => '....',
            'niveau_id' => 2 ,
        ]);
        
    }
}
