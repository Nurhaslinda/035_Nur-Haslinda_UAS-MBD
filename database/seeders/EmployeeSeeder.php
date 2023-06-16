<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        //
        DB::table('Employees')->inserts([
        [
            'id' => '2001',
            'LastName' => 'Azzah',
            'FirstID' => 'Lathifatul',
            'Title' => 'Staff IT',
            'TitleOfCourtesy' => 'Staff IT',
            'BirthDate' => '2003-09-19',
            'HireDate' => '2024-06-01',
            'Address' => 'Ketintang Timur PTT VA',
            'City' => 'Surabaya',
            'Region' =>'Indonesia'
        ],
        [
            'id' => '2002',
            'LastName' => 'Eka',
            'FirstID' => 'Sheny',
            'Title' => 'Data Analis',
            'TitleOfCourtesy' => 'Data Analis',
            'BirthDate' => '2003-10-19',
            'HireDate' => '2024-06-01',
            'Address' => 'Ketintang Timur PTT VA',
            'City' => 'Surabaya',
            'Region' =>'Indonesia'
        ],
        [
            'id' => '2003',
            'LastName' => 'Alfi',
            'FirstID' => 'Ainur',
            'Title' => 'Teknisi Pertanian',
            'TitleOfCourtesy' => 'Teknisi Pertanian',
            'BirthDate' => '2003-07-11',
            'HireDate' => '2024-06-01',
            'Address' => 'Ketintang Timur PTT VA',
            'City' => 'Surabaya',
            'Region' =>'Indonesia'
        ],
        [
            'id' => '2004',
            'LastName' => 'Khifiyya',
            'FirstID' => 'Nidaan',
            'Title' => 'Duta Pertanian',
            'TitleOfCourtesy' => 'Duta Pertanian',
            'BirthDate' => '2003-12-26',
            'HireDate' => '2024-06-01',
            'Address' => 'Ketintang Timur PTT VA',
            'City' => 'Surabaya',
            'Region' =>'Indonesia'
        ],
        [
            'id' => '2005',
            'LastName' => 'Linda',
            'FirstID' => 'Nur',
            'Title' => 'Staff IT',
            'TitleOfCourtesy' => 'Staff IT',
            'BirthDate' => '2003-08-29',
            'HireDate' => '2024-06-01',
            'Address' => 'Ketintang Timur PTT VA',
            'City' => 'Surabaya',
            'Region' =>'Indonesia'
        ]
        ]);
    }
}
