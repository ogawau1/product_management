<?php
namespace Database\Seeders;

use App\Models\Product; //追加
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function run() 
    {
        Product::factory()->count(100)->create();
    }
}

