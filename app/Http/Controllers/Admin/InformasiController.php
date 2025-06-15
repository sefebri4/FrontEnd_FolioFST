<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Informasi::query();

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('isi', 'like', "%{$search}%");
            });
        }

        // Handle sorting
        $sortColumns = ['judul', 'tanggal_posting'];
        $sort = $request->get('sort', 'tanggal_posting');
        $direction = $request->get('direction', 'desc');

        // Validate sort column
        if (!in_array($sort, $sortColumns)) {
            $sort = 'tanggal_posting';
        }

        // Validate direction
        if (!in_array($direction, ['asc', 'desc'])) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);

        // Get total count before pagination for search results info
        $total = $query->count();

        // Paginate results
        $informasi = $query->paginate(10);

        return view('admin.informasi.index', compact('informasi', 'total'));
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'nullable|string',
            'tanggal_posting' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('informasi/'), $filename);
            $data['gambar'] = $filename;
        }

        $informasi = Informasi::create($data);

        return redirect()->route('admin.informasi.index')
            ->with('success', 'informasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('admin.informasi.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('admin.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $informasi = Informasi::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'nullable|string',
            'tanggal_posting' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($informasi->gambar) {
                Storage::delete('informasi/' . $informasi->gambar);
            }

            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('informasi/'), $filename);
            $data['gambar'] = $filename;
        }

        $informasi->update($data);

        return redirect()->route('admin.informasi.index')
            ->with('success', 'informasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $informasi = Informasi::findOrFail($id);

        // Hapus gambar jika ada
        if ($informasi->gambar) {
            Storage::delete('informasi/' . $informasi->gambar);
        }

        $informasi->delete();

        return redirect()->route('admin.informasi.index')
            ->with('success', 'informasi berhasil dihapus');
    }
}
