<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class eskul extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            0 =>
            array(
                'id' => 1,
                'ekstrakulikuler' => 'Praja Muda Karana',
            ),
            1 =>
            array(
                'id' => 2,
                'ekstrakulikuler' => 'PMR',
            ),
            2 =>
            array(
                'id' => 3,
                'ekstrakulikuler' => 'Hadroh',
            ),
        );

        foreach ($data as $key => $value) {
            DB::table('ekstrakulikuler')->insert($value);
        }
    }
}
