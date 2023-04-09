<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\KomliModel;
use App\Models\MapelModel;
use App\Models\SemesterModel;
use App\Models\SiswaModel;
use App\Models\StaffGuruModel;
use App\Models\TahunAjaranModel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * API for students
     */
    public function api_students()
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
     * View students
     */
    public function students()
    {
        $data = [
            'students' => SiswaModel::all(),
            'classes' =>  KomliModel::all()
        ];
        return view('Master.students', $data);
    }

    /**
     * View data teachers
     */
    public function teachers()
    {
        $data = [
            'teachers' => StaffGuruModel::orderBy('nama', 'ASC')->get()
        ];
        return view('Master.teachers', $data);
    }
    /** 
     * View Teacher
     */
    public function viewTeacher($id_teacher)
    {
        $data = StaffGuruModel::find($id_teacher);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'teacher' => StaffGuruModel::find($id_teacher)
        ];
        return view('Master.viewTeacher', $data);
    }
    /**
     * Update data teacher
     */
    public function updateTeacher(Request $request)
    {
        $data = StaffGuruModel::find($request->id_teacher);

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
     * Delete Teacher
     */
    public function deleteTeacher($id_teacher)
    {
        $data = StaffGuruModel::find($id_teacher);

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
            'mata_pelajaran' => $request->mapel,
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

        $data->mata_pelajaran = $request->mapel;
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
            'jurusan_id' => $request->jurusan,
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
        $data->jurusan_id = $request->jurusan;
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
     * View Major
     */
    public function majors()
    {
        $data = [
            'majors' => JurusanModel::all()
        ];
        return view('Master.majors', $data);
    }
    /**
     * Add major
     */
    public function addMajor(Request $request)
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
     * Delete major
     */
    public function deleteMajor($id_major)
    {
        $data = JurusanModel::find($id_major);

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
     * Update major
     */
    public function updateMajor(Request $request)
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
    /**
     * Academic Year
     */
    public function academicYear()
    {
        $data = [
            'academicYears' => TahunAjaranModel::all()
        ];
        return view('Master.academicYear', $data);
    }
    /**
     * Add academic year
     */
    public function addAcademicYear(Request $request)
    {
        $data = [
            'tahun_ajaran' => $request->tahun_ajaran,
            'keterangan' => $request->keterangan,
        ];

        if (TahunAjaranModel::create($data)) {
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
     * Delete academic year
     */
    public function deleteAcademicYear($id_academic_year)
    {
        $data = TahunAjaranModel::find($id_academic_year);

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
     * Update academic year
     */
    public function updateAcademicYear(Request $request)
    {
        $data = TahunAjaranModel::find($request->id);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->tahun_ajaran = $request->tahun_ajaran;

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
     * View Semester
     */
    public function semester()
    {
        $data = [
            'semesters' => SemesterModel::orderBy('semester', 'ASC')->get(),
        ];
        return view('Master.semester', $data);
    }
    /**
     * Add semester
     */
    public function addSemester(Request $request)
    {
        $data = [
            'semester' => $request->semester,
            'keterangan' => $request->keterangan,
        ];

        if (SemesterModel::create($data)) {
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
     * Delete semester
     */
    public function deleteSemester($id_semester)
    {
        $data = SemesterModel::find($id_semester);

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
     * Update semester
     */
    public function updateSemester(Request $request)
    {
        $data = SemesterModel::find($request->id);

        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->semester = $request->semester;

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
