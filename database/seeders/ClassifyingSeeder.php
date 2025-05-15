<?php

namespace Database\Seeders;

use App\Models\Classifying;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassifyingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classifying::factory(5)->create();
    }
}
