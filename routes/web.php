<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/cari-npm', 'HomeController@cari');
Route::get('/home', 'HomeController@index')->name('home');

// User
Route::get('/user', 'Content\UserController@index');
Route::get('user/tambah', 'Content\UserController@tambah');
Route::post('user/tambah', 'Content\UserController@tambahUser');
Route::get('user/detail/{id}', 'Content\UserController@detail');
Route::get('user/edit/{id}', 'Content\UserController@edit');
Route::patch('user/update/{id}', 'Content\UserController@update');
Route::delete('user/hapus/{id}', 'Content\UserController@hapus')->name('user/hapus');

// mahasiswa
Route::get('/mahasiswa', 'Content\MahasiswaController@index');
// Route::get('mahasiswa/tambah', 'Content\MahasiswaController@tambah');
// Route::post('mahasiswa/tambah', 'Content\MahasiswaController@tambahMahasiswa');
Route::post('mahasiswa/tambah', 'Content\MahasiswaController@import');
Route::get('mahasiswa/detail/{slug?}', 'Content\MahasiswaController@detail');
Route::get('mahasiswa/edit/{slug?}', 'Content\MahasiswaController@edit');
Route::patch('mahasiswa/update/{slug?}', 'Content\MahasiswaController@update');
Route::delete('mahasiswa/hapus/{id}', 'Content\MahasiswaController@hapus')->name('mahasiswa/hapus');

// dosen
Route::get('/dosen', 'Content\DosenController@index');
Route::get('dosen/tambah', 'Content\DosenController@tambah');
Route::post('dosen/tambah', 'Content\DosenController@tambahDosen');
Route::get('dosen/detail/{slug?}', 'Content\DosenController@detail');
Route::get('dosen/edit/{slug?}', 'Content\DosenController@edit');
Route::patch('dosen/update/{slug?}', 'Content\DosenController@update');
Route::delete('dosen/hapus/{id}', 'Content\DosenController@hapus')->name('dosen/hapus');

// Kerja Praktek
Route::get('/kerja-praktek', 'Content\KpController@index');
Route::get('kerja-praktek/tambah', 'Content\KpController@tambah');
Route::post('kerja-praktek/tambah', 'Content\KpController@tambahKp');
Route::get('kerja-praktek/detail/{slug?}', 'Content\KpController@detail');
Route::get('/getData', 'Content\KpController@getData')->name('getData');


// Tugas Akhir
Route::get('/tugas-akhir', 'Content\TaController@index');
Route::get('tugas-akhir/tambah', 'Content\TaController@tambah');
Route::post('tugas-akhir/tambah', 'Content\TaController@tambahTa');
Route::get('tugas-akhir/detail/{slug?}', 'Content\TaController@detail');
Route::get('/getData', 'Content\TaController@getData')->name('getData');



// Jurnal
Route::get('/jurnal', 'Content\JurnalController@index');


// print
Route::get('kerja-praktek/kartu-bimbingan/{slug?}', 'Content\PrintController@kartuBimbingan');
Route::get('kerja-praktek/formulir-nilai/{slug?}', 'Content\PrintController@formulirNilai');

// Nilai Kerja Praktek
Route::get('/nilai-kp', 'Content\NilaiController@index');
Route::get('nilai-kp/tambah', 'Content\NilaiController@tambah');
Route::post('nilai-kp/tambah', 'Content\NilaiController@tambahNilai');
Route::get('nilai-kp/detail/{slug?}', 'Content\NilaiController@detail');
Route::get('/getKp', 'Content\NilaiController@getKp')->name('getKp');

// Nilai Tugas Akhir
Route::get('/nilai-ta', 'Content\NilaiTaController@index');


// NialI Jurnal
Route::get('/nilai-jurnal', 'Content\NilaiJurnalController@index');

// rekap peserta
Route::get('/rekap-peserta', 'Content\RekapController@index');
Route::get('rekap-peserta/print-data', 'Content\RekapController@filter');
