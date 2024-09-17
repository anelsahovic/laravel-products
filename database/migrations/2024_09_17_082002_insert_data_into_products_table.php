<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('products')->insert([
            [
                'name' => 'Dell XPS 13 Laptop',
                'description' => '13.4-inch UHD laptop with Intel Core i7 processor and 16GB RAM',
                'price' => 1299.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bose QuietComfort 45 Headphones',
                'description' => 'Wireless noise-canceling headphones with 24-hour battery life',
                'price' => 329.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Logitech MX Master 3S Mouse',
                'description' => 'Advanced wireless mouse with customizable buttons and ergonomic design',
                'price' => 99.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Apple MacBook Air M2',
                'description' => '13.6-inch laptop with M2 chip, 8GB RAM, and 256GB SSD',
                'price' => 1199.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sony PlayStation 5',
                'description' => 'Next-gen gaming console with ultra-fast SSD and ray tracing',
                'price' => 499.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Samsung Galaxy Tab S9',
                'description' => '11-inch Android tablet with 120Hz AMOLED display and S Pen',
                'price' => 749.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Microsoft Surface Pro 9',
                'description' => '2-in-1 laptop and tablet with Intel i5 processor and 8GB RAM',
                'price' => 999.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nvidia GeForce RTX 4070 Graphics Card',
                'description' => 'High-performance graphics card with 12GB GDDR6X memory',
                'price' => 599.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'GoPro Hero11 Black',
                'description' => 'Action camera with 5.3K video recording and advanced stabilization',
                'price' => 399.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fitbit Charge 5',
                'description' => 'Health and fitness tracker with built-in GPS and heart rate monitoring',
                'price' => 149.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('products')->whereIn('name', [
            'Dell XPS 13 Laptop',
            'Bose QuietComfort 45 Headphones',
            'Logitech MX Master 3S Mouse',
            'Apple MacBook Air M2',
            'Sony PlayStation 5',
            'Samsung Galaxy Tab S9',
            'Microsoft Surface Pro 9',
            'Nvidia GeForce RTX 4070 Graphics Card',
            'GoPro Hero11 Black',
            'Fitbit Charge 5'
        ])->delete();
    }
};
