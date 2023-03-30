<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
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
        return view('Master.students');
    }

    /**
     * View teachers
     */
    public function teachers()
    {
        return view('Master.teachers');
    }
}
