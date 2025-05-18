<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'vinh',
            'email' => 'vinh@gmail.com',
            'role' => 'admin',
        ]);
        Admin::factory()->count(10)->create();
    }
}
