<?php

namespace Database\Seeders;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'id' => 1,
                'brand_name' => 'Outfiz',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'brand_name' => 'NTD',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
