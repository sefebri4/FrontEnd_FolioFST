<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'isi',
        'tanggal_posting',
        'penulis',
        'gambar',
    ];

    public $timestamps = true;

    // Scope for search
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('judul', 'like', "%{$search}%")
                ->orWhere('isi', 'like', "%{$search}%")
                ->orWhere('penulis', 'like', "%{$search}%");
        });
    }

    // Scope for sorting
    public function scopeSort($query, $sort, $direction = 'asc')
    {
        $sortColumns = ['judul', 'tanggal_posting', 'penulis'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('tanggal_posting', 'desc');
    }

    // Accessor for gambar URL
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('berita/' . $this->gambar);
        }
        return null;
    }
}
