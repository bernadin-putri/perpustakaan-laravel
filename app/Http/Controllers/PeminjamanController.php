<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['buku', 'anggota'])
            ->latest()
            ->get();

        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $buku = Buku::all();
        $anggota = Anggota::all();

        return view('peminjaman.create', compact('buku', 'anggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required',
            'anggota_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil ditambahkan');
    }

    public function edit(Peminjaman $peminjaman)
    {
        $buku = Buku::all();
        $anggota = Anggota::all();

        return view('peminjaman.edit', compact(
            'peminjaman',
            'buku',
            'anggota'
        ));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'buku_id' => 'required',
            'anggota_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil diperbarui');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')
            ->with('success', 'Data peminjaman berhasil dihapus');
    }
}