<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilDekanController extends Controller
{
    public function edit()
    {
        $dekan = Dosen::where('status', 'dekan')->first();
        return view('admin.profildekan.edit', compact('dekan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|max:20|unique:dosen,nidn',
            'email' => 'nullable|email|max:100',
            'gelar' => 'nullable|string|max:50',
            'bidang_keahlian' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (Dosen::where('status', 'dekan')->exists()) {
            return redirect()->back()->withErrors(['status' => 'Hanya boleh ada satu dekan.']);
        }

        $data = $request->except('foto');
        $data['status'] = 'dekan';

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        Dosen::create($data);

        return redirect()->route('admin.profildekan.edit')->with('success', 'Dekan berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        $dekan = Dosen::where('status', 'dekan')->first();
        if (!$dekan) {
            return redirect()->back()->with('error', 'Dekan tidak ditemukan.');
        }

        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|max:20|unique:dosen,nidn,' . $dekan->id,
            'email' => 'nullable|email|max:100',
            'gelar' => 'nullable|string|max:50',
            'bidang_keahlian' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');
        $data['status'] = 'dekan';

        if ($request->hasFile('foto')) {
            if ($dekan->foto) {
                File::delete(public_path('dosen/' . $dekan->foto));
            }
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        $dekan->update($data);

        return redirect()->route('admin.profildekan.edit')->with('success', 'Dekan berhasil diperbarui');
    }
}
