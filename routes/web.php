<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IkmController;
use App\Http\Controllers\PkhewanController;
use App\Http\Controllers\PiphewanController;
// TURUNAN PIP HEWAN
use App\Http\Controllers\penyakits\RabiesController;
use App\Http\Controllers\penyakits\AvianController;
use App\Http\Controllers\penyakits\BrucellosisController;
use App\Http\Controllers\penyakits\AnthraxsController;
use App\Http\Controllers\penyakits\HcholeraController;
use App\Http\Controllers\penyakits\PenyakitlainController;
use App\Http\Controllers\penyakits\AsfController;
use App\Http\Controllers\penyakits\PmkController;
use App\Http\Controllers\penyakits\PenyakitviralController;
use App\Http\Controllers\penyakits\PenyakitBakterialController;
use App\Http\Controllers\penyakits\ParasiterController;
use App\Http\Controllers\penyakits\LsdController;
use App\Http\Controllers\penyakits\InveswabahController;

// KEAMANAN PRODUK
use App\Http\Controllers\KeamananprodukController;
use App\Http\Controllers\keamananproduk\AmrnasionalController;
use App\Http\Controllers\keamananproduk\KeamananprodukhewanController;
use App\Http\Controllers\Penyakit5yearController;
use App\Http\Controllers\JenispilihanpenyakitController;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\DinasluarController;
use App\Http\Controllers\MasukanController;

// ANGGARAN
use App\Http\Controllers\anggaran\PengendalianpenyakitController;
use App\Http\Controllers\anggaran\PenyediaanbenihController;
use App\Http\Controllers\anggaran\KesehatanventerinerController;
use App\Http\Controllers\anggaran\DukunganmanajemenController;


use App\Http\Controllers\TernakpotongController;
use App\Http\Controllers\TernakunggasController;


// Profile Admin
use App\Http\Controllers\ProfileController;


// CONTROLLER BISA LANGSUNG DIPAKAI 
// Sarana Bidang Kesehatan Hewan
use App\Http\Controllers\SbkhewanController;

// Layanan Dukungan Manajemen Internal
use App\Http\Controllers\LayananController;

// KHUSUS DI VERSI 2023 dan 2024
// Layanan Manajemen Kinerja Internal
use App\Http\Controllers\LayanankinerjaController;
// Nilai Indeks Kepuasan Layanan Internal Pegawai
use App\Http\Controllers\KepuasanlayananinternalController;

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
    return view('auth.login' , [
        "title" => 'Welcome SIMANTU'
    ]);
});

Auth::routes();

Route::resource('/home',HomeController::class);

// VERSION 1.0 (2022)
Route::prefix('v22')->group(function () {
    Route::get('home', [DashboardController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'IndeksKepuasanMasyarakat', [IkmController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'PelayananKesehatanHewan', [PkhewanController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'PengamatanPenyakitHewan', [PiphewanController::class, 'index22']);

    // TURUNAN PENGAMATAN & IDENTIFIKASI PENYAKIT HEWAN
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Rabies', [RabiesController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Avian', [AvianController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Brucellosis', [BrucellosisController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Anthraxs', [AnthraxsController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HogCholera', [HcholeraController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HewanLaninnya', [PenyakitlainController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Asf', [AsfController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Pmk', [PmkController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Viral', [PenyakitviralController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Bakterial', [PenyakitBakterialController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Parasiter', [ParasiterController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Lsd', [LsdController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'Investigasi_Wabah', [InveswabahController::class, 'index22']);
    // KEAMANAN PRODUK
    Route::match(['GET','POST' ,'PATCH'], 'KeamananProduk', [KeamananprodukController::class, 'index22']);
    // 5 Tahun Penyakit terakhir
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'pengaturan_Penyakit_terakhir', [Penyakit5yearController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'data_Pilihan_Penyakit', [JenispilihanpenyakitController::class, 'index22']);
    // SDM
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_sdm', [SdmController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_dinasluar', [DinasluarController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'masukanBalai', [MasukanController::class, 'index22']);

    // ANGGARAN
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PengendalianPenyakit', [PengendalianpenyakitController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PenyedianBenih', [PenyediaanbenihController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_KesehatanVeteriner', [KesehatanventerinerController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_DukunganManajemen', [DukunganmanajemenController::class, 'index22']);

    // PROFIL ADMIN
    Route::match(['GET','POST' ,'PATCH'], 'Admin_profile', [ProfileController::class, 'index22']);


    Route::match(['GET','POST' ,'PATCH'], 'TernakRuminansia', [TernakpotongController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'TernakUnggas', [TernakunggasController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'LayananDukungan', [LayananController::class, 'index22']);
    Route::match(['GET','POST' ,'PATCH'], 'SaranaBidang', [SbkhewanController::class, 'index22']);
});

// VERSION 2.0 (2023)
Route::prefix('v23')->group(function () {
    Route::get('home', [DashboardController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'IndeksKepuasanMasyarakat', [IkmController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'PelayananKesehatanHewan', [PkhewanController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'PengamatanPenyakitHewan', [PiphewanController::class, 'index23']);

    // TURUNAN PENGAMATAN & IDENTIFIKASI PENYAKIT HEWAN
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Rabies', [RabiesController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Avian', [AvianController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Brucellosis', [BrucellosisController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Anthraxs', [AnthraxsController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HogCholera', [HcholeraController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HewanLaninnya', [PenyakitlainController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Asf', [AsfController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Pmk', [PmkController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Viral', [PenyakitviralController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Bakterial', [PenyakitBakterialController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Parasiter', [ParasiterController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Lsd', [LsdController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Investigasi_Wabah', [InveswabahController::class, 'index23']);
    // KEAMANAN PRODUK
    Route::match(['GET','POST' ,'PATCH'], 'KeamananProduk', [KeamananprodukController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'AMR_Nasional', [AmrnasionalController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'Keamanan_ProdukHewan', [KeamananprodukhewanController::class, 'index23']);
    // 5 Tahun Penyakit terakhir
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'pengaturan_Penyakit_terakhir', [Penyakit5yearController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'data_Pilihan_Penyakit', [JenispilihanpenyakitController::class, 'index23']);
    // SDM
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_sdm', [SdmController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_dinasluar', [DinasluarController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'masukanBalai', [MasukanController::class, 'index23']);

    // ANGGARAN
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PengendalianPenyakit', [PengendalianpenyakitController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PenyedianBenih', [PenyediaanbenihController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_KesehatanVeteriner', [KesehatanventerinerController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_DukunganManajemen', [DukunganmanajemenController::class, 'index23']);


    // PROFIL ADMIN
    Route::match(['GET','POST' ,'PATCH'], 'Admin_profile', [ProfileController::class, 'index23']);

    Route::match(['GET','POST' ,'PATCH'], 'TernakRuminansia', [TernakpotongController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'TernakUnggas', [TernakunggasController::class, 'index23']);
    Route::match(['GET','POST' ,'PATCH'], 'LayananDukungan', [LayananController::class, 'index23']);

    Route::match(['GET', 'POST' ,'PATCH'], 'LayananManajemenKinerja', [LayanankinerjaController::class, 'index23']);

    Route::match(['GET','POST' ,'PATCH'], 'SaranaBidang', [SbkhewanController::class, 'index23']);



});

// VERSION 3.0 (2024)
Route::prefix('v24')->group(function () {
    Route::get('home', [DashboardController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'IndeksKepuasanMasyarakat', [IkmController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'PelayananKesehatanHewan', [PkhewanController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'PengamatanPenyakitHewan', [PiphewanController::class, 'index24']);
    // TURUNAN PENGAMATAN & IDENTIFIKASI PENYAKIT HEWAN
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Rabies', [RabiesController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Avian', [AvianController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Brucellosis', [BrucellosisController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Anthraxs', [AnthraxsController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HogCholera', [HcholeraController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_HewanLaninnya', [PenyakitlainController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Asf', [AsfController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Pmk', [PmkController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Viral', [PenyakitviralController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Bakterial', [PenyakitBakterialController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Parasiter', [ParasiterController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Penyakit_Lsd', [LsdController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Investigasi_Wabah', [InveswabahController::class, 'index24']);
    // KEAMANAN PRODUK
    Route::match(['GET','POST' ,'PATCH'], 'KeamananProduk', [KeamananprodukController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'AMR_Nasional', [AmrnasionalController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'Keamanan_ProdukHewan', [KeamananprodukhewanController::class, 'index24']);
    // 5 Tahun Penyakit terakhir
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'pengaturan_Penyakit_terakhir', [Penyakit5yearController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'data_Pilihan_Penyakit', [JenispilihanpenyakitController::class, 'index24']);
    // SDM
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_sdm', [SdmController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'sdm_dinasluar', [DinasluarController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH' , 'PUT' , 'DELETE'], 'masukanBalai', [MasukanController::class, 'index24']);

    // ANGGARAN
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PengendalianPenyakit', [PengendalianpenyakitController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_PenyedianBenih', [PenyediaanbenihController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_KesehatanVeteriner', [KesehatanventerinerController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'anggaran_DukunganManajemen', [DukunganmanajemenController::class, 'index24']);

    // PROFIL ADMIN
    Route::match(['GET','POST' ,'PATCH'], 'Admin_profile', [ProfileController::class, 'index24']);

    Route::match(['GET','POST' ,'PATCH'], 'TernakRuminansia', [TernakpotongController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'TernakUnggas', [TernakunggasController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'LayananDukungan', [LayananController::class, 'index24']);

    Route::match(['GET','POST' ,'PATCH'], 'LayananManajemenKinerja', [LayanankinerjaController::class, 'index24']);
    Route::match(['GET','POST' ,'PATCH'], 'SaranaBidang', [SbkhewanController::class, 'index24']);

});


// YANG BELUM DI SEMUA VERSI
Route::resource('/SaranaBidang',SbkhewanController::class);
Route::resource('/KeamananProduk',KeamananprodukController::class);
Route::resource('/LayananDukungan',LayananController::class);
Route::resource('/kepuasanlayanan_internal', KepuasanlayananinternalController::class);