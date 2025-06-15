<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';

    protected $fillable = [
        'judul',
        'isi',
        'tanggal_posting',
        'gambar',
    ];

    public $timestamps = true;

    // Scope for search
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('judul', 'like', "%{$search}%")
                ->orWhere('isi', 'like', "%{$search}%");
        });
    }

    // Scope for sorting
    public function scopeSort($query, $sort, $direction = 'asc')
    {
        $sortColumns = ['judul', 'tanggal_posting'];

        if (in_array($sort, $sortColumns)) {
            return $query->orderBy($sort, $direction);
        }

        return $query->orderBy('tanggal_posting', 'desc');
    }

    // Accessor for gambar URL
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('informasi/' . $this->gambar);
        }
        return null;
    }
}
