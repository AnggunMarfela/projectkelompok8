<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianPegawai extends Model
{
    use HasFactory;
    protected $table = 'penilaian_pegawai';
    protected $fillable = [
        'nip', 'nama', 'tahun_penilaian', 'kegiatan', 'nilai', 'note'
    ];
}