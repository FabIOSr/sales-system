<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummyimage.com/200x150/000/fff',
        ]);
        Category::create([
            'name' => 'COMPUTADORES',
            'image' => 'https://dummyimage.com/200x150/000/fff',
        ]);
        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummyimage.com/200x150/000/fff',
        ]);
        Category::create([
            'name' => 'ELETRONICOS',
            'image' => 'https://dummyimage.com/200x150/000/fff',
        ]);
    }
}
