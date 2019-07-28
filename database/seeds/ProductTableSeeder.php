<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
         'imagePath'=> '...',
         'title'=> 'novel',
         'description'=> 'this is novel , this is book',
         'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
         'imagePath'=> '...',
         'title'=> 'novel',
         'description'=> 'this is novel , this is book',
         'price'=> 20
        ]);
        $product->save();

        $product = new \App\Product([
         'imagePath'=> '...',
         'title'=> 'novel',
         'description'=> 'this is novel , this is book',
         'price'=> 30
        ]);
        $product->save();

        $product = new \App\Product([
         'imagePath'=> '...',
         'title'=> 'novel',
         'description'=> 'this is novel , this is book',
         'price'=> 40
        ]);
        $product->save();
    }
}
