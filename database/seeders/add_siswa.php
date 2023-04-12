<?php

namespace Database\Seeders;

use App\Models\DataBeasiswaSiswaModel;
use App\Models\DataOrangtuaSiswaModel;
use App\Models\DataPendidikanSiswaModel;
use App\Models\SiswaModel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class add_siswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = file_get_contents('http://localhost:8000/data_siswa.json');
        $siswa = json_decode($siswa, true);

        $komli =
            [
                [
                    'id' => '588fc481-8996-425c-ade0-fcbe48a15522',
                ],
                [
                    'id' => '7ff8cc17-94de-45b4-9057-2f9a76d8ee22',
                ],
                [
                    'id' => '1af0a5e1-7fb8-41ba-aaa1-12bf604952ca',
                ],
                [
                    'id' => 'b7d6e8b6-0fcd-4297-ac1c-5134ea8ea48f',
                ],
                [
                    'id' => 'b9270dc2-f647-4a77-a2b6-153b6941d7c7',
                ],
                [
                    'id' => '8094d4f6-b2b6-445b-af6a-8ea38927c2ea',
                ],
                [
                    'id' => 'f053fa46-c472-4ce7-b9fb-c51c551fb258',
                ],
                [
                    'id' => 'c1713e25-f615-4e20-bc3c-10a3b90425a1',
                ],
                [
                    'id' => '2e872882-6d5a-4ab5-a43e-2d6081f29a72',
                ],
                [
                    'id' => '6fabe2a0-1918-4b6e-8acc-2d03c88b6214',
                ],
                [
                    'id' => '8f813d9a-1dc6-4882-9ceb-c1e0addaf8b7',
                ],
                [
                    'id' => 'ebdbae10-3e85-47be-a41c-7e8b519f89ff',
                ],
                [
                    'id' => 'fbd87ac4-687a-47f3-b176-750d2017fb02',
                ],
                [
                    'id' => 'f3a3117c-84e9-4d7b-9f8c-d8776494c375',
                ],
                [
                    'id' => 'f8fdf0e9-38af-441a-8d39-59445b7e3660',
                ],
                [
                    'id' => 'ee5ac8f6-d549-4f4b-9732-eb91e4166c2e',
                ],
                [
                    'id' => '6b83b707-9afb-4f9d-82c1-8daf99b1d8ca',
                ],
                [
                    'id' => '97c43717-3a25-4aea-9574-ab082907a5b5',
                ],
                [
                    'id' => '443f5296-171a-4b0a-a6e1-14f156c66746',
                ],
                [
                    'id' => 'c3573d50-eb51-4c71-9dbd-5019ec7a667f',
                ],
                [
                    'id' => 'c337738b-d941-4559-a1d5-2c14fee42e60',
                ],
                [
                    'id' => '0f0a1451-d5db-4255-9c1d-58fa402f5547',
                ],
                [
                    'id' => 'da73d6ae-9817-43c8-9e6a-8df43c3772ae',
                ],
                [
                    'id' => 'b9755174-b973-4769-bfad-8f2680547b1e',
                ],
                [
                    'id' => '7710c6f0-ede9-4288-9808-e41530a8aa34',
                ],
                [
                    'id' => '840b4da3-1fb3-48a2-bb17-7846173f2fc9',
                ],
                [
                    'id' => '10936449-cfef-41ee-8bce-6c974a2dba8c',
                ],
                [
                    'id' => 'ff16bac4-d795-40c6-9796-f9e02f2ead45',
                ],
                [
                    'id' => '0542c731-e88f-4b38-b109-a2d6902259d1',
                ],
                [
                    'id' => '5b961729-ade4-4cbc-a173-e4eef137fb1c',
                ],
                [
                    'id' => 'f999d55e-5828-4a16-8bcc-880206dfa63e',
                ],
                [
                    'id' => '593ba2bb-9c65-449f-bed8-382c4c7ed720',
                ],
                [
                    'id' => 'b784cbdc-8d70-4e8e-bffb-8dce65072a1d',
                ],
                [
                    'id' => '280f469d-0d14-4b93-9c93-592961862431',
                ],
                [
                    'id' => '0bb89fd0-baa1-4952-be6d-c169abcc18de',
                ],
                [
                    'id' => '8a657fb1-ae24-4ae8-aff0-8f510edf409a',
                ],
                [
                    'id' => '715852fe-c557-473f-bdba-f45ddee29650',
                ],
                [
                    'id' => '9b65678e-c6e8-4280-9bb0-32725daf329a',
                ],
                [
                    'id' => '5929d44a-4f0e-4b22-b67c-51dc94bcd532',
                ],
                [
                    'id' => '90b13a1d-c941-45d9-9147-c2f605b274e1',
                ],
                [
                    'id' => '2ae44d8c-cf1e-40f5-95fb-7ee3562133ef',
                ],
                [
                    'id' => '9b0e71fe-feb8-4fbc-8307-c12d444d30d9',
                ],
            ];

        foreach ($siswa as $key => $d) {
            $save = [
                'komli_id' => $komli[$d['id_komli'] - 1]['id'],
                'absen' => ($d['absen'] == "" ? null : $d['absen']),
                'nisn' => $d['nisn'],
                'no_induk' => $d['no_induk'],
                'nama_lengkap' => $d['nama_siswa'],
                'nama_panggilan' => $d['nama_panggilan'],
                'tempat_lahir' => explode(',', $d['ttl'])[0],
                'tanggal_lahir' => null,
                'jenis_kelamin' => $d['kelamin'],
                'agama' => $d['agama'],
                'kewarganegaraan' => $d['kewarganegaraan'],
                'anak_ke' => $d['anak_ke'],
                'jumlah_saudara_kandung' => $d['dari_berapa_saudara'],
                'jumlah_saudara_tiri' => null,
                'jumlah_saudara_angkat' => null,
                'bahasa' => $d['bahasa_sehari'],
                'rt' => $d['rt'],
                'rw' => $d['rw'],
                'dusun' => $d['jalan_dukuh'],
                'kelurahan' => $d['desa'],
                'kecamatan' => $d['kecamatan'],
                'kabupaten' => $d['kabupaten'],
                'provinsi' => null,
                'kode_pos' => null,
                'tinggal_dengan' => $d['tinggal_bersama'],
                'jarak_rumah_ke_sekolah' => $d['jarak_ke_sekolah'],
                'golongan_darah' => $d['gol_darah'],
                'penyakit_pernah_diderita' => $d['penyakit_pernah_diderita'],
                'kelainan_jasmani' => $d['kelainan_jasmani'],
                'berat_badan' => $d['berat'],
                'tinggi_badan' => $d['tinggi'],
                'bidang_keahlian' => $d['bidang_keahlian'],
                'program_keahlian' => $d['program_keahlian'],
                'keahlian' => $d['paket_keahlian'],
                'kesenian' => $d['kegemaran_kesenian'],
                'olahraga' => $d['kegemaran_olahraga'],
                'organisasi' => $d['kegemaran_organisasi'],
                'lainnya' => $d['kegemaran_lainnya'],
                'melanjutkan_ke' => $d['melanjutkan_ke'],
                'nama_perusahaan_bekerja' => $d['nama_perusahaan_lembaga'],
                'tanggal_masuk_perusahaan_bekerja' => $d['tanggal_mulai_bekerja'],
                'penghasilan' => $d['penghasilan'],
            ];
            if (
                SiswaModel::create($save)
            ) {
                echo "$key) Berhasil\n";
            } else {
                echo "Gagal";
            }
        }
    }
}
