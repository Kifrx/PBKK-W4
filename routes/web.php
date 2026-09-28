<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;




Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/beranda', [PageController::class, 'index'])->name('beranda');
Route::get('/profil-mahasiswa', [PageController::class, 'profilMahasiswa'])->name('profil.mahasiswa');
Route::get('/ide-agent', [PageController::class, 'ideAgent'])->name('ide.agent');

Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
    ->where('nrp', '^[0-9]{10}$')
    ->name('mahasiswa.detail');

Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent');


Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])->name('hitung.ipk');

Route::prefix('dashboard')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('dashboard.index');
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->where('nrp', '^[0-9]{10}$')
        ->name('dashboard.mahasiswa');
    Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
        ->name('dashboard.hitung.ipk');
    Route::get('/agent/{tema?}', [PageController::class, 'agent'])
        ->name('dashboard.agent');
});

Route::fallback([PageController::class, 'fallback'])->name('fallback');
