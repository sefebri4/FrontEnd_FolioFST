<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilKaprodiController extends Controller
{
    public function edit($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        $kaprodi = Dosen::where('status', 'kaprodi')
            ->where('program_studi_id', $id)
            ->first();

        return view('admin.profilkaprodi.edit', compact('kaprodi', 'programStudi'));
    }

    public function store(Request $request, $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);

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

        // Periksa apakah sudah ada kaprodi untuk program studi ini
        if (
            Dosen::where('status', 'kaprodi')
                ->where('program_studi_id', $id)
                ->exists()
        ) {
            return redirect()->back()->withErrors(['status' => 'Hanya boleh ada satu Kaprodi untuk program studi ini.']);
        }

        $data = $request->except('foto');
        $data['status'] = 'kaprodi';
        $data['program_studi_id'] = $id;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = 'kaprodi_' . $id . '_' . time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        Dosen::create($data);

        return redirect()->route('admin.profilkaprodi.edit', $id)->with('success', 'Kaprodi berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        $kaprodi = Dosen::where('status', 'kaprodi')
            ->where('program_studi_id', $id)
            ->first();

        if (!$kaprodi) {
            return redirect()->back()->with('error', 'Kaprodi tidak ditemukan.');
        }

        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|max:20|unique:dosen,nidn,' . $kaprodi->id,
            'email' => 'nullable|email|max:100',
            'gelar' => 'nullable|string|max:50',
            'bidang_keahlian' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');
        $data['status'] = 'kaprodi';
        $data['program_studi_id'] = $id;

        if ($request->hasFile('foto')) {
            if ($kaprodi->foto) {
                File::delete(public_path('dosen/' . $kaprodi->foto));
            }
            $foto = $request->file('foto');
            $filename = 'kaprodi_' . $id . '_' . time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        $kaprodi->update($data);

        return redirect()->route('admin.profilkaprodi.edit', $id)->with('success', 'Kaprodi berhasil diperbarui');
    }
}
