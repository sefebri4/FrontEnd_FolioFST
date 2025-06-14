<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Mahasiswa::with('programStudi');

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nim', 'like', "%{$search}%")
                    ->orWhere('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('angkatan', 'like', "%{$search}%")
                    ->orWhere('telepon', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%");
            });
        }

        // Handle sorting
        $sortColumns = ['nim', 'nama', 'email', 'angkatan', 'telepon', 'alamat'];
        $sort = $request->get('sort', 'nama');
        $direction = $request->get('direction', 'asc');

        // Validate sort column
        if (!in_array($sort, $sortColumns)) {
            $sort = 'nama';
        }

        // Validate direction
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'asc';
        }

        $query->orderBy($sort, $direction);

        // Get total count before pagination for search results info
        $total = $query->count();

        // Paginate results
        $mahasiswa = $query->paginate(10);

        return view('admin.mahasiswa.index', compact('mahasiswa', 'total'));
    }

    public function create()
    {
        $programStudi = ProgramStudi::all();
        return view('admin.mahasiswa.create', compact('programStudi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'angkatan' => 'nullable|numeric|digits:4',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'program_studi_id' => 'required|exists:program_studi,id',
        ]);

        $data = $request->except('foto');
        $data['program_studi_id'] = $request->program_studi_id;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('mahasiswa/'), $filename);
            $data['foto'] = $filename;
        }

        Mahasiswa::create($data);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $programStudi = ProgramStudi::all();
        return view('admin.mahasiswa.edit', compact('mahasiswa', 'programStudi'));
    }

    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'angkatan' => 'nullable|numeric|digits:4',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'program_studi_id' => 'required|exists:program_studi,id',
        ]);

        $data = $request->except('foto');
        $data['program_studi_id'] = $request->program_studi_id;

        if ($request->hasFile('foto')) {
            if ($mahasiswa->foto) {
                Storage::delete('mahasiswa/' . $mahasiswa->foto);
            }
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('mahasiswa/'), $filename);
            $data['foto'] = $filename;
        }

        $mahasiswa->update($data);

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        if ($mahasiswa->foto) {
            Storage::delete('mahasiswa/' . $mahasiswa->foto);
        }
        $mahasiswa->delete();

        return redirect()->route('admin.mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil dihapus');
    }
}
