<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $query = Dosen::with('programStudi');

        // Handle search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nidn', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('gelar', 'like', "%{$search}%")
                    ->orWhere('bidang_keahlian', 'like', "%{$search}%")
                    ->orWhere('telepon', 'like', "%{$search}%")
                    ->orWhere('alamat', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%");
            });
        }

        // Handle sorting
        $sortColumns = ['nama', 'nidn', 'email', 'gelar', 'bidang_keahlian', 'telepon', 'alamat', 'status'];
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
        $dosen = $query->paginate(10);

        return view('admin.dosen.index', compact('dosen', 'total'));
    }

    public function create()
    {
        $programStudi = ProgramStudi::all();
        return view('admin.dosen.create', compact('programStudi'));
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
            'program_studi_id' => 'required|exists:program_studi,id',
            'status' => 'required|in:dosen,kaprodi,dekan',
        ]);

        $data = $request->except('foto');
        $data['program_studi_id'] = $request->program_studi_id;
        $data['status'] = $request->status;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        Dosen::create($data);

        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $programStudi = ProgramStudi::all();
        return view('admin.dosen.edit', compact('dosen', 'programStudi'));
    }

    public function update(Request $request, string $id)
    {
        $dosen = Dosen::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|string|max:20|unique:dosen,nidn,' . $id,
            'email' => 'nullable|email|max:100',
            'gelar' => 'nullable|string|max:50',
            'bidang_keahlian' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'program_studi_id' => 'required|exists:program_studi,id',
            'status' => 'required|in:dosen,kaprodi,dekan',
        ]);

        $data = $request->except('foto');
        $data['program_studi_id'] = $request->program_studi_id;
        $data['status'] = $request->status;

        if ($request->hasFile('foto')) {
            if ($dosen->foto) {
                File::delete(public_path('dosen/' . $dosen->foto));
            }
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('dosen/'), $filename);
            $data['foto'] = $filename;
        }

        $dosen->update($data);

        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        if ($dosen->foto) {
            File::delete(public_path('dosen/' . $dosen->foto));
        }
        $dosen->delete();

        return redirect()->route('admin.dosen.index')
            ->with('success', 'Dosen berhasil dihapus');
    }
}
