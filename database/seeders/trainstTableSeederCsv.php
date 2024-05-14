<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Illuminate\Support\Str;

class trainstTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str= fopen(__DIR__.'/trains.csv', 'r');

        dump($data_str);
    }
}
