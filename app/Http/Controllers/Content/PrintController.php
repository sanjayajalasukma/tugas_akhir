<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Models\kerja_praktek;

class PrintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kartuBimbingan($slug)
    {
        $kerja_praktek = kerja_praktek::whereSlug($slug)->firstOrFail();
        $pdf = PDF::loadView('content.print.kartu_bimbingan', compact('kerja_praktek'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
    public function formulirNilai($slug)
    {
        $kerja_praktek = kerja_praktek::whereSlug($slug)->firstOrFail();
        $pdf = PDF::loadView('content.print.formulir_nilai', compact('kerja_praktek'))->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}
