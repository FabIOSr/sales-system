<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fabio Ramos',
            'email' => 'fabio-s-ramos@hotmail.com',
            'phone' => '11 98362-4819',
            'password' => Hash::make('password'),
            'profile' => 'ADMIN',
            'status' => 'ACTIVE'
        ]); 

        User::create([
            'name' => 'Vinicius Ramos',
            'email' => 'vini@hotmail.com',
            'phone' => '11 98362-4819',
            'password' => Hash::make('password'),
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE'
        ]); 
    }
}
