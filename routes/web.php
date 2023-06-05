<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\Jenis_transaksiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Kritik_saranController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Transaksi_poinController;
use App\Http\Controllers\Transaksi_pelangganController;
use App\Http\Controllers\Transaksi_konsumenController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", function () {
    return view('menu.welcome');
});

Route::get("profil", function () {
    return view('menu.Profil');
});

//Route Input -> Pelanggan---------------------------------------------------------------------
Route::get('/Pelanggan',[PelangganController::class, 'index'])->name('Pelanggan');
//route Input Data Pelanggan
Route::get('/iPelanggan', [PelangganController::class, 'iPelanggan'])->name('iPelanggan');
//Route Insert Data Pelanggan
Route::post('/instPelanggan', [PelangganController::class, 'instPelanggan'])->name('instPelanggan');
//Route Tampilkan Data Pelanggan Untuk edit
Route::get('/editPelanggan/{id}', [PelangganController::class, 'editPelanggan'])->name('editPelanggan');
//Route Update Data Pelanggan
Route::post('/updatePelanggan/{id}', [PelangganController::class, 'updatePelanggan'])->name('updatePelanggan');
//Route Hapus Data Pelanggan
Route::get('/delPelanggan/{id}', [PelangganController::class, 'delPelanggan'])->name('delPelanggan');
//Route Data Pelanggan
// Route::get('/rPelanggan', function () {
//     return view('menu_input_data.Pelanggan');
// });

//Route Input -> Konsumen---------------------------------------------------------------------
Route::get('/Konsumen',[KonsumenController::class, 'index'])->name('Konsumen');
//route Input Data Konsumen
Route::get('/iKonsumen', [KonsumenController::class, 'iKonsumen'])->name('iKonsumen');
//Route Insert Data Konsumen
Route::post('/instKonsumen', [KonsumenController::class, 'instKonsumen'])->name('instKonsumen');
//Route Tampilkan Data Konsumen Untuk edit
Route::get('/editKonsumen/{id}', [KonsumenController::class, 'editKonsumen'])->name('editKonsumen');
//Route Update Data Konsumen
Route::post('/updateKonsumen/{id}', [KonsumenController::class, 'updateKonsumen'])->name('updateKonsumen');
//Route Hapus Data Konsumen
Route::get('/delKonsumen/{id}', [KonsumenController::class, 'delKonsumen'])->name('delKonsumen');
//Route Data Konsumen
// Route::get('/rKonsumen', function () {
//     return view('menu_input_data.Konsumen');
// });

//Route Input -> Distributor---------------------------------------------------------------------
Route::get('/Distributor',[DistributorController::class, 'index'])->name('Distributor');
//route Input Data Distributor
Route::get('/iDistributor', [DistributorController::class, 'iDistributor'])->name('iDistributor');
//Route Insert Data Distributor
Route::post('/instDistributor', [DistributorController::class, 'instDistributor'])->name('instDistributor');
//Route Tampilkan Data Pelanggan Untuk edit
Route::get('/editDistributor/{id}', [DistributorController::class, 'editDistributor'])->name('editDistributor');
//Route Update Data Distributor
Route::post('/updateDistributor/{id}', [DistributorController::class, 'updateDistributor'])->name('updateDistributor');
//Route Hapus Data Distributor
Route::get('/delDistributor/{id}', [DistributorController::class, 'delDistributor'])->name('delDistributor');
//Route Data Distributor
// Route::get('/rDistributor', function () {
//     return view('menu_input_data.Distributor');
// });

//Route Input -> Jenis_transaksi---------------------------------------------------------------------
Route::get('/Jenis_transaksi',[Jenis_transaksiController::class, 'index'])->name('Jenis_transaksi');
//route Input Data Jenis_transaksi
Route::get('/iJenis_transaksi', [Jenis_transaksiController::class, 'iJenis_transaksi'])->name('iJenis_transaksi');
//Route Insert Data Jenis_transaksi
Route::post('/instJenis_transaksi', [Jenis_transaksiController::class, 'instJenis_transaksi'])->name('instJenis_transaksi');
//Route Tampilkan Data Jenis_transaksi Untuk edit
Route::get('/editJenis_transaksi/{id}', [Jenis_transaksiController::class, 'editJenis_transaksi'])->name('editJenis_transaksi');
//Route Update Data Jenis_transaksi
Route::post('/updateJenis_transaksi/{id}', [Jenis_transaksiController::class, 'updateJenis_transaksi'])->name('updateJenis_transaksi');
//Route Hapus Data Jenis_transaksi
Route::get('/delJenis_transaksi/{id}', [Jenis_transaksiController::class, 'delJenis_transaksi'])->name('delJenis_transaksi');
//Route Data Jenis_transaksi
// Route::get('/rJenis_transaksi', function () {
//     return view('menu_input_data.Jenis_transaksi');
// });

//Route Input -> Pegawai---------------------------------------------------------------------
Route::get('/Pegawai',[PegawaiController::class, 'index'])->name('Pegawai');
//route Input Data Pegawai
Route::get('/iPegawai', [PegawaiController::class, 'iPegawai'])->name('iPegawai');
//Route Insert Data Pegawai
Route::post('/instPegawai', [PegawaiController::class, 'instPegawai'])->name('instPegawai');
//Route Tampilkan Data Pegawai Untuk edit
Route::get('/editPegawai/{id}', [PegawaiController::class, 'editPegawai'])->name('editPegawai');
//Route Update Data Pegawai
Route::post('/updatePegawai/{id}', [PegawaiController::class, 'updatePegawai'])->name('updatePegawai');
//Route Hapus Data Pegawai
Route::get('/delPegawai/{id}', [PegawaiController::class, 'delPegawai'])->name('delPegawai');
//Route Data Pegawai
// Route::get('/rPegawai', function () {
//     return view('menu_input_data.Pegawai');
// });

//Route Input -> Poin---------------------------------------------------------------------
Route::get('/Poin',[PoinController::class, 'index'])->name('Poin');
//route Input Data Poin
Route::get('/iPoin', [PoinController::class, 'iPoin'])->name('iPoin');
//Route Insert Data Poin
Route::post('/instPoin', [PoinController::class, 'instPoin'])->name('instPoin');
//Route Tampilkan Data Poin Untuk edit
Route::get('/editPoin/{id}', [PoinController::class, 'editPoin'])->name('editPoin');
//Route Update Data Poin
Route::post('/updatePoin/{id}', [PoinController::class, 'updatePoin'])->name('updatePoin');
//Route Hapus Data Poin
Route::get('/delPoin/{id}', [PoinController::class, 'delPoin'])->name('delPoin');
//Route Data Poin
// Route::get('/rPoin', function () {
//     return view('menu_input_data.Poin');
// });

//Route Input -> Kritik_saran---------------------------------------------------------------------
Route::get('/Kritik_saran',[Kritik_saranController::class, 'index'])->name('Kritik_saran');
//route Input Data Kritik_saran
Route::get('/iKritik_saran', [Kritik_saranController::class, 'iKritik_saran'])->name('iKritik_saran');
//Route Insert Data Kritik_saran
Route::post('/instKritik_saran', [Kritik_saranController::class, 'instKritik_saran'])->name('instKritik_saran');
//Route Tampilkan Data Kritik_saran Untuk edit
Route::get('/editKritik_saran/{id}', [Kritik_saranController::class, 'editKritik_saran'])->name('editKritik_saran');
//Route Update Data Kritik_saran
Route::post('/updateKritik_saran/{id}', [Kritik_saranController::class, 'updateKritik_saran'])->name('updateKritik_saran');
//Route Hapus Data Kritik_saran
Route::get('/delKritik_saran/{id}', [Kritik_saranController::class, 'delKritik_saran'])->name('delKritik_saran');
//Route Data Kritik_saran
// Route::get('/rKritik_saran', function () {
//     return view('menu_input_data.Kritik_saran');
// });

//Route Input -> Barang---------------------------------------------------------------------
Route::get('/Barang',[BarangController::class, 'index'])->name('Barang');
//route Input Data Barang
Route::get('/iBarang', [BarangController::class, 'iBarang'])->name('iBarang');
//Route Insert Data Barang
Route::post('/instBarang', [BarangController::class, 'instBarang'])->name('instBarang');
//Route Tampilkan Data Barang Untuk edit
Route::get('/editBarang/{id}', [BarangController::class, 'editBarang'])->name('editBarang');
//Route Update Data Barang
Route::post('/updateBarang/{id}', [BarangController::class, 'updateBarang'])->name('updateBarang');
//Route Hapus Data Barang
Route::get('/delBarang/{id}', [BarangController::class, 'delBarang'])->name('delBarang');
//Route PDF
Route::get('/exportBarang/{id}', [BarangController::class, 'exportBarang'])->name('exportBarang');


//Route Input -> Transaksi_poin---------------------------------------------------------------------
Route::get('/Transaksi_poin',[Transaksi_poinController::class, 'index'])->name('Transaksi_poin');
//route Input Data Transaksi_poin
Route::get('/iTransaksi_poin', [Transaksi_poinController::class, 'iTransaksi_poin'])->name('iTransaksi_poin');
//Route Insert Data Transaksi_poin
Route::post('/instTransaksi_poin', [Transaksi_poinController::class, 'instTransaksi_poin'])->name('instTransaksi_poin');
//Route Tampilkan Data Transaksi_poin Untuk edit
Route::get('/editTransaksi_poin/{id}', [Transaksi_poinController::class, 'editTransaksi_poin'])->name('editTransaksi_poin');
//Route Update Data Transaksi_poin
Route::post('/updateTransaksi_poin/{id}', [Transaksi_poinController::class, 'updateTransaksi_poin'])->name('updateTransaksi_poin');
//Route Hapus Data Transaksi_poin
Route::get('/delTransaksi_poin/{id}', [Transaksi_poinController::class, 'delTransaksi_poin'])->name('delTransaksi_poin');
//Route PDF
Route::get('/exportTransaksi_poin/{id}', [Transaksi_poinController::class, 'exportTransaksi_poin'])->name('exportTransaksi_poin');

//Route Input -> Transaksi_pelanggan---------------------------------------------------------------------
Route::get('/Transaksi_pelanggan',[Transaksi_pelangganController::class, 'index'])->name('Transaksi_pelanggan');
//route Input Data Transaksi_pelanggan
Route::get('/iTransaksi_pelanggan', [Transaksi_pelangganController::class, 'iTransaksi_pelanggan'])->name('iTransaksi_pelanggan');
//Route Insert Data Transaksi_pelanggan
Route::post('/instTransaksi_pelanggan', [Transaksi_pelangganController::class, 'instTransaksi_pelanggan'])->name('instTransaksi_pelanggan');
//Route Tampilkan Data Transaksi_poin Untuk edit
Route::get('/editTransaksi_pelanggan/{id}', [Transaksi_pelangganController::class, 'editTransaksi_pelanggan'])->name('editTransaksi_pelanggan');
//Route Update Data Transaksi_pelanggan
Route::post('/updateTransaksi_pelanggan/{id}', [Transaksi_pelangganController::class, 'updateTransaksi_pelanggan'])->name('updateTransaksi_pelanggan');
//Route Hapus Data Transaksi_pelanggan
Route::get('/delTransaksi_pelanggan/{id}', [Transaksi_pelangganController::class, 'delTransaksi_pelanggan'])->name('delTransaksi_pelanggan');
//Route PDF
Route::get('/exportTransaksi_pelanggan/{id}', [Transaksi_pelangganController::class, 'exportTransaksi_pelanggan'])->name('exportTransaksi_pelanggan');

//Route Input ->Transaksi_konsumen---------------------------------------------------------------------
Route::get('/Transaksi_konsumen',[Transaksi_konsumenController::class, 'index'])->name('Transaksi_konsumen');
//route Input Data Transaksi_konsumen
Route::get('/iTransaksi_konsumen', [Transaksi_konsumenController::class, 'iTransaksi_konsumen'])->name('iTransaksi_konsumen');
//Route Insert Data Transaksi_konsumen
Route::post('/instTransaksi_konsumen', [Transaksi_konsumenController::class, 'instTransaksi_konsumen'])->name('instTransaksi_konsumen');
//Route Tampilkan DataTransaksi_konsumen Untuk edit
Route::get('/editTransaksi_konsumen/{id}', [Transaksi_konsumenController::class, 'editTransaksi_konsumen'])->name('editTransaksi_konsumen');
//Route Update Data Transaksi_konsumen
Route::post('/updateTransaksi_konsumen/{id}', [Transaksi_konsumenController::class, 'updateTransaksi_konsumen'])->name('updateTransaksi_konsumen');
//Route Hapus Data Transaksi_konsumen
Route::get('/delTransaksi_konsumen/{id}', [Transaksi_konsumenController::class, 'delTransaksi_konsumen'])->name('delTransaksi_konsumen');
//Route PDF
Route::get('/exportTransaksi_konsumen/{id}', [Transaksi_konsumenController::class, 'exportTransaksi_konsumen'])->name('exportTransaksi_konsumen');