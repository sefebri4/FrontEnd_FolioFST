<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'proyek';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'foto',
        'nim', // Foreign key ke mahasiswa
        'nidn', // Foreign key ke dosen
    ];

    public $timestamps = true;

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn');
    }

    // Scope for search (including related mahasiswa and dosen)
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
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

    // Scope for sorting
    public function scopeSort($query, $sort, $direction = 'asc')
    {
        $sortColumns = ['judul', 'tanggal_mulai', 'tanggal_selesai', 'status'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('tanggal_mulai', 'desc');
    }

    // Accessor for foto URL
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/proyek/' . $this->foto);
        }
        return null;
    }

    // Accessor for status badge class
    public function getStatusBadgeClassAttribute()
    {
        switch ($this->status) {
            case 'Berjalan':
                return 'status-berjalan';
            case 'Selesai':
                return 'status-selesai';
            case 'Tertunda':
                return 'status-tertunda';
            default:
                return 'bg-secondary';
        }
    }
}
