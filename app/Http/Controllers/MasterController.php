<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\KomliModel;
use App\Models\MapelModel;
use App\Models\StudentsModel;
use App\Models\TeachersModel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * API for students
     */
    public function api_students()
    {
        $data = StudentsModel::all();
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
     * View students
     */
    public function students()
    {
        $data = [
            'students' => StudentsModel::all(),
            'komli' =>  KomliModel::all()
        ];
        return view('Master.students', $data);
    }

    /**
     * View data teachers
     */
    public function teachers()
    {
        $data = [
            'teachers' => TeachersModel::orderBy('name', 'ASC')->get()
        ];
        return view('Master.teachers', $data);
    }
    /** 
     * View Teacher
     */
    public function viewTeacher($id_teacher)
    {
        $data = TeachersModel::find($id_teacher);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'teacher' => TeachersModel::find($id_teacher)
        ];
        return view('Master.viewTeacher', $data);
    }
    /**
     * Update data teacher
     */
    public function updateTeacher(Request $request)
    {
        $data = TeachersModel::find($request->id_teacher);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->name = $request->name;
        $data->nip = $request->nip;
        $data->nuptk = $request->nuptk;
        $data->tanggal_lahir = $request->ttl;
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
     * Delete Teacher
     */
    public function deleteTeacher($id_teacher)
    {
        $data = TeachersModel::find($id_teacher);

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
     * Add teacher
     */
    public function addTeacher(Request $request)
    {
        $data = [
            'name' => $request->name,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'tanggal_lahir' => $request->ttl,
            'jabatan' => $request->jabatan,
            'status_guru' => $request->status,
        ];

        if (TeachersModel::create($data)) {
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
     * View Courses
     */
    public function courses()
    {
        $data = [
            'courses' => MapelModel::orderBy('kelompok', 'ASC')->get()
        ];
        return view('Master.courses', $data);
    }
    /**
     * Add courses
     */
    public function addCourse(Request $request)
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
     * Delete courses
     */
    public function deleteCourse($id_course)
    {
        $data = MapelModel::find($id_course);

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
     * Update courses
     */
    public function updateCourse(Request $request)
    {
        $data = MapelModel::find($request->id_course);

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
     * View Classes
     */
    public function classes()
    {
        $data = [
            'classes' => KomliModel::rightJoin('jurusan', 'jurusan.id_jurusan', '=', 'komli.id_jurusan')
                ->orderBy('komli.nama_komli', 'ASC')
                ->get(),
            'majors' => JurusanModel::all()
        ];
        return view('Master.classes', $data);
    }
    /**
     * Add classes
     */
    public function addClass(Request $request)
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
     * Delete classes
     */
    public function deleteClass($id_class)
    {
        $data = KomliModel::find($id_class);

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
     * Update classes
     */
    public function updateClass(Request $request)
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
}
