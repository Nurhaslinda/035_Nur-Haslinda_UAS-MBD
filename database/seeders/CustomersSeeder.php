<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('Customers')->inserts([
            [
                'id' =>'1001',
                'CompanyName' =>'TOKOPEDIA',
                'ContactName' =>'Linda',
                'ContactTitle' =>'Staff IT',
                'Address' =>'Ketintang Timur PTT VA',
                'City' =>'Surabaya',
                'Region' =>'Indonesia',
                'PostalCode' =>'62262'
            ],
            [
                'id' =>'1002',
                'CompanyName' =>'Tiktok',
                'ContactName' =>'Azzah',
                'ContactTitle' =>'Staff IT',
                'Address' =>'Tejoasri, Laren, Lamongan',
                'City' =>'Lamongan',
                'Region' =>'Indonesia',
                'PostalCode' =>'60212'
            ],
            [
                'id' => '1003',
                'CompanyName' =>'Lazada',
                'ContactName' =>'Sheny',
                'ContactTitle' =>'Data Analis',
                'Address' =>'Sonoadi Karanggeneng Lamongan',
                'City' => 'Lamongan',
                'Region' => 'Indonesia',
                'PostalCode' =>'62031'
            ],
            [
                'id' => '1004',
                'CompanyName' => 'Dinas Pertanian',
                'ContactName' => 'Alfi',
                'ContactTitle' => 'Tekniksi Pertanian',
                'Address' => 'Sungelebak Karanggeneng Lamongan',
                'City' => 'Lamongan',
                'Region' => 'Indonesia',
                'PostalCode' => '60102'
            ],
            [
                'id' => '1005',
                'CompanyName' => 'Dinas Pertanian',
                'ContactName' => 'Naya',
                'ContactTitle' => 'Duta Pertanian',
                'Address' => 'Sungelebak Karanggeneng Lamongan',
                'City' => 'Lamongan',
                'Region' => 'Indonesia',
                'PostalCode' => '60102'
            ]
        ]);
    }
}
