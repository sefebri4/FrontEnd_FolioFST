<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyek;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Proyek::with(['mahasiswa', 'dosen']);

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%")
                    ->orWhereHas('mahasiswa', function ($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    })
                    ->orWhereHas('dosen', function ($q) use ($search) {
                        $q->where('nama', 'like', "%{$search}%");
                    });
            });
        }

        // Handle sorting
        $sortColumns = ['judul', 'tanggal_mulai', 'tanggal_selesai', 'status'];
        $sort = $request->get('sort', 'tanggal_mulai');
        $direction = $request->get('direction', 'desc');

        // Validate sort column
        if (!in_array($sort, $sortColumns)) {
            $sort = 'tanggal_mulai';
        }

        // Validate direction
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        // Get total count before pagination for search results info
        $total = $query->count();

        // Paginate results
        $proyek = $query->paginate(10);

        return view('admin.proyek.index', compact('proyek', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('admin.proyek.create', compact('mahasiswa', 'dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'nullable|in:Berjalan,Selesai,Tertunda',
            'nim' => 'nullable|string|exists:mahasiswa,nim',
            'nidn' => 'nullable|string|exists:dosen,nidn',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/proyek', $filename);
            $data['foto'] = $filename;
        }

        Proyek::create($data);

        return redirect()->route('admin.proyek.index')
            ->with('success', 'Proyek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proyek = Proyek::with(['mahasiswa', 'dosen'])->findOrFail($id);
        return view('admin.proyek.show', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyek = Proyek::findOrFail($id);
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('admin.proyek.edit', compact('proyek', 'mahasiswa', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyek = Proyek::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date',
            'status' => 'nullable|in:Berjalan,Selesai,Tertunda',
            'nim' => 'nullable|string|exists:mahasiswa,nim',
            'nidn' => 'nullable|string|exists:dosen,nidn',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($proyek->foto) {
                Storage::delete('public/proyek/' . $proyek->foto);
            }

            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/proyek', $filename);
            $data['foto'] = $filename;
        }

        $proyek->update($data);

        return redirect()->route('admin.proyek.index')
            ->with('success', 'Proyek berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proyek = Proyek::findOrFail($id);

        // Hapus foto jika ada
        if ($proyek->foto) {
            Storage::delete('public/proyek/' . $proyek->foto);
        }

        $proyek->delete();

        return redirect()->route('admin.proyek.index')
            ->with('success', 'Proyek berhasil dihapus');
    }

    /**
     * Mendapatkan daftar proyek berdasarkan mahasiswa.
     */
    public function getByMahasiswa(string $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $proyek = Proyek::where('nim', $nim)->get();

        return response()->json([
            'status' => 'success',
            'mahasiswa' => $mahasiswa,
            'data' => $proyek
        ]);
    }

    /**
     * Mendapatkan daftar proyek berdasarkan dosen.
     */
    public function getByDosen(string $nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        $proyek = Proyek::where('nidn', $nidn)->get();

        return response()->json([
            'status' => 'success',
            'dosen' => $dosen,
            'data' => $proyek
        ]);
    }

    /**
     * Mendapatkan daftar proyek berdasarkan status.
     */
    public function getByStatus(string $status)
    {
        $proyek = Proyek::where('status', $status)
            ->with(['mahasiswa', 'dosen'])
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $proyek
        ]);
    }
}
