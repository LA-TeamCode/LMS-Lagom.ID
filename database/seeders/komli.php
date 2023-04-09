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
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'X RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'X RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'X RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'X RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'X PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'X PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'X KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'X KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'X TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'X TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'X GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'X GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'X ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'X ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XI RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XI RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XI RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XI RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'XI PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'XI PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'XI KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'XI KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'XI TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'XI TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'XI GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'XI GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'XI ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'XI ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XII RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XII RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XII RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 1,
                    'nama_komli' => 'XII RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'XII PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 5,
                    'nama_komli' => 'XII PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'XII KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 2,
                    'nama_komli' => 'XII KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'XII TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 4,
                    'nama_komli' => 'XII TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'XII GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 6,
                    'nama_komli' => 'XII GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'XII ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'jurusan_id' => 3,
                    'nama_komli' => 'XII ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
            ];

        foreach ($data as $key => $value) {
            DB::table('komli')->insert($value);
        }
    }
}
