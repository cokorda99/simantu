<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ikm;
use App\Models\pkhewan;
use App\Models\Piphewan;
// MODEL TURUNAN PIP HEWAN
use App\Models\penyakits\Rabies;
use App\Models\penyakits\Avian;
use App\Models\penyakits\Brucellosis;
use App\Models\penyakits\Anthraxs;
use App\Models\penyakits\Hcholera;
use App\Models\penyakits\Penyakitlain;
use App\Models\penyakits\Asf;
use App\Models\penyakits\Pmk;
use App\Models\penyakits\Penyakitviral;
use App\Models\penyakits\Penyakitbakterial;
use App\Models\penyakits\Parasiter;
use App\Models\penyakits\Lsd;
use App\Models\penyakits\Inveswabah;


use App\Models\Keamananproduk;
use App\Models\keamananproduk\Amrnasional;
use App\Models\keamananproduk\Keamananprodukhewan;

use App\Models\Penyakit5year;
use App\Models\Sdm;

use App\Models\anggaran\Pengendalianpenyakit;
use App\Models\anggaran\Penyediaanbenih;
use App\Models\anggaran\Kesehatanventeriner;
use App\Models\anggaran\Dukunganmanajemen;


use App\Models\Ternakpotong;
use App\Models\Sbkhewan;
use App\Models\Ternakunggas;
use App\Models\Layanan;
// LOAD MODEL 2023
use App\Models\Layanankinerja;
use App\Models\Kepuasaninternal;

// LOAD MODEL 2024
use App\Models\Layananperkantoran;
use App\Models\Layananperencanaan;
use App\Models\Layananpemantauan;
use App\Models\Layanankeuangan;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index22()
    {
        $tahun ='2022';
        $data_ikm = Ikm::where('Tahun', $tahun)->get();
        $data_pkhewan = pkhewan::where('Tahun', $tahun)->get();
        $data_piphewan= Piphewan::all();
        // DATA TURUNAN PIP HEWAN 
        $data_rabies= Rabies::where('Tahun', $tahun)->get();
        $data_avian= Avian::where('Tahun', $tahun)->get();
        $data_brucellosis= Brucellosis::where('Tahun', $tahun)->get();
        $data_anthraxs= Anthraxs::where('Tahun', $tahun)->get();
        $data_hcholera= Hcholera::where('Tahun', $tahun)->get();
        $data_penyakitlain= Penyakitlain::where('Tahun', $tahun)->get();
        $data_asf= Asf::where('Tahun', $tahun)->get();
        $data_penyakitviral= Penyakitviral::where('Tahun', $tahun)->get();
        $data_penyakitbakterial= Penyakitbakterial::where('Tahun', $tahun)->get();
        $data_pmk= Pmk::where('Tahun', $tahun)->get();

        $data_keamananproduk= Keamananproduk::where('Tahun', $tahun)->get();
        $data_sdm= Sdm::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
        $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
        $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
        $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();

        $data_ternakpotong= Ternakpotong::where('Tahun', $tahun)->get();


        $data_sbkhewan= Sbkhewan::where('Tahun', $tahun)->get();
        $data_ternakunggas= Ternakunggas::where('Tahun', $tahun)->get();
        $data_layanan= Layanan::where('Tahun', $tahun)->get();

        


        $data_penyakit5year= Penyakit5year::all();

        return view('admin.th22.home', [
            "title" => 'Home | SIMANTU 2022'
            ], compact(
            'data_ikm','data_pkhewan','data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year'
        ));
    }

    public function index23()
    {
        $tahun ='2023';
        $data_ikm = Ikm::where('Tahun', $tahun)->get();
        $data_internal = Kepuasaninternal::where('Tahun', $tahun)->get();
        $data_pkhewan = pkhewan::where('Tahun', $tahun)->get();
        $data_piphewan= Piphewan::all();
        // DATA TURUNAN PIP HEWAN 
        $data_rabies= Rabies::where('Tahun', $tahun)->get();
        $data_avian= Avian::where('Tahun', $tahun)->get();
        $data_brucellosis= Brucellosis::where('Tahun', $tahun)->get();
        $data_anthraxs= Anthraxs::where('Tahun', $tahun)->get();
        $data_hcholera= Hcholera::where('Tahun', $tahun)->get();
        $data_penyakitlain= Penyakitlain::where('Tahun', $tahun)->get();
        $data_asf= Asf::where('Tahun', $tahun)->get();
        $data_penyakitviral= Penyakitviral::where('Tahun', $tahun)->get();
        $data_penyakitbakterial= Penyakitbakterial::where('Tahun', $tahun)->get();
        $data_pmk= Pmk::where('Tahun', $tahun)->get();
        $data_parasiter= Parasiter::where('Tahun', $tahun)->get();
        $data_lsd= Lsd::where('Tahun', $tahun)->get();
        $data_inveswabah= Inveswabah::where('Tahun', $tahun)->get();


        $data_keamananproduk= Keamananproduk::where('Tahun', $tahun)->get();
        $data_amrnasional= Amrnasional::where('Tahun', $tahun)->get();
        $data_keamananprodukhewan= Keamananprodukhewan::where('Tahun', $tahun)->get();
        $data_sdm= Sdm::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
        $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
        $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
        $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();


        $data_ternakpotong= Ternakpotong::where('Tahun', $tahun)->get();



        $data_sbkhewan= Sbkhewan::where('Tahun', $tahun)->get();
        $data_ternakunggas= Ternakunggas::where('Tahun', $tahun)->get();
        $data_layanan= Layanan::where('Tahun', $tahun)->get();
        $data_layanankinerja= Layanankinerja::where('Tahun', $tahun)->get();

        $data_penyakit5year= Penyakit5year::all();

        return view('admin.th23.home', [
            "title" => 'Home | SIMANTU 2023'
            ], compact(
            'data_ikm','data_internal','data_pkhewan','data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd', 'data_inveswabah','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_layanankinerja','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year','data_amrnasional','data_keamananprodukhewan'
        ));
    }

    public function index24()
    {
        $tahun ='2024';
        $data_ikm = Ikm::where('Tahun', $tahun)->get();
        $data_internal = Kepuasaninternal::where('Tahun', $tahun)->get();
        $data_pkhewan = pkhewan::where('Tahun', $tahun)->get();
        $data_piphewan= Piphewan::all();
        // DATA TURUNAN PIP HEWAN 
        $data_rabies= Rabies::where('Tahun', $tahun)->get();
        $data_avian= Avian::where('Tahun', $tahun)->get();
        $data_brucellosis= Brucellosis::where('Tahun', $tahun)->get();
        $data_anthraxs= Anthraxs::where('Tahun', $tahun)->get();
        $data_hcholera= Hcholera::where('Tahun', $tahun)->get();
        $data_penyakitlain= Penyakitlain::where('Tahun', $tahun)->get();
        $data_asf= Asf::where('Tahun', $tahun)->get();
        $data_penyakitviral= Penyakitviral::where('Tahun', $tahun)->get();
        $data_penyakitbakterial= Penyakitbakterial::where('Tahun', $tahun)->get();
        $data_pmk= Pmk::where('Tahun', $tahun)->get();
        $data_parasiter= Parasiter::where('Tahun', $tahun)->get();
        $data_lsd= Lsd::where('Tahun', $tahun)->get();
        $data_inveswabah= Inveswabah::where('Tahun', $tahun)->get();

        $data_keamananproduk= Keamananproduk::where('Tahun', $tahun)->get();
        $data_amrnasional= Amrnasional::where('Tahun', $tahun)->get();
        $data_keamananprodukhewan= Keamananprodukhewan::where('Tahun', $tahun)->get();

        $data_sdm= Sdm::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
        $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
        $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
        $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();
        $data_ternakpotong= Ternakpotong::where('Tahun', $tahun)->get();


        $data_sbkhewan= Sbkhewan::where('Tahun', $tahun)->get();
        $data_ternakunggas= Ternakunggas::where('Tahun', $tahun)->get();
        $data_layanan= Layanan::where('Tahun', $tahun)->get();
        $data_layanankinerja= Layanankinerja::where('Tahun', $tahun)->get();

        $data_layananperkantoran= Layananperkantoran::where('Tahun', $tahun)->get();
        $data_layananperencanaan= Layananperencanaan::where('Tahun', $tahun)->get();
        $data_layananpemantauan= Layananpemantauan::where('Tahun', $tahun)->get();
        $data_layanankeuangan= Layanankeuangan::where('Tahun', $tahun)->get();


        $data_penyakit5year= Penyakit5year::all();
        return view('admin.th24.home', [
            "title" => 'Home | SIMANTU 2024'
            ], compact(
            'data_ikm','data_internal','data_pkhewan','data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd', 'data_inveswabah','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_layanankinerja','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year','data_amrnasional','data_keamananprodukhewan','data_layananperkantoran','data_layananperencanaan','data_layananpemantauan','data_layanankeuangan'
        ));
    }
}
