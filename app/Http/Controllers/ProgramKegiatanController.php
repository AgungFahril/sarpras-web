<?php

namespace App\Http\Controllers;

use App\Models\ProgramKegiatan;
use Illuminate\Http\Request;

class ProgramKegiatanController extends Controller
{
    protected array $bidangList = [
        'Jalan & Jembatan', 'Lingkungan Hidup', 'Kehutanan',
        'ESDM', 'Sumber Daya Air', 'Transportasi', 'Prasarana Lainnya',
    ];

    protected array $statusList = ['Perencanaan', 'Berjalan', 'Selesai'];

    public function index()
    {
        $programList = ProgramKegiatan::orderByDesc('created_at')->get();
        $bidangList  = $this->bidangList;
        $statusList  = $this->statusList;

        return view('program-kegiatan', compact('programList', 'bidangList', 'statusList'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_program' => ['required', 'string', 'max:150'],
            'bidang'       => ['required', 'string', 'max:50'],
            'wilayah'      => ['required', 'string', 'max:50'],
            'status'       => ['required', 'in:Perencanaan,Berjalan,Selesai'],
            'progres'      => ['required', 'integer', 'min:0', 'max:100'],
            'keterangan'   => ['nullable', 'string'],
        ]);

        ProgramKegiatan::create($data);

        return back()->with('success', 'Program berhasil ditambahkan.');
    }

    public function update(Request $request, ProgramKegiatan $program)
    {
        $data = $request->validate([
            'nama_program' => ['required', 'string', 'max:150'],
            'bidang'       => ['required', 'string', 'max:50'],
            'wilayah'      => ['required', 'string', 'max:50'],
            'status'       => ['required', 'in:Perencanaan,Berjalan,Selesai'],
            'progres'      => ['required', 'integer', 'min:0', 'max:100'],
            'keterangan'   => ['nullable', 'string'],
        ]);

        $program->update($data);

        return back()->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(ProgramKegiatan $program)
    {
        $program->delete();

        return back()->with('success', 'Program berhasil dihapus.');
    }
}
