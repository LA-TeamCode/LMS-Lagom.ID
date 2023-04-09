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

        Route::get('/api/siswa', [MasterController::class, 'api_siswa'])->name('master.siswa.api.data');
        Route::get('/siswa', [MasterController::class, 'siswa'])->name('master.siswa.data');

        Route::get('/guru', [MasterController::class, 'guru'])->name('master.guru.data');
        Route::post('/guru', [MasterController::class, 'addGuru'])->name('master.guru.add.data');
        Route::get('/guru/{id_guru}', [MasterController::class, 'viewGuru'])->name('master.guru.view.data');
        Route::get('/guru/edit/{id_guru}', [MasterController::class, 'editGuru'])->name('master.guru.edit.data');
        Route::post('/guru/edit/{id_guru}', [MasterController::class, 'updateGuru'])->name('master.guru.update.data');
        Route::get('/guru/delete/{id_guru}', [MasterController::class, 'deleteGuru'])->name('master.guru.delete.data');

        Route::get('/mapel', [MasterController::class, 'mapel'])->name('master.mapel.data');
        Route::post('/mapel', [MasterController::class, 'addMapel'])->name('master.mapel.add.data');
        Route::post('/mapel/edit', [MasterController::class, 'updateMapel'])->name('master.mapel.update.data');
        Route::get('/mapel/delete/{id_mapel}', [MasterController::class, 'deleteMapel'])->name('master.mapel.delete.data');

        Route::get('/kelas', [MasterController::class, 'kelas'])->name('master.kelas.data');
        Route::post('/kelas', [MasterController::class, 'addKelas'])->name('master.kelas.add.data');
        Route::post('/kelas/edit', [MasterController::class, 'updateKelas'])->name('master.kelas.update.data');
        Route::get('/kelas/delete/{id_kelas}', [MasterController::class, 'deleteKelas'])->name('master.kelas.delete.data');

        Route::get('/jurusan', [MasterController::class, 'jurusan'])->name('master.jurusan.data');
        Route::post('/jurusan', [MasterController::class, 'addJurusan'])->name('master.jurusan.add.data');
        Route::post('/jurusan/edit', [MasterController::class, 'updateJurusan'])->name('master.jurusan.update.data');
        Route::get('/jurusan/delete/{id_jurusan}', [MasterController::class, 'deleteJurusan'])->name('master.jurusan.delete.data');
    });
});
