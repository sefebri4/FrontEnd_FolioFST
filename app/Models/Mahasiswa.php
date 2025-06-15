<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'foto',
        'angkatan',
        'telepon',
        'alamat',
        'program_studi_id',
    ];

    public $timestamps = true;

    public function prestasi(): HasMany
    {
        return $this->hasMany(Prestasi::class, 'nim', 'nim');
    }

    public function proyek(): HasMany
    {
        return $this->hasMany(Proyek::class, 'nim', 'nim');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    // Scope for search
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('nim', 'like', "%{$search}%")
                ->orWhere('nama', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('angkatan', 'like', "%{$search}%")
                ->orWhere('telepon', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%");
        });
    }

    // Scope for sorting
    public function scopeSort($query, $sort, $direction = 'asc')
    {
        $sortColumns = ['nim', 'nama', 'email', 'angkatan', 'telepon', 'alamat'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('nama', 'asc');
    }

    // Accessor for foto URL
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('mahasiswa/' . $this->foto);
        }
        return null;
    }
}
