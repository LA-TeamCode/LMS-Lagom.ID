<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tahun_ajaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            '0' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'tahun_ajaran' => '2018/2019',
            ],
            '1' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'tahun_ajaran' => '2019/2020',
            ],
            '2' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'tahun_ajaran' => '2020/2021',
            ],
            '3' => [
                'id' => \Illuminate\Support\Str::uuid(),
                'tahun_ajaran' => '2021/2022',
            ],
        ];

        foreach ($data as $key => $value) {
            DB::table('tahun_ajaran')->insert($value);
        }
    }
}
