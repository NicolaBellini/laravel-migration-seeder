<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class trainsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0;$i<100;$i++){

            $train= new train;
            $train->azienda= $faker->company();
            $train->stazione_di_partenza= $faker->city();
            $train->stazione_di_arrivo= $faker->city();
            $train->orario_di_partenza= $faker->time();
            $train->orario_di_arrivo= $faker->time();
            $train->codice_treno= $faker->randomNumber(5,true);
            $train->numero_carrozze= $faker->numberBetween(5, 20);
            $train->in_orario= $faker->boolean();
            $train->cancellato= $faker->boolean();
            $train->slug= $this->getSlugUnivoque($train->azienda,$train->codice_treno);

            $train->save();
        }

    }

    private function getSlugUnivoque($company, $code){

        $stringToSlug = $company . '-' . $code;

        $slug = Str::slug($stringToSlug,'-');
        $original_slug= $slug;

        $exist= train::where('slug', $slug)->first();

        $counter=1;

        while($exist){
            $slug= $original_slug.$counter;
            $exist= train::where('slug', $slug)->first();
            $counter++;
        }

        return $slug;


    }


}
