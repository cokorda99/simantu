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


use App\Models\th22\Sbkhewan;
use App\Models\th22\Ternakpotong;
use App\Models\th22\Ternakunggas;

use App\Models\th22\Layanan;

use App\Models\th22\Pengendalianpenyakit;
use App\Models\th22\Penyediaanbenih;
use App\Models\th22\Kesehatanventeriner;
use App\Models\th22\Dukunganmanajemen;

use App\Models\th22\Sdm;



// LOAD MODEL 2023
use App\Models\th23\Piphewan23;
// MODEL TURUNAN PIP HEWAN
use App\Models\th23\Penyakit23;



use App\Models\th23\Sbkhewan23;
use App\Models\th23\Ternakpotong23;
use App\Models\th23\Ternakungga23;



use App\Models\th23\Layanan23;
use App\Models\th23\Layanankinerja23;

use App\Models\th23\Pengendalianpenyakit23;
use App\Models\th23\Penyediaanbenih23;
use App\Models\th23\Kesehatanventeriner23;
use App\Models\th23\Dukunganmanajemen23;
use App\Models\th23\Kepuasaninternal23;

use App\Models\th23\Sdm23;

// use App\Models\th22\Penyakit5year;


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


        $data_sbkhewan= Sbkhewan::all();
        $data_ternakpotong= Ternakpotong::all();
        $data_ternakunggas= Ternakunggas::all();

        $data_layanan= Layanan::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit::all();
        $data_penyediaanbenih= Penyediaanbenih::all();
        $data_kesehatanventeriner= Kesehatanventeriner::all();
        $data_dukunganmanajemen= Dukunganmanajemen::all();

        $data_sdm= Sdm::all();


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
        $data_internal = Kepuasaninternal23::all();
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


        $data_sbkhewan= Sbkhewan23::all();
        $data_ternakpotong= Ternakpotong23::all();
        $data_ternakunggas= Ternakungga23::all();

        $data_layanan= Layanan23::all();
        $data_layanankinerja= Layanankinerja23::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit23::all();
        $data_penyediaanbenih= Penyediaanbenih23::all();
        $data_kesehatanventeriner= Kesehatanventeriner23::all();
        $data_dukunganmanajemen= Dukunganmanajemen23::all();

        $data_sdm= Sdm23::all();




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
        $data_internal = Kepuasaninternal23::all();
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


        $data_sbkhewan= Sbkhewan23::all();
        $data_ternakpotong= Ternakpotong23::all();
        $data_ternakunggas= Ternakungga23::all();
        $data_layanan= Layanan23::all();
        $data_layanankinerja= Layanankinerja23::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit23::all();
        $data_penyediaanbenih= Penyediaanbenih23::all();
        $data_kesehatanventeriner= Kesehatanventeriner23::all();
        $data_dukunganmanajemen= Dukunganmanajemen23::all();

        $data_sdm= Sdm23::all();

        $data_penyakit5year= Penyakit5year::all();
        return view('admin.th24.home', [
            "title" => 'Home | SIMANTU 2024'
            ], compact(
            'data_ikm','data_internal','data_pkhewan','data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd', 'data_inveswabah','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_layanankinerja','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year','data_amrnasional','data_keamananprodukhewan'
        ));
    }
}
