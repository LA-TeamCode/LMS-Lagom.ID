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
        DB::beginTransaction();

        try {

            $data = [
                'id' => 1,
                'id_komli' => 9,
                'komli' => 'TP 1',
                'absen' => 1,
                'nama_siswa' => 'ABIDILLAH AS\'AD',
                'nisn' => 11212112212,
                'no_induk' => '001/001',
                'ttl' => 'Bojonegoro,
29 Juli 1988',
                'kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'asal_sekolah' => 'SMP N 1 Baureno',
                'no_sttb_smp' => 'DN-05 DI 1016856',
                'tahun_masuk' => 2004,
                'anak_ke' => 4,
                'dari_berapa_saudara' => 4,
                'tinggi' => 159,
                'berat' => 39,
                'jalan_dukuh' => 'Banteran',
                'desa' => 'Ngemplak',
                'rt' => 9,
                'rw' => 3,
                'no_telp' => '',
                'kecamatan' => 'Baureno',
                'kabupaten' => 'Bojonegoro',
                'nama_ayah' => 'Samsudi',
                'nama_ibu' => 'Lastini',
                'nama_wali' => '',
                'pekerjaan_ayah' => 'Wiraswasta',
                'pekerjaan_ibu' => 'Wiraswasta',
                'pekerjaan_wali' => '',
                'tahun_lulus_smp' => 2004,
                'pindahan_dari' => 'null',
                'status' => 1,
                'nama_panggilan' => '',
                'kewarganegaraan' => '',
                'status_anak' => '',
                'jarak_ke_sekolah' => '',
                'gol_darah' => '',
                'penyakit_pernah_diderita' => '',
                'kelainan_jasmani' => '',
                'tinggal_bersama' => '',
                'tanggal_ijazah' => '0000-00-00',
                'tanggal_skhun' => '0000-00-00',
                'nomor_skhun' => 0,
                'lama_belajar' => 0,
                'alasan_pindah' => 0,
                'diterima_dikelas' => 0,
                'tanggal_diterima' => '0000-00-00',
                'ttl_ayah' => 'null',
                'agama_ayah' => 'null',
                'kewarganegaraan_ayah' => 'null',
                'pendidikan_ayah' => 'null',
                'pengeluaran_perbulan_ayah' => 'null',
                'alamat_ayah' => 'null',
                'No_telp_ayah' => 'null',
                'kondisi_ayah' => 'null',
                'ttl_ibu' => 'null',
                'agama_ibu' => 'null',
                'kewarganegaraan_ibu' => 'null',
                'pendidikan_ibu' => 'null',
                'pengeluaran_perbulan_ibu' => 'null',
                'alamat_ibu' => 'null',
                'no_telp_ibu' => 'null',
                'kondisi_ibu' => 'null',
                'ttl_wali' => 'null',
                'agama_wali' => 'null',
                'kewarganegaraan_wali' => 'null',
                'pendidikan_wali' => 'null',
                'pengeluaran_perbulan_wali' => 'null',
                'alamat_wali' => 'null',
                'no_telp_wali' => 'null',
                'kondisi_wali' => 'null',
                'kegemaran_kesenian' => 'null',
                'kegemaran_olahraga' => 'null',
                'kegemaran_organisasi' => 'null',
                'kegemaran_lainnya' => 'null',
                'beasiswa_tahun1' => 'null',
                'beasiswa_kelas1' => 'null',
                'beasiswa_dari1' => 'null',
                'beasiswa_tahun2' => 'null',
                'beasiswa_kelas2' => 'null',
                'beasiswa_dari2' => 'null',
                'beasiswa_tahun3' => 'null',
                'beasiswa_kelas3' => 'null',
                'beasiswa_dari3' => 'null',
                'keterangan_status' => '',
                'tanggal_meninggalkan_sekolah' => 'null',
                'alasan_meninggalkan_sekolah' => 'null',
                'bahasa_sehari' => '',
                'melanjutkan_ke' => 'null',
                'tanggal_mulai_bekerja' => 'null',
                'nama_perusahaan_lembaga' => 'null',
                'penghasilan' => 'null',
                'bidang_keahlian' => 'null',
                'program_keahlian' => 'null',
                'paket_keahlian' => 'null',
                'nomor_sttb_lulus' => 'null',
                'tanggal_ijazah_lulus' => 'null',
                'nomor_skhun_lulus' => 'null',
                'tanggal_skhun_lulus' => 'null',
                'username' => 'null',
                'password' => '$2y$10$GuPE5xdm1wXMTxb2/wUIuuYpCvNlMv71faf5tGkzGRkDe2sHJkC/u',
                'foto_profile' => 'default.jpg',
                'role' => 1,
                'created_at' => 'null',
                'updated_at' => 'null',
            ];

            $id = Str::uuid();
            // $id = '81322387-c9fe-4c18-83ba-75120cf01761';
            SiswaModel::create([
                'id' => $id,
                'komli_id' => '15c0b446-fd81-4d35-8471-0dc1167c1872',
                'absen' => $data['absen'],
                'nama_lengkap' => $data['nama_siswa'],
                'nama_panggilan' => $data['nama_panggilan'],
                'nisn' => $data['nisn'],
                'no_induk' => $data['no_induk']
                // 'created_at' => null,
                // 'updated_at' => null,
                // 'deleted_at' => null
            ]);

            DataOrangtuaSiswaModel::create([
                'siswa_id' => $id,
                'nama_ayah' => $data['nama_ayah'],
                'nama_ibu' => $data['nama_ibu'],
                'nama_wali' => $data['nama_wali'],
                'pekerjaan_ayah' => $data['pekerjaan_ayah'],
                'pekerjaan_ibu' => $data['pekerjaan_ibu'],
                'pekerjaan_wali' => $data['pekerjaan_wali'],
            ]);

            DataPendidikanSiswaModel::create([
                'siswa_id' => $id,
                'asal_sekolah' => $data['asal_sekolah'],
                'diterima_di_kelas' => $data['diterima_dikelas'],
                'diterima_pada_tanggal' => $data['tanggal_diterima'],
            ]);

            DataBeasiswaSiswaModel::create([
                'siswa_id' => $id,
                'beasiswa_dari' => $data['beasiswa_dari1'],
                'kelas_menerima_beasiswa' => $data['beasiswa_kelas1'],
                'tahun_menerima_beasiswa' => $data['beasiswa_tahun1'],
            ]);


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
