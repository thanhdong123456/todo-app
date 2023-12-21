<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'MENS',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'WOMENS',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
