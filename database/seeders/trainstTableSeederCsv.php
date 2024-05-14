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
                dump($row);

            }
            $i++;
        }

        fclose($data_str);
    }
}
