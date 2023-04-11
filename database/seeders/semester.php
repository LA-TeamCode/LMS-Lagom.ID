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
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 1',
            ],
            '1' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 2',
            ],
            '2' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 3',
            ],
            '3' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 4',
            ],
            '4' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 5',
            ],
            '5' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'semester' => 'SEMESTER 6',
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('semester')->insert($value);
        }
    }
}
