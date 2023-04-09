<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class keahlian extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
            [
                '0' => [
                    'id' => '7',
                    'bidang_keahlian' => 'Pariwisata',
                    'program_keahlian' => 'Kuliner',
                    'paket_keahlian' => 'Tata Boga',
                ],
                '1' => [
                    'id' => '8',
                    'bidang_keahlian' => 'Teknologi Informasi dan Komunikasi',
                    'program_keahlian' => 'Teknik Informatika dan Komputer',
                    'paket_keahlian' => 'Rekayasa Perangkat Lunak',
                ],
                '2' => [
                    'id' => '9',
                    'bidang_keahlian' => 'Pariwisata',
                    'program_keahlian' => 'Perhotelan dan Jasa Pariwisata',
                    'paket_keahlian' => 'Perhotelan',
                ],
                '3' => [
                    'id' => '10',
                    'bidang_keahlian' => 'Teknologi dan Rekayasa.',
                    'program_keahlian' => ' Teknik Mesin',
                    'paket_keahlian' => 'Teknik Pengelasan',
                ],
                '4' => [
                    'id' => '11',
                    'bidang_keahlian' => 'Energi dan Pertambangan',
                    'program_keahlian' => 'Geologi Pertambangan',
                    'paket_keahlian' => 'Geologi Pertambangan',
                ],
                '5' => [
                    'id' => '12',
                    'bidang_keahlian' => ' Agribisnis dan Agroteknologi',
                    'program_keahlian' => 'Agribisnis Ternak',
                    'paket_keahlian' => 'Agribisnis Ternak dan Ruminansia',
                ],
            ];

        foreach ($data as $key => $value) {
            DB::table('keahlian')->insert($value);
        }
    }
}
