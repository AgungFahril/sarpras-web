<?php

namespace App\Http\Controllers;

use App\Models\ProfilSarpras;
use App\Models\FungsiUtama;
use App\Models\RuangLingkup;
use Illuminate\Http\Request;

class TentangSarprasController extends Controller
{
    /**
     * Halaman publik / dashboard: tampilkan konten.
     */
    public function index()
    {
        $profil        = ProfilSarpras::first();
        $fungsiUtama   = FungsiUtama::orderBy('urutan')->get();
        $ruangLingkup  = RuangLingkup::orderBy('urutan')->get();

        return view('tentang-sarpras', compact('profil', 'fungsiUtama', 'ruangLingkup'));
    }

    /**
     * Halaman kelola (admin): form edit + CRUD.
     */
    public function kelola()
    {
        $profil        = ProfilSarpras::first();
        $fungsiUtama   = FungsiUtama::orderBy('urutan')->get();
        $ruangLingkup  = RuangLingkup::orderBy('urutan')->get();

        return view('tentang-sarpras-kelola', compact('profil', 'fungsiUtama', 'ruangLingkup'));
    }

    /**
     * Update Profil Singkat & Tujuan (data tunggal).
     */
    public function updateProfil(Request $request)
    {
        $data = $request->validate([
            'profil_singkat' => ['required', 'string'],
            'tujuan'         => ['required', 'string'],
        ]);

        $profil = ProfilSarpras::first();

        if ($profil) {
            $profil->update($data);
        } else {
            ProfilSarpras::create($data);
        }

        return back()->with('success', 'Profil & Tujuan berhasil diperbarui.');
    }

    /* =====================================================
       CRUD FUNGSI UTAMA (Tugas Pokok & Fungsi)
    ====================================================== */

    public function storeFungsi(Request $request)
    {
        $data = $request->validate([
            'icon'      => ['required', 'string', 'max:10'],
            'judul'     => ['required', 'string', 'max:100'],
            'deskripsi' => ['required', 'string'],
            'warna'     => ['required', 'in:blue,green,orange,purple'],
            'urutan'    => ['nullable', 'integer'],
        ]);

        $data['urutan'] = $data['urutan'] ?? (FungsiUtama::max('urutan') + 1);

        FungsiUtama::create($data);

        return back()->with('success', 'Fungsi utama berhasil ditambahkan.');
    }

    public function updateFungsi(Request $request, FungsiUtama $fungsi)
    {
        $data = $request->validate([
            'icon'      => ['required', 'string', 'max:10'],
            'judul'     => ['required', 'string', 'max:100'],
            'deskripsi' => ['required', 'string'],
            'warna'     => ['required', 'in:blue,green,orange,purple'],
            'urutan'    => ['nullable', 'integer'],
        ]);

        $fungsi->update($data);

        return back()->with('success', 'Fungsi utama berhasil diperbarui.');
    }

    public function destroyFungsi(FungsiUtama $fungsi)
    {
        $fungsi->delete();

        return back()->with('success', 'Fungsi utama berhasil dihapus.');
    }

    /* =====================================================
       CRUD RUANG LINGKUP
    ====================================================== */

    public function storeRuang(Request $request)
    {
        $data = $request->validate([
            'icon'   => ['required', 'string', 'max:10'],
            'label'  => ['required', 'string', 'max:100'],
            'urutan' => ['nullable', 'integer'],
        ]);

        $data['urutan'] = $data['urutan'] ?? (RuangLingkup::max('urutan') + 1);

        RuangLingkup::create($data);

        return back()->with('success', 'Ruang lingkup berhasil ditambahkan.');
    }

    public function updateRuang(Request $request, RuangLingkup $ruang)
    {
        $data = $request->validate([
            'icon'   => ['required', 'string', 'max:10'],
            'label'  => ['required', 'string', 'max:100'],
            'urutan' => ['nullable', 'integer'],
        ]);

        $ruang->update($data);

        return back()->with('success', 'Ruang lingkup berhasil diperbarui.');
    }

    public function destroyRuang(RuangLingkup $ruang)
    {
        $ruang->delete();

        return back()->with('success', 'Ruang lingkup berhasil dihapus.');
    }
}
