<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('Shippers')->inserts([
        [
            'id' =>'8001',
            'CompanyName' =>'JNE',
            'Phone' =>'085690764123'
        ],
        [
            'id' =>'8002',
            'CompanyName' =>'JNT',
            'Phone' =>'085806075897'
        ]
        ]);
    }
}
