<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\KomliModel;
use App\Models\MapelModel;
use App\Models\SiswaModel;
use App\Models\StaffGuruModel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * API for siswa
     */
    public function api_siswa()
    {
        $data = SiswaModel::all();
        return response()->json([
            'data' => $data
        ]);
    }
    /**
     * View dashboard
     */
    public function index()
    {
        return view('Master.index');
    }
    /**
     * View siswa
     */
    public function siswa()
    {
        $data = [
            'siswa' => SiswaModel::all(),
            'komli' =>  KomliModel::all()
        ];
        return view('Master.siswa', $data);
    }

    /**
     * View data guru
     */
    public function guru()
    {
        $data = [
            'guru' => StaffGuruModel::orderBy('nama', 'ASC')->get()
        ];
        return view('Master.guru', $data);
    }
    /** 
     * View Guru
     */
    public function viewGuru($id_guru)
    {
        $data = StaffGuruModel::find($id_guru);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'guru' => StaffGuruModel::find($id_guru)
        ];
        return view('Master.viewGuru', $data);
    }
    /**
     * Update data guru
     */
    public function updateGuru(Request $request)
    {
        $data = StaffGuruModel::find($request->id_guru);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->nama = $request->name;
        $data->nip = $request->nip;
        $data->nuptk = $request->nuptk;
        $data->ttl = $request->ttl;
        $data->jabatan = $request->jabatan;
        $data->status_guru = $request->status;

        if ($data->save()) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * Delete Guru
     */
    public function deleteGuru($id_guru)
    {
        $data = StaffGuruModel::find($id_guru);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        if ($data->delete()) {
            return redirect()->back()->with('success', 'Hapus data sukses');
        } else {
            return redirect()->back()->with('error', 'Hapus data gagal');
        }
    }
    /**
     * Add guru
     */
    public function addGuru(Request $request)
    {
        $data = [
            'nama' => $request->name,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'status_guru' => $request->status,
        ];

        if (StaffGuruModel::create($data)) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * View Mapel
     */
    public function mapel()
    {
        $data = [
            'mapel' => MapelModel::orderBy('kelompok', 'ASC')->get()
        ];
        return view('Master.mapel', $data);
    }
    /**
     * Add mapel
     */
    public function addMapel(Request $request)
    {
        $data = [
            'matapelajaran' => $request->mapel,
            'kelompok' => $request->kelompok,
        ];

        if (MapelModel::create($data)) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * Delete mapel
     */
    public function deleteMapel($id_mapel)
    {
        $data = MapelModel::find($id_mapel);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        if ($data->delete()) {
            return redirect()->back()->with('success', 'Hapus data sukses');
        } else {
            return redirect()->back()->with('error', 'Hapus data gagal');
        }
    }
    /**
     * Update mapel
     */
    public function updateMapel(Request $request)
    {
        $data = MapelModel::find($request->id_mapel);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->matapelajaran = $request->mapel;
        $data->kelompok = $request->kelompok;

        if ($data->save()) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * View Kelas
     */
    public function kelas()
    {
        $data = [
            'kelas' => KomliModel::rightJoin('jurusan', 'jurusan.id_jurusan', '=', 'komli.id_jurusan')
                ->orderBy('komli.nama_komli', 'ASC')
                ->get(),
            'jurusan' => JurusanModel::all()
        ];
        return view('Master.kelas', $data);
    }
    /**
     * Add kelas
     */
    public function addKelas(Request $request)
    {
        $data = [
            'nama_komli' => $request->nama_komli,
            'id_jurusan' => $request->jurusan,
            'keterangan' => $request->keterangan,
        ];

        if (KomliModel::create($data)) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * Delete kelas
     */
    public function deleteKelas($id_kelas)
    {
        $data = KomliModel::find($id_kelas);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        if ($data->delete()) {
            return redirect()->back()->with('success', 'Hapus data sukses');
        } else {
            return redirect()->back()->with('error', 'Hapus data gagal');
        }
    }
    /**
     * Update kelas
     */
    public function updateKelas(Request $request)
    {
        $data = KomliModel::find($request->id_komli);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->nama_komli = $request->nama_komli;
        $data->id_jurusan = $request->jurusan;
        $data->keterangan = $request->keterangan;

        if ($data->save()) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }

    /**
     * View Jurusan
     */
    public function jurusan()
    {
        $data = [
            'jurusan' => JurusanModel::all()
        ];
        return view('Master.jurusan', $data);
    }
    /**
     * Add jurusan
     */
    public function addJurusan(Request $request)
    {
        $data = [
            'nama_jurusan' => $request->nama_jurusan,
            'keterangan' => $request->keterangan,
        ];

        if (JurusanModel::create($data)) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
    /**
     * Delete jurusan
     */
    public function deleteJurusan($id_jurusan)
    {
        $data = JurusanModel::find($id_jurusan);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        if ($data->delete()) {
            return redirect()->back()->with('success', 'Hapus data sukses');
        } else {
            return redirect()->back()->with('error', 'Hapus data gagal');
        }
    }
    /**
     * Update jurusan
     */
    public function updateJurusan(Request $request)
    {
        $data = JurusanModel::find($request->id_jurusan);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->nama_jurusan = $request->nama_jurusan;
        $data->keterangan = $request->keterangan;

        if ($data->save()) {
            return response()->json([
                'massage' => "success"
            ], 200);
        } else {
            return response()->json([
                'massage' => "failed"
            ], 500);
        }
    }
}
