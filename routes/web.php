<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {

    $totalBuku = Buku::count();

    $totalAnggota = Anggota::count();

    $totalPeminjaman = Peminjaman::count();

    $sedangDipinjam = Peminjaman::where('status', 'Dipinjam')->count();

    $peminjamanTerbaru = Peminjaman::with(['buku', 'anggota'])
        ->latest()
        ->take(5)
        ->get();

    return view('dashboard', compact(
        'totalBuku',
        'totalAnggota',
        'totalPeminjaman',
        'sedangDipinjam',
        'peminjamanTerbaru'
    ));

})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::resource('buku', BukuController::class);

    Route::resource('anggota', AnggotaController::class)
        ->parameters(['anggota' => 'anggota']);

    Route::resource('peminjaman', PeminjamanController::class);
});


require __DIR__.'/auth.php';