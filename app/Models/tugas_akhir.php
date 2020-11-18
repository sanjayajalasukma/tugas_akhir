<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tugas_akhir extends Model
{
    protected  $fillable = [
        'slug', 'npm', 'judul_ta', 'tempat_ta', 'nrk', 'pembimbing_lapangan', 'awal_bimbingan', 'akhir_bimbingan', 'dokumen_persyaratan'
    ];
    
    public function mahasiswa(){
        return $this->belongsTo('App\Models\mahasiswa', 'npm', 'npm');
    }
    public function dosen(){
        return $this->belongsTo('App\Models\dosen', 'nrk', 'nrk');
    }
    public function nilai_kp(){
        return $this->hasMany('App\Models\nilai_ta', 'slug', 'slug');
    }
}
