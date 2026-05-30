<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statistic;

class StatisticSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statistic::factory(4)->create();
    }
}
