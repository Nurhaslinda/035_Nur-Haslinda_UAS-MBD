<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->inserts([
            [
                'id' =>'0101',
                'ProductName' =>'Buku',
                'SuplierID' =>'5001',
                'CategotyID' =>'0001',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'10.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0102',
                'ProductName' =>'Buku',
                'SuplierID' =>'5002',
                'CategotyID' =>'0001',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'20.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0103',
                'ProductName' =>'Tas',
                'SuplierID' =>'5003',
                'CategotyID' =>'0002',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'50.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0104',
                'ProductName' =>'Tas',
                'SuplierID' =>'5004',
                'CategotyID' =>'0002',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'100.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0105',
                'ProductName' =>'Baju',
                'SuplierID' =>'5005',
                'CategotyID' =>'0003',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'200.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0106',
                'ProductName' =>'Baju',
                'SuplierID' =>'5006',
                'CategotyID' =>'0003',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'50.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0107',
                'ProductName' =>'Baju',
                'SuplierID' =>'5007',
                'CategotyID' =>'0003',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'90.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0108',
                'ProductName' =>'Tas',
                'SuplierID' =>'5004',
                'CategotyID' =>'0002',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'70.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0109',
                'ProductName' =>'Buku',
                'SuplierID' =>'5009',
                'CategotyID' =>'0001',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'90.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ],
            [
                'id' =>'0110',
                'ProductName' =>'Buku',
                'SuplierID' =>'5010',
                'CategotyID' =>'0001',
                'QuantityPerUnit' =>'4',
                'UnitPrice' =>'110.000',
                'UnitsInStok' =>'100',
                'UnitsOnOrder' =>'20',
                'ReorderLevel' =>'2',
                'Discontinued' =>'i'
            ]
        ]);
    }
}
