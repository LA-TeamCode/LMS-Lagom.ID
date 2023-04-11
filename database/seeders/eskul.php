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
                'id' => \Illuminate\Support\Str::uuid(),
                'ekstrakulikuler' => 'Praja Muda Karana',
            ),
            1 =>
            array(
                'id' => \Illuminate\Support\Str::uuid(),
                'ekstrakulikuler' => 'PMR',
            ),
            2 =>
            array(
                'id' => \Illuminate\Support\Str::uuid(),
                'ekstrakulikuler' => 'Hadroh',
            ),
        );

        foreach ($data as $key => $value) {
            DB::table('ekstrakulikuler')->insert($value);
        }
    }
}
