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
    Route::get('/master', [MasterController::class, 'index'])->name('master');
});
