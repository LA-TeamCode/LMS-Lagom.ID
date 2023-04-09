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
                'nama_ekstrakulikuler' => 'Praja Muda Karana',
                'keterangan' => 'Kegiatan Berjalan Dengan Baik',
            ),
            1 =>
            array(
                'id' => 2,
                'nama_ekstrakulikuler' => 'PMR',
                'keterangan' => 'Kegiatan Sosial Masyarakat Kesehatan',
            ),
            2 =>
            array(
                'id' => 3,
                'nama_ekstrakulikuler' => 'Hadroh',
                'keterangan' => 'Kegiatan Musik Keagamaan',
            ),
        );

        foreach ($data as $key => $value) {
            DB::table('ekstrakulikuler')->insert($value);
        }
    }
}
