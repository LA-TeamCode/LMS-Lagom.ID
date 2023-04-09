<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            '0' => [
                'id' => '1',
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            ],
            '1' => [
                'id' => '2',
                'nama_jurusan' => 'Tataboga',
            ],
            '2' => [
                'id' => '3',
                'nama_jurusan' => 'Agrobisnis ternak ruminansia',
            ],
            '3' => [
                'id' => '4',
                'nama_jurusan' => 'Teknik pengelasan',
            ],
            '4' => [
                'id' => '5',
                'nama_jurusan' => 'Perhotelan',
            ],
            '5' => [
                'id' => '6',
                'nama_jurusan' => 'Geologi Pertambangan',
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('jurusan')->insert($value);
        }
    }
}
