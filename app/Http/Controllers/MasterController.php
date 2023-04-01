<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
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
            'students' => StudentsModel::all()
        ];
        return view('Master.students', $data);
    }

    /**
     * View teachers
     */
    public function teachers()
    {
        return view('Master.teachers');
    }
}
