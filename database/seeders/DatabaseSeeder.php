<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $product1 = Product::create([
            'title'=>'Wand',
            'price'=>'20$',
            'description'=>'Work Post content',
            'quantity'=>'work-post',
            'image' => '1.jpg'
        ]);
        $product2 = Product::create([
            'title'=>'Book',
            'price'=>'20$',
            'description'=>'Work Post content',
            'quantity'=>'work-post',
            'image' => '1.jpg'
        ]);
    }
}
