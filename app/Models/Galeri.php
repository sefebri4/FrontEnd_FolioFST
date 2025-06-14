<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tanggal',
    ];

    public $timestamps = true;

    // Scope for search
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('judul', 'like', "%{$search}%")
                ->orWhere('deskripsi', 'like', "%{$search}%");
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

    // Accessor for gambar URL
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('galeri/' . $this->gambar);
        }
        return null;
    }
}
