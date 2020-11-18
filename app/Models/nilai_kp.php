<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilai_kp extends Model
{
    protected $fillable = [
        'slug', 'nilai_tulis', 'nilai_presentasi', 'nilai_angka', 'nilai_huruf', 'keterangan'
    ];
    public function kerja_praktek(){
        return $this->belongsTo('App\Models\kerja_praktek', 'slug', 'slug');
    }
}
