<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legos')->insert([
            [
                'numero' => '001',
                'nombre' => 'Lego Ciudad',
                'tema' => 'Ciudades',
                'precio' => 29.99,
                'cantidad' => 100,
            ],
            [
                'numero' => '002',
                'nombre' => 'Lego Espacial',
                'tema' => 'Espacio',
                'precio' => 39.99,
                'cantidad' => 75,
            ],
        ]);
        
    }
}
