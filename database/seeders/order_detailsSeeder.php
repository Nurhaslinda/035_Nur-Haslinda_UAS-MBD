<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('Order_details')->inserts([
        [
            'id' =>'3001',
            'ProductID' =>'0101',
            'UnitPrice' =>'10.000',
            'Quantity' =>'100',
            'Discount' =>'20%'
        ],
        [
            'id' =>'3002',
            'ProductID' =>'0102',
            'UnitPrice' =>'20.000',
            'Quantity' =>'100',
            'Discount' =>'10%'
        ],
        [
            'id' =>'3003',
            'ProductID' =>'0103',
            'UnitPrice' =>'50.000',
            'Quantity' =>'100',
            'Discount' =>'10%'
        ],
        [
            'id' =>'3004',
            'ProductID' =>'0104',
            'UnitPrice' =>'100.000',
            'Quantity' =>'100',
            'Discount' =>'50%'
        ],
        [
            'id' =>'3005',
            'ProductID' =>'0105',
            'UnitPrice' =>'200.000',
            'Quantity' =>'100',
            'Discount' =>'20%'
        ],
        [
            'id' =>'3006',
            'ProductID' =>'0106',
            'UnitPrice' =>'50.000',
            'Quantity' =>'100',
            'Discount' =>'2%'
        ],
        [
            'id' =>'3007',
            'ProductID' =>'0107',
            'UnitPrice' =>'90.000',
            'Quantity' =>'100',
            'Discount' =>'8%'
        ],
        [
            'id' =>'3008',
            'ProductID' =>'0108',
            'UnitPrice' =>'70.000',
            'Quantity' =>'100',
            'Discount' =>'10%'
        ],
        [
            'id' =>'3009',
            'ProductID' =>'0109',
            'UnitPrice' =>'90.000',
            'Quantity' =>'100',
            'Discount' =>'20%'
        ],
        [
            'id' =>'3010',
            'ProductID' =>'0110',
            'UnitPrice' =>'110.000',
            'Quantity' =>'100',
            'Discount' =>'8%'
        ],
        [
            'id' =>'3011',
            'ProductID' =>'0111',
            'UnitPrice' =>'210.000',
            'Quantity' =>'100',
            'Discount' =>'20%'
        ],
        [
            'id' =>'3012',
            'ProductID' =>'0112',
            'UnitPrice' =>'90.000',
            'Quantity' =>'100',
            'Discount' =>'3%'
        ],
        [
            'id' =>'3013',
            'ProductID' =>'0113',
            'UnitPrice' =>'100.000',
            'Quantity' =>'100',
            'Discount' =>'8%'
        ],
        [
            'id' =>'3014',
            'ProductID' =>'0114',
            'UnitPrice' =>'10.000',
            'Quantity' =>'100',
            'Discount' =>'2%'
        ],
        [
            'id' =>'3015',
            'ProductID' =>'0115',
            'UnitPrice' =>'110.000',
            'Quantity' =>'100',
            'Discount' =>'2%'
        ],
        [
            'id' =>'3016',
            'ProductID' =>'0116',
            'UnitPrice' =>'70.000',
            'Quantity' =>'100',
            'Discount' =>'20%'
        ],
        [
            'id' =>'3017',
            'ProductID' =>'0117',
            'UnitPrice' =>'60.000',
            'Quantity' =>'100',
            'Discount' =>'2%'
        ],
        [
            'id' =>'3018',
            'ProductID' =>'0118',
            'UnitPrice' =>'170.000',
            'Quantity' =>'100',
            'Discount' =>'7%'
        ],
        [
            'id' =>'3019',
            'ProductID' =>'0119',
            'UnitPrice' =>'50.000',
            'Quantity' =>'100',
            'Discount' =>'2%'
        ],
        [
            'id' =>'3020',
            'ProductID' =>'0120',
            'UnitPrice' =>'11.000',
            'Quantity' =>'100',
            'Discount' =>'1%'
        ]
        ]);
    }
}
