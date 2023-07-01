<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denomination::create([
            'type' => 'BILHETE',
            'value' => 1000,            
        ]);
        Denomination::create([
            'type' => 'BILHETE',
            'value' => 500,            
        ]);
        Denomination::create([
            'type' => 'BILHETE',
            'value' => 200,            
        ]);
        Denomination::create([
            'type' => 'BILHETE',
            'value' => 100,            
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 10,            
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 5,            
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 1,            
        ]);
        Denomination::create([
            'type' => 'DINHEIRO',
            'value' => 0.5,            
        ]);
        Denomination::create([
            'type' => 'OUTRO',
            'value' => 0,            
        ]);
    }
}
