<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programStudi = ProgramStudi::all();
        return view('admin.program_studi.index', compact('programStudi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.program_studi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->only(['nama', 'deskripsi']);

        $programStudi = ProgramStudi::create($data);

        return redirect()->route('admin.program_studi.index')
            ->with('success', 'Program Studi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        return view('admin.program_studi.show', compact('programStudi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        return view('admin.program_studi.edit', compact('programStudi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->only(['nama', 'deskripsi']);

        $programStudi->update($data);

        return redirect()->route('admin.program_studi.index')
            ->with('success', 'Program Studi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);

        $programStudi->delete();

        return redirect()->route('admin.program_studi.index')
            ->with('success', 'Program Studi berhasil dihapus');
    }
}
