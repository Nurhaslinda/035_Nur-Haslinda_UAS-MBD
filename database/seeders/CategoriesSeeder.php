<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('Categories')->inserts([
            [
                'id' => '0001',
                'CategoryName' => 'Buku',
                'Description' => 'Buku Manajemen Informatika',
                'Picture' => 'Gambar 1'
            ],
            [
                'id' => '0002',
                'CategoryName' => 'Tas',
                'Description' => 'Tas Kuliah UNESA',
                'Picture' => 'Gambar 2'
            ],
            [
                'id' => '0003',
                'CategoryName' => 'Baju',
                'Description' => 'Baju Manajemen Informatika',
                'Picture' => 'Gambar 3'
            ]
        ]);
    }
}
