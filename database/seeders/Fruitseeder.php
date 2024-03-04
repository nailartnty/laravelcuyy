<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fruitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // data palsu
        DB::table('fruits')->insert(array(
            array(
                'nama_buah' => 'apel',
                'harga'     => '20000'
            ),

            array(
                'nama_buah' => 'anggur',
                'harga'     => '30000'
            ),

            array(
                'nama_buah' => 'peach',
                'harga'     => '60000'
            ),
        ));
    }
}
