<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\th22\HomeController;
use App\Http\Controllers\th22\Hometh22Controller;
use App\Http\Controllers\th22\IkmController;
use App\Http\Controllers\th22\pkhewanController;
use App\Http\Controllers\th22\PiphewanController;
use App\Http\Controllers\th22\SbkhewanController;
use App\Http\Controllers\th22\TernakpotongController;
use App\Http\Controllers\th22\TernakunggasController;
use App\Http\Controllers\th22\KeamananprodukController;
use App\Http\Controllers\th22\LayananController;
use App\Http\Controllers\th22\PengendalianpenyakitController;
use App\Http\Controllers\th22\PenyediaanbenihController;
use App\Http\Controllers\th22\KesehatanventerinerController;
use App\Http\Controllers\th22\DukunganmanajemenController;
use App\Http\Controllers\th22\SdmController;
use App\Http\Controllers\th22\DetailpenyakitController;
use App\Http\Controllers\th22\DinasluarController;
use App\Http\Controllers\th22\RabiesController;
use App\Http\Controllers\th22\AvianController;
use App\Http\Controllers\th22\BrucellosisController;
use App\Http\Controllers\th22\AnthraxsController;
use App\Http\Controllers\th22\HcholeraController;
use App\Http\Controllers\th22\PenyakitlainController;
use App\Http\Controllers\th22\AsfController;
use App\Http\Controllers\th22\PenyakitviralController;
use App\Http\Controllers\th22\PenyakitBakterialController;
use App\Http\Controllers\th22\Penyakit5yearController;
use App\Http\Controllers\th22\MasukanController;
use App\Http\Controllers\th22\JenispilihanpenyakitController;
use App\Http\Controllers\th22\PmkController;

use App\Http\Controllers\th23\Hometh23Controller;
use App\Http\Controllers\th23\Ikm23Controller;
use App\Http\Controllers\th23\pkhewan23Controller;
use App\Http\Controllers\th23\Piphewan23Controller;
use App\Http\Controllers\th23\Sbkhewan23Controller;
use App\Http\Controllers\th23\Ternakpotong23Controller;
use App\Http\Controllers\th23\Ternakungga23Controller;
use App\Http\Controllers\th23\Keamananproduk23Controller;
use App\Http\Controllers\th23\Layanan23Controller;
use App\Http\Controllers\th23\Layanankinerja23Controller;
use App\Http\Controllers\th23\Pengendalianpenyakit23Controller;
use App\Http\Controllers\th23\Penyediaanbenih23Controller;
use App\Http\Controllers\th23\Kesehatanventeriner23Controller;
use App\Http\Controllers\th23\Dukunganmanajemen23Controller;
use App\Http\Controllers\th23\Sdm23Controller;
use App\Http\Controllers\th23\Detailpenyakit23Controller;
use App\Http\Controllers\th23\Dinasluar23Controller;
use App\Http\Controllers\th23\Rabie23Controller;
use App\Http\Controllers\th23\Avian23Controller;
use App\Http\Controllers\th23\Brucellose23Controller;
use App\Http\Controllers\th23\Anthrax23Controller;
use App\Http\Controllers\th23\Hcholera23Controller;
use App\Http\Controllers\th23\Parasiter23Controller;
use App\Http\Controllers\th23\Lsd23Controller;
use App\Http\Controllers\th23\Inveswabah23Controller;
use App\Http\Controllers\th23\Penyakitlain23Controller;
use App\Http\Controllers\th23\Asf23Controller;
use App\Http\Controllers\th23\Penyakitviral23Controller;
use App\Http\Controllers\th23\Penyakitbakterial23Controller;
use App\Http\Controllers\th23\Penyakit5year23Controller;
use App\Http\Controllers\th23\Masukan23Controller;
use App\Http\Controllers\th23\Jenispilihanpenyakit23Controller;
use App\Http\Controllers\th23\Pmk23Controller;

use App\Http\Controllers\th23\Amrnasional23Controller;
use App\Http\Controllers\th23\Keamananprodukhewan23Controller;

use App\Http\Controllers\th23\Kepuasanlayananinternal23Controller;





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

// Route::get('/home', function () {
//     return view('admin.th22.home' , [
//         "title" => 'Home | SIMANTU'
//     ]);
// });

// Route::get('/DetailPenyakitHewan', function () {
//     return view('admin.th22.DetailPenyakitHewan' , [
//         "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
//     ]);
// });

Route::resource('/home',HomeController::class);
Route::resource('/home2022',Hometh22Controller::class);
Route::resource('/IndeksKepuasanMasyarakat',IkmController::class);
Route::resource('/PelayananKesehatanHewan',pkhewanController::class);
Route::resource('/PengamatanPenyakitHewan',PiphewanController::class);
Route::resource('/SaranaBidang',SbkhewanController::class);
Route::resource('/TernakRuminansia',TernakpotongController::class);
Route::resource('/TernakUnggas',TernakunggasController::class);
Route::resource('/KeamananProduk',KeamananprodukController::class);
Route::resource('/LayananDukungan',LayananController::class);
Route::resource('/anggaran_PengendalianPenyakit',PengendalianpenyakitController::class);
Route::resource('/anggaran_PenyedianBenih',PenyediaanbenihController::class);
Route::resource('/anggaran_KesehatanVeteriner',KesehatanventerinerController::class);
Route::resource('/anggaran_DukunganManajemen',DukunganmanajemenController::class);
Route::resource('/sdm_sdm',SdmController::class);
Route::resource('/DetailPenyakitHewan',DetailpenyakitController::class);
Route::resource('/sdm_dinasluar',DinasluarController::class);
Route::resource('/Penyakit_Rabies',RabiesController::class);
Route::resource('/Penyakit_Avian',AvianController::class);
Route::resource('/Penyakit_Brucellosis',BrucellosisController::class);
Route::resource('/Penyakit_Anthraxs',AnthraxsController::class);
Route::resource('/Penyakit_HogCholera',HcholeraController::class);
Route::resource('/Penyakit_HewanLaninnya',PenyakitlainController::class);
Route::resource('/Penyakit_Asf',AsfController::class);
Route::resource('/Penyakit_Viral',PenyakitviralController::class);
Route::resource('/Penyakit_Bakterial',PenyakitBakterialController::class);
Route::resource('/pengaturan_Penyakit_terakhir',Penyakit5yearController::class);
Route::resource('/masukanBalai',MasukanController::class);
Route::resource('/data_Pilihan_Penyakit',JenispilihanpenyakitController::class);
Route::resource('/Penyakit_Pmk',PmkController::class);

Route::resource('/home2023',Hometh23Controller::class);
Route::resource('/IndeksKepuasanMasyarakat23',Ikm23Controller::class);
Route::resource('/PelayananKesehatanHewan23',pkhewan23Controller::class);
Route::resource('/PengamatanPenyakitHewan23',Piphewan23Controller::class);
Route::resource('/SaranaBidang23',Sbkhewan23Controller::class);
Route::resource('/TernakRuminansia23',Ternakpotong23Controller::class);
Route::resource('/TernakUnggas23',Ternakungga23Controller::class);
Route::resource('/KeamananProduk23',Keamananproduk23Controller::class);
Route::resource('/LayananDukungan23',Layanan23Controller::class);

Route::resource('/LayananManajemenKinerja23',Layanankinerja23Controller::class);

Route::resource('/anggaran_PengendalianPenyakit23',Pengendalianpenyakit23Controller::class);
Route::resource('/anggaran_PenyedianBenih23',Penyediaanbenih23Controller::class);
Route::resource('/anggaran_KesehatanVeteriner23',Kesehatanventeriner23Controller::class);
Route::resource('/anggaran_DukunganManajemen23',Dukunganmanajemen23Controller::class);
Route::resource('/sdm_sdm23',Sdm23Controller::class);

Route::resource('/DetailPenyakitHewan23',Detailpenyakit23Controller::class);
Route::resource('/sdm_dinasluar23',Dinasluar23Controller::class);
Route::resource('/Penyakit_Rabies23',Rabie23Controller::class);
Route::resource('/Penyakit_Avian23',Avian23Controller::class);
Route::resource('/Penyakit_Brucellosis23',Brucellose23Controller::class);
Route::resource('/Penyakit_Anthraxs23',Anthrax23Controller::class);
Route::resource('/Penyakit_HogCholera23',Hcholera23Controller::class);

Route::resource('/Penyakit_Parasiter23',Parasiter23Controller::class);
Route::resource('/LSD23',Lsd23Controller::class);
Route::resource('/Investigasi_Wabah23',Inveswabah23Controller::class);

Route::resource('/Penyakit_HewanLaninnya23',Penyakitlain23Controller::class);
Route::resource('/Penyakit_Asf23',Asf23Controller::class);
Route::resource('/Penyakit_Viral23',Penyakitviral23Controller::class);
Route::resource('/Penyakit_Bakterial23',Penyakitbakterial23Controller::class);
Route::resource('/pengaturan_Penyakit_terakhir23',Penyakit5year23Controller::class);
Route::resource('/masukanBalai23',Masukan23Controller::class);
Route::resource('/data_Pilihan_Penyakit23',Jenispilihanpenyakit23Controller::class);
Route::resource('/Penyakit_Pmk23',Pmk23Controller::class);

Route::resource('/AMR_Nasional23',Amrnasional23Controller::class);
Route::resource('/Keamanan_ProdukHewan23',Keamananprodukhewan23Controller::class);

Route::resource('/kepuasanlayanan_internal23', Kepuasanlayananinternal23Controller::class);







// Route::get('/home', [App\Http\Controllers\th22\HomeController::class, 'index'])->name('home');
