<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product12.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product7.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product8.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product9.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product10.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product11.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'category_id' => 2,
                'brand_id' => 1,
                'product_name' => 'Easy Polo Black Edition',
                'price' => '56',
                'content' => 'xxxxxxxxx',
                'discount' => '10',
                'image' => 'images/shop/product7.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
