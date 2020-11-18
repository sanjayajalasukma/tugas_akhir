<?php

namespace App\Imports;

use App\Models\mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    */
    public function model(array $row)
    {
        return new mahasiswa ([
            'slug'  => $row['3'],
            'kd_prodi'   => $row['0'],
            'kelas_reguler'   => $row['1'],
            'angkatan'    => $row['2'],
            'npm'  => $row['3'],
            'nama'   => $row['4'],
            'alamat' => $row['5'],
            'kota_asal' => $row['6'],
            'handphone' => $row['7'],
            'email' => $row['8']
        ]);
    }
}
