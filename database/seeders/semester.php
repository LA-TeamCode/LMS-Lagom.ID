<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class semester extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =  [
            '0' => [
                'id' => '1',
                'semester' => 'SEMESTER 1',
            ],
            '1' => [
                'id' => '2',
                'semester' => 'SEMESTER 2',
            ],
            '2' => [
                'id' => '3',
                'semester' => 'SEMESTER 3',
            ],
            '3' => [
                'id' => '4',
                'semester' => 'SEMESTER 4',
            ],
            '4' => [
                'id' => '5',
                'semester' => 'SEMESTER 5',
            ],
            '5' => [
                'id' => '6',
                'semester' => 'SEMESTER 6',
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('semester')->insert($value);
        }
    }
}
