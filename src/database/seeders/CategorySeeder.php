<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'I Rzeczpospolita',
            'color' => 'ff0000',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Druga wojna swiatowa',
            'color' => '964b00',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Czasy wspolczesne',
            'color' => '0000ff',
        ]);
    }
}
