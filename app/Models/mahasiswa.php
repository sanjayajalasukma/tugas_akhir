<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [
        'slug', 'kd_prodi', 'kelas_reguler', 'angkatan', 'npm', 'nama', 'alamat', 'kota_asal', 'handphone', 'email'
    ];

    public function kerja_praktek(){
        return $this->hasMany('App\Models\kerja_praktek', 'npm', 'npm');
    }
}
