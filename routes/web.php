<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\MasterController;
use App\Http\Middleware\MasterMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('Template.Main');
// });

Route::get('/install', function () {
    return view('Installer.index');
});

/**
 * Auth Routes
 */
Route::get('/', [AuthenticationController::class, 'login'])->name('login');
Route::post('/login', [AuthenticationController::class, 'loginAction'])->name('loginAction');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
/**
 * Master Admin Routes
 */
Route::middleware([MasterMiddleware::class])->group(function () {
    Route::prefix('/master')->group(function () {

        Route::get('/', [MasterController::class, 'index'])->name('master');

        Route::get('/api/students', [MasterController::class, 'api_students'])->name('master.students.api.data');
        Route::get('/students', [MasterController::class, 'students'])->name('master.students.data');

        Route::get('/teachers', [MasterController::class, 'teachers'])->name('master.teachers.data');
        Route::post('/teachers', [MasterController::class, 'addTeacher'])->name('master.teacher.add.data');
        Route::get('/teachers/{id_teacher}', [MasterController::class, 'viewTeacher'])->name('master.teachers.view.data');
        Route::get('/teachers/edit/{id_teacher}', [MasterController::class, 'editTeacher'])->name('master.teachers.edit.data');
        Route::post('/teachers/edit/{id_teacher}', [MasterController::class, 'updateTeacher'])->name('master.teachers.update.data');
        Route::get('/teachers/delete/{id_teacher}', [MasterController::class, 'deleteTeacher'])->name('master.teachers.delete.data');

        Route::get('/courses', [MasterController::class, 'courses'])->name('master.courses.data');
        Route::post('/courses', [MasterController::class, 'addCourse'])->name('master.courses.add.data');
        Route::post('/courses/edit', [MasterController::class, 'updateCourse'])->name('master.courses.update.data');
        Route::get('/courses/delete/{id_course}', [MasterController::class, 'deleteCourse'])->name('master.courses.delete.data');

        Route::get('/classes', [MasterController::class, 'classes'])->name('master.classes.data');
        Route::post('/classes', [MasterController::class, 'addClass'])->name('master.classes.add.data');
        Route::post('/classes/edit', [MasterController::class, 'updateClass'])->name('master.classes.update.data');
        Route::get('/classes/delete/{id_class}', [MasterController::class, 'deleteClass'])->name('master.classes.delete.data');

        Route::get('/majors', [MasterController::class, 'majors'])->name('master.majors.data');
        Route::post('/majors', [MasterController::class, 'addMajor'])->name('master.majors.add.data');
        Route::post('/majors/edit', [MasterController::class, 'updateMajor'])->name('master.majors.update.data');
        Route::get('/majors/delete/{id_major}', [MasterController::class, 'deleteMajor'])->name('master.majors.delete.data');

        Route::get('/academic-year', [MasterController::class, 'academicYear'])->name('master.academicYear.data');
        Route::post('/academic-year', [MasterController::class, 'addAcademicYear'])->name('master.academicYear.add.data');
        Route::post('/academic-year/edit', [MasterController::class, 'updateAcademicYear'])->name('master.academicYear.update.data');
        Route::get('/academic-year/delete/{id_academic_year}', [MasterController::class, 'deleteAcademicYear'])->name('master.academicYear.delete.data');

        // semester
        Route::get('/semester', [MasterController::class, 'semester'])->name('master.semester.data');
        Route::post('/semester', [MasterController::class, 'addSemester'])->name('master.semester.add.data');
        Route::post('/semester/edit', [MasterController::class, 'updateSemester'])->name('master.semester.update.data');
        Route::get('/semester/delete/{id_semester}', [MasterController::class, 'deleteSemester'])->name('master.semester.delete.data');

        //skills
        Route::get('/skills', [MasterController::class, 'skills'])->name('master.skills.data');
        Route::post('/skills', [MasterController::class, 'addSkill'])->name('master.skills.add.data');
        Route::post('/skills/edit', [MasterController::class, 'updateSkill'])->name('master.skills.update.data');
        Route::get('/skills/delete/{id_skill}', [MasterController::class, 'deleteSkill'])->name('master.skills.delete.data');
    });
});
