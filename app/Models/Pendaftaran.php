<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ttl',
        'jenis_kelamin',
        'agama',
        'status',
        'no_telp',
        'alamat',
        'riwayat_pendidikan',
        'pengalaman_kerja',
        'sertifikasi',
        'pengalaman_organisasi',
        'soft_skill',
        'hard_skill',
    ];
}
