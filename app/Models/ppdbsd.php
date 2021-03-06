<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdbsd extends Model
{
    use HasFactory;
    protected $table = 'ppdbsds';
    protected $guarded = [];
    protected $fillable = [
        'NPSN',
        'Nama_SD',
        'Alamat'
    ];
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
