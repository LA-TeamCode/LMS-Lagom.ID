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
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            ],
            '1' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Tataboga',
            ],
            '2' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Agrobisnis ternak ruminansia',
            ],
            '3' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Teknik pengelasan',
            ],
            '4' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Perhotelan',
            ],
            '5' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'nama_jurusan' => 'Geologi Pertambangan',
            ]
        ];

        foreach ($data as $key => $value) {
            DB::table('jurusan')->insert($value);
        }
    }
}
