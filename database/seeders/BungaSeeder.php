<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bungas')->insert([
            'nama_bunga' => 'Rose',
            'deskripsi' => 'Beautiful red rose',
            'price' => 15.99,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Ayu Kurnia Sari',
            'email' => 'saria4558@gmail.com',
            'password' => 'rahasia',
            
        ]);
    }
}
