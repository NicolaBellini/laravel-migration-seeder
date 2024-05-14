<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Illuminate\Support\Str;

use function PHPUnit\Framework\assertFalse;

class trainstTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
      public function run(): void
    {
        $data_str = fopen(__DIR__.'/trains.csv', 'r');

        $i = 0;
        while (($row = fgetcsv($data_str)) !== false) {
            if ($i > 0) {

            $train= new train;
            $train->azienda=$row[0];
            $train->stazione_di_partenza= $row[1];
            $train->stazione_di_arrivo= $row[2];
            $train->orario_di_partenza= $row[3];
            $train->orario_di_arrivo= $row[4];
            $train->codice_treno= $row[5];
            $train->numero_carrozze= $row[6];
            $train->in_orario= $row[7];
            $train->cancellato=$row[8];
            $train->slug= $this->getSlugUnivoque($train->azienda,$train->codice_treno);

            $train->save();

            }
            $i++;
        }

        fclose($data_str);
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
