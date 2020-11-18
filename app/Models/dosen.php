<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $fillable = [
        'slug', 'nrk', 'nama_dosen', 'tgl_lahir', 'tempat_lahir', 'jenis_kelamin', 'status_pernikahan', 'nama_sekolah', 'tahun_lulus', 'nama_jabatan', 'nama_organisasi', 'nama_pendidikan', 'nama_kantor', 'email'
    ];
    
    public function kerja_praktek(){
        return $this->hasMany('App\Models\kerja_praktek', 'nrk', 'nrk');
    }
}
