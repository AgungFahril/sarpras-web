<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfografisController extends Controller
{
    private array $kategori = [
        'Jalan & Jembatan', 'Lingkungan Hidup', 'Kehutanan',
        'ESDM', 'Sumber Daya Air', 'Transportasi', 'Umum',
    ];

    public function index()
    {
        $items    = Infografis::orderBy('urutan')->latest()->get();
        $kategori = $this->kategori;

        return view('infografis', compact('items', 'kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori'  => 'required|string',
            'tahun'     => 'nullable|digits:4',
            'urutan'    => 'nullable|integer|min:0',
            'gambar' => 'required|image|max:5120',
        ]);

        $data['gambar']       = $request->file('gambar')->store('infografis', 'public');
        $data['urutan']       = $data['urutan'] ?? 0;
        $data['is_published'] = $request->boolean('is_published');

        Infografis::create($data);

        return redirect()->route('infografis')->with('success', 'Infografis berhasil ditambahkan.');
    }

    public function update(Request $request, Infografis $infografis)
    {
        $data = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori'  => 'required|string',
            'tahun'     => 'nullable|digits:4',
            'urutan'    => 'nullable|integer|min:0',
            'gambar'    => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($infografis->gambar);
            $data['gambar'] = $request->file('gambar')->store('infografis', 'public');
        }

        $data['urutan']       = $data['urutan'] ?? 0;
        $data['is_published'] = $request->boolean('is_published');

        $infografis->update($data);

        return redirect()->route('infografis')->with('success', 'Infografis berhasil diperbarui.');
    }

    public function destroy(Infografis $infografis)
    {
        Storage::disk('public')->delete($infografis->gambar);
        $infografis->delete();

        return redirect()->route('infografis')->with('success', 'Infografis berhasil dihapus.');
    }
}