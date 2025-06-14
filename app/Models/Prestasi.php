<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasi';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
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
        $sortColumns = ['judul', 'tanggal'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('tanggal', 'desc');
    }

    // Accessor for foto URL
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('prestasi/' . $this->foto);
        }
        return null;
    }
}
