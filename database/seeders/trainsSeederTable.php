<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Faker\Generator as Faker;

class trainsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $train= new train;
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();
        $train->azienda= $faker->text();


        dump($train);
    }
}
