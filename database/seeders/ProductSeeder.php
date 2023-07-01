<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'LARAVEL E LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '1616151616',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'TV LED 75 POL',
            'cost' => 4000,
            'price' => 7500,
            'barcode' => '1616151116',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'tv.png'
        ]);

        Product::create([
            'name' => 'PC GAMER',
            'cost' => 5000,
            'price' => 6500,
            'barcode' => '1616151116',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'computador.png'
        ]);

        Product::create([
            'name' => 'IPHONE 14',
            'cost' => 5000,
            'price' => 6500,
            'barcode' => '16144446516',
            'stock' => 1000,
            'alerts' => 50,
            'category_id' => 3,
            'image' => 'iphone.png'
        ]);
    }
}
