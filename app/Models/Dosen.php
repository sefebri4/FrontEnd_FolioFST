<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'nama',
        'nidn',
        'email',
        'foto',
        'gelar',
        'bidang_keahlian',
        'telepon',
        'alamat',
        'program_studi_id',
        'status',
    ];

    public $timestamps = true;

    public function proyek(): HasMany
    {
        return $this->hasMany(Proyek::class, 'nidn', 'nidn');
    }

    public function prestasi(): HasMany
    {
        return $this->hasMany(Prestasi::class, 'nidn', 'nidn');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    // Scope for search
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
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

    // Scope for sorting
    public function scopeSort($query, $sort, $direction = 'asc')
    {
        $sortColumns = ['nama', 'nidn', 'email', 'gelar', 'bidang_keahlian', 'telepon', 'alamat', 'status'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('nama', 'asc');
    }
}
