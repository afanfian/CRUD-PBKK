<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $guarded = [];
    protected $fillable = [
        'ppdbsd_id',
        'NISN',
        'Nama_Siswa',
        'Umur'
    ];
    public function ppdbsd()
    {
        return $this->belongsTo(ppdbsd::class);
    }
}
