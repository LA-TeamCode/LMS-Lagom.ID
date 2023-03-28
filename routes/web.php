<?php

use App\Http\Controllers\Auth\AuthenticationController;
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
Route::post('/login', [AuthenticationController::class, 'login'])->name('loginAction');

/**
 * Master Admin Routes
 */
Route::prefix('master')->group(function () {
    Route::get('/', function () {
        return view('Template.Main');
    });
});
