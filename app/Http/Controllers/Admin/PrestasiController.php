<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Prestasi::with(['mahasiswa', 'dosen']);

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%")
                    ->orWhereHas('mahasiswa', function ($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    })
                    ->orWhereHas('dosen', function ($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    });
            });
        }

        // Handle sorting
        $sortColumns = ['judul', 'tanggal'];
        $sort = $request->get('sort', 'tanggal');
        $direction = $request->get('direction', 'desc');

        // Validate sort column
        if (!in_array($sort, $sortColumns)) {
            $sort = 'tanggal';
        }

        // Validate direction
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        // Get total count before pagination for search results info
        $total = $query->count();

        // Paginate results
        $prestasi = $query->paginate(10);

        return view('admin.prestasi.index', compact('prestasi', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('admin.prestasi.create', compact('mahasiswa', 'dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'nim' => 'nullable|string|exists:mahasiswa,nim',
            'nidn' => 'nullable|string|exists:dosen,nidn',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('prestasi/'), $filename);
            $data['foto'] = $filename;
        }

        $prestasi = Prestasi::create($data);

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prestasi = Prestasi::with(['mahasiswa', 'dosen'])->findOrFail($id);
        return view('admin.prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('admin.prestasi.edit', compact('prestasi', 'mahasiswa', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'nullable|date',
            'nim' => 'nullable|string|exists:mahasiswa,nim',
            'nidn' => 'nullable|string|exists:dosen,nidn',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($prestasi->foto) {
                Storage::delete('prestasi/' . $prestasi->foto);
            }

            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('prestasi/'), $filename);
            $data['foto'] = $filename;
        }

        $prestasi->update($data);

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        // Hapus foto jika ada
        if ($prestasi->foto) {
            Storage::delete('prestasi/' . $prestasi->foto);
        }

        $prestasi->delete();

        return redirect()->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil dihapus');
    }

    /**
     * Mendapatkan daftar prestasi berdasarkan mahasiswa.
     */
    public function getByMahasiswa(string $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $prestasi = Prestasi::where('nim', $nim)->get();

        return response()->json([
            'status' => 'success',
            'mahasiswa' => $mahasiswa,
            'data' => $prestasi
        ]);
    }

    /**
     * Mendapatkan daftar prestasi berdasarkan dosen.
     */
    public function getByDosen(string $nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        $prestasi = Prestasi::where('nidn', $nidn)->get();

        return response()->json([
            'status' => 'success',
            'dosen' => $dosen,
            'data' => $prestasi
        ]);
    }
}
