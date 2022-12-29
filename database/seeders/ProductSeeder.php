<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'slug'          => 'aero-ehfar-navy',
                'name'          => 'Aero EHFAR Navy',
                'description'   => 'This is Aerostreet Everything Happens For A Reason Navy T-Shirt',
                'price'         => 59900,
                'stock'         => 15,
                'image'         => 'images/aero-ehfar-navy.jpg'
            ],
            [
                'slug'          => 'army-t-shirt',
                'name'          => 'Army T-Shirt',
                'description'   => 'This is Army T-Shirt',
                'price'         => 29900,
                'stock'         => 130,
                'image'         => 'images/army-t-shirt.jpg'
            ],
            [
                'slug'          => 'aero-calif-jacket',
                'name'          => 'Aero Calif Jacket',
                'description'   => 'This is Aerostreet California Custom Jacket',
                'price'         => 119900,
                'stock'         => 20,
                'image'         => 'images/aero-calif-jacket.jpg'
            ],
            [
                'slug'          => 'aero-basic-jacket',
                'name'          => 'Aero Basic Jacket',
                'description'   => 'This is Aerostreet Basic Grey Jacket',
                'price'         => 149900,
                'stock'         => 32,
                'image'         => 'images/aero-basic-jacket.jpg'
            ],
            [
                'slug'          => 'aero-palm-sea',
                'name'          => 'Aero Palm Sea',
                'description'   => 'This is Aerostreet Palm Sea Oversized Black T-Shirt',
                'price'         => 79900,
                'stock'         => 75,
                'image'         => 'images/aero-palm-sea.jpg'
            ],
            [
                'slug'          => 'aero-pop-team',
                'name'          => 'Aero Pop Team',
                'description'   => 'This is Aerostreet Pop Team Black T-Shirt',
                'price'         => 54900,
                'stock'         => 115,
                'image'         => 'images/aero-pop-team.jpg'
            ],
            [
                'slug'          => 'white-t-shirt',
                'name'          => 'White T-Shirt',
                'description'   => 'This is White T-Shirt',
                'price'         => 29900,
                'stock'         => 130,
                'image'         => 'images/white-t-shirt.jpg'
            ],
            [
                'slug'          => 'navy-t-shirt',
                'name'          => 'Navy T-Shirt',
                'description'   => 'This is Navy T-Shirt',
                'price'         => 29900,
                'stock'         => 150,
                'image'         => 'images/navy-t-shirt.jpg'
            ],
            [
                'slug'          => 'aero-seiryu-white',
                'name'          => 'Aero Seiryu White',
                'description'   => 'This is Aerostreet Seiryu Oversized White T-Shirt',
                'price'         => 59900,
                'stock'         => 30,
                'image'         => 'images/aero-seiryu-white.jpg'
            ],
            [
                'slug'          => 'aero-grateful-white',
                'name'          => 'Aero Grateful White',
                'description'   => 'This is Aerostreet Grateful White Hoodie',
                'price'         => 139900,
                'stock'         => 25,
                'image'         => 'images/aero-grateful-white.jpg'
            ],
            [
                'slug'          => 'aero-grateful-black',
                'name'          => 'Aero Grateful Black',
                'description'   => 'This is Aerostreet Grateful Black Hoodie',
                'price'         => 139900,
                'stock'         => 25,
                'image'         => 'images/aero-grateful-black.jpg'
            ],
            [
                'slug'          => 'aero-sunflower-navy',
                'name'          => 'Aero Sunflower Navy',
                'description'   => 'This is Aerostreet Sunflower Navy T-Shirt',
                'price'         => 59900,
                'stock'         => 9,
                'image'         => 'images/aero-sunflower-navy.jpg'
            ],
            [
                'slug'          => 'aero-riders-cream',
                'name'          => 'Aero Riders Cream',
                'description'   => 'This is Aerostreet Riders Cream T-Shirt',
                'price'         => 44900,
                'stock'         => 2,
                'image'         => 'images/aero-riders-cream.jpg'
            ],
        ]);
    }
}
