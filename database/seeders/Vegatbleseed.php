<?php

namespace Database\Seeders;

use App\Models\Vegatble;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Vegatbleseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //buat data palsu
        DB::table('vegatbles')->insert(array(
            array(
                'nama-sayur' => 'bayam',
                'harga-sayur' => '5000'
            ),

            array(
                'nama-sayur' => 'kol',
                'harga-sayur' => '3000'
            ),

            array(
                'nama-sayur' => 'wortel',
                'harga-sayur' => '6000'
            ),
        ));
    }
}
