<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->inserts([
            [
                'id' =>'7001',
                'CustomerID'=>'1001',
                'EmployeeID' =>'2001',
                'OrderDate' =>'2023-01-01',
                'RequiredDate' =>'2023-01-02',
                'ShippedDate' =>'2024-01-02',
                'ShipVia' =>'Lamongan',
                'Freight' =>'PickUp',
                'ShipName' =>'JNT',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'id' =>'7002',
                'CustomerID'=>'1002',
                'EmployeeID' =>'2002',
                'OrderDate' =>'2023-01-01',
                'RequiredDate' =>'2023-01-02',
                'ShippedDate' =>'2024-01-02',
                'ShipVia' =>'Lamongan',
                'Freight' =>'PickUp',
                'ShipName' =>'JNT',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'id' =>'7003',
                'CustomerID'=>'1003',
                'EmployeeID' =>'2003',
                'OrderDate' =>'2023-01-01',
                'RequiredDate' =>'2023-01-02',
                'ShippedDate' =>'2024-01-02',
                'ShipVia' =>'Lamongan',
                'Freight' =>'PickUp',
                'ShipName' =>'JNT',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'id' =>'7004',
                'CustomerID'=>'1004',
                'EmployeeID' =>'2004',
                'OrderDate' =>'2023-01-01',
                'RequiredDate' =>'2023-01-02',
                'ShippedDate' =>'2024-01-02',
                'ShipVia' =>'Lamongan',
                'Freight' =>'PickUp',
                'ShipName' =>'JNT',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ],
            [
                'id' =>'7005',
                'CustomerID'=>'1005',
                'EmployeeID' =>'2005',
                'OrderDate' =>'2023-01-01',
                'RequiredDate' =>'2023-01-02',
                'ShippedDate' =>'2024-01-02',
                'ShipVia' =>'Lamongan',
                'Freight' =>'PickUp',
                'ShipName' =>'JNT',
                'ShipAddress' =>'Ketintang Timur VA',
                'ShipCity' =>'Surabaya',
                'ShipRegion' =>'Jawa Timur',
                'ShipPostalCode' =>'60202',
                'ShipCountry' =>'Indonesia'
            ]
        ]);
    }
}
