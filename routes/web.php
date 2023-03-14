<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\EcuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\UeController;
use App\Models\AnneeAcademique;
use App\Models\EtudiantResponsable;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return redirect()->route('login');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('admin')->group(function () {
// });
Route::resource('administrateurs', AdministrateurController::class)->only(['index', 'show']);
Route::resource('programmes', ProgrammeController::class)->only(['index', 'show']);
Route::resource('ues', UeController::class)->only(['index', 'show']);
Route::resource('ecus', EcuController::class)->only(['index', 'show']);
Route::resource('annee_academique', AnneeAcademique::class)->only(['index', 'show']);
Route::resource('etudiant_responsable', EtudiantResponsable::class)->only(['index', 'show']);

require __DIR__ . '/auth.php';
