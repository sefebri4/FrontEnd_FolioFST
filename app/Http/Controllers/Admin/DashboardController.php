<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Prestasi;
use App\Models\Galeri;
use App\Models\Proyek;
use App\Models\ProgramStudi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total counts
        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();
        $totalBerita = Berita::count() + Informasi::count();
        $totalPrestasi = Prestasi::count();

        // Get active dosen - adjust based on your status values
        $activeDosen = Dosen::where('status', 'aktif')->count();

        // Get new mahasiswa in current month
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $newMahasiswaCount = Mahasiswa::whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->count();

        // Get recent news (last 7 days)
        $recentNewsCount = Berita::where('tanggal_posting', '>=', Carbon::now()->subDays(7))->count()
            + Informasi::where('tanggal_posting', '>=', Carbon::now()->subDays(7))->count();

        // Get prestasi count for current year
        $recentPrestasiCount = Prestasi::whereYear('tanggal', $currentYear)->count();

        // Get recent berita (5 latest)
        $recentBerita = Berita::orderBy('tanggal_posting', 'desc')->take(5)->get();

        // Get active projects
        $activeProyek = Proyek::where('status', 'Berjalan')
            ->orderBy('tanggal_selesai', 'asc')
            ->take(5)
            ->get();

        // Get recent prestasi (3 latest) with relationships
        $recentPrestasi = Prestasi::with(['mahasiswa', 'dosen'])
            ->orderBy('tanggal', 'desc')
            ->take(3)
            ->get();

        // Get program studi statistics with mahasiswa count
        $programStudiStats = ProgramStudi::select('program_studi.id', 'program_studi.nama')
            ->selectRaw('COUNT(mahasiswa.id) as jumlah_mahasiswa')
            ->leftJoin('mahasiswa', 'program_studi.id', '=', 'mahasiswa.program_studi_id')
            ->groupBy('program_studi.id', 'program_studi.nama')
            ->get();

        // Pass all data to the view
        return view('admin.dashboard', compact(
            'totalMahasiswa',
            'totalDosen',
            'totalBerita',
            'totalPrestasi',
            'activeDosen',
            'newMahasiswaCount',
            'recentNewsCount',
            'recentPrestasiCount',
            'recentBerita',
            'activeProyek',
            'recentPrestasi',
            'programStudiStats'
        ));
    }

    public function refresh()
    {
        return redirect()->route('admin.dashboard')->with('success', 'Data dashboard berhasil diperbarui');
    }
}
