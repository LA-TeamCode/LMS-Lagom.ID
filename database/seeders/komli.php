<?php

namespace Database\Seeders;

use App\Models\KomliModel;
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
                    'id' => 16,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'X RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 17,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'X RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 18,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'X RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 19,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'X RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 20,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'X PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 21,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'X PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 22,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'X KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 23,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'X KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 24,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'X TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 25,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'X TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 26,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'X GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 27,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'X GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 28,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'X ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'id' => 29,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'X ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'id' => 1,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XI RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 2,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XI RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 3,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XI RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 4,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XI RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 5,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'XI PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 6,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'XI PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 7,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'XI KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 8,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'XI KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 9,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'XI TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 10,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'XI TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 11,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'XI GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 12,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'XI GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 13,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'XI ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'id' => 14,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'XI ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'id' => 30,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XII RPL 1',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 31,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XII RPL 2',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 32,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XII RPL 3',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 33,
                    'id_jurusan' => 'f3f8822b-b8b2-4a76-ae23-2e5ab5aeb06c',
                    'nama_komli' => 'XII RPL 4',
                    'keterangan' => 'Rekayasa Perangkat Lunak',
                ],
                [
                    'id' => 34,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'XII PH 1',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 35,
                    'id_jurusan' => '33c473c8-2eaf-4f50-927c-9ee24b05179f',
                    'nama_komli' => 'XII PH 2',
                    'keterangan' => 'Perhotelan',
                ],
                [
                    'id' => 36,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'XII KL 1',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 37,
                    'id_jurusan' => '5afe1ef7-959e-481b-8f1d-bab82664e544',
                    'nama_komli' => 'XII KL 2',
                    'keterangan' => 'Kuliner',
                ],
                [
                    'id' => 38,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'XII TP 1',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 39,
                    'id_jurusan' => 'c6d59c49-01ac-4816-b16b-a40dcd233269',
                    'nama_komli' => 'XII TP 2',
                    'keterangan' => 'Teknik Pengelasan',
                ],
                [
                    'id' => 40,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'XII GP 1',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 41,
                    'id_jurusan' => '1bc43a39-a480-4490-8dca-0b6e706a6b0f',
                    'nama_komli' => 'XII GP 2',
                    'keterangan' => 'Geologi Pertambangan',
                ],
                [
                    'id' => 42,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'XII ATR 1',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
                [
                    'id' => 43,
                    'id_jurusan' => '1d329342-880d-41d7-85de-1de88b35e3b0',
                    'nama_komli' => 'XII ATR 2',
                    'keterangan' => 'Agrobisnis Ternak Ruminansia',
                ],
            ];

        foreach ($data as $key => $value) {
            $save = [
                'jurusan_id' => $value['id_jurusan'],
                'nama_komli' => $value['nama_komli'],
                'keterangan' => $value['keterangan'],
            ];
            KomliModel::create($save);
        }
    }
}
