<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class komli extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                '0' => [
                    'id' => '1',
                    'jurusan_id' => '1',
                    'nama_komli' => 'XI RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                '1' => [
                    'id' => '2',
                    'jurusan_id' => '1',
                    'nama_komli' => 'XI RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                '2' => [
                    'id' => '3',
                    'jurusan_id' => '1',
                    'nama_komli' => 'XI RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                '3' => [
                    'id' => '4',
                    'jurusan_id' => '1',
                    'nama_komli' => 'XI RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                '4' => [
                    'id' => '5',
                    'jurusan_id' => '5',
                    'nama_komli' => 'XI PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                '5' => [
                    'id' => '6',
                    'jurusan_id' => '5',
                    'nama_komli' => 'XI PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                '6' => [
                    'id' => '7',
                    'jurusan_id' => '2',
                    'nama_komli' => 'XI KL 1',
                    'keterangan' => 'Kuliner',
                ],
                '7' => [
                    'id' => '8',
                    'jurusan_id' => '2',
                    'nama_komli' => 'XI KL 2',
                    'keterangan' => 'Kuliner',
                ],
                '8' => [
                    'id' => '9',
                    'jurusan_id' => '4',
                    'nama_komli' => 'XI TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                '9' => [
                    'id' => '10',
                    'jurusan_id' => '4',
                    'nama_komli' => 'XI TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
            ];

        foreach ($data as $key => $value) {
            DB::table('komli')->insert($value);
        }
    }
}
