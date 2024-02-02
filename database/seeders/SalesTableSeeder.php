<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale; //追加

class SalesTableSeeder extends Seeder
{

    public function run(): void
    {
        Sale::factory()->count(100)->create();
    }
}

