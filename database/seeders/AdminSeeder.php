<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Utilisation de DB pour insérer des données
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'nourhanebendjeddou23@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('123456789'),
        ]);
    }
}