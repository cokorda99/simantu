<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ikm;
use App\Models\pkhewan;
use App\Models\th22\Piphewan;
// MODEL TURUNAN PIP HEWAN
use App\Models\th22\Penyakit;
use App\Models\th22\Rabies;
use App\Models\th22\Avian;
use App\Models\th22\Brucellosis;
use App\Models\th22\Anthraxs;
use App\Models\th22\Hcholera;
use App\Models\th22\Penyakitlain;
use App\Models\th22\Asf;
use App\Models\th22\Penyakitviral;
use App\Models\th22\Penyakitbakterial;
use App\Models\th22\Pmk;


use App\Models\th22\Sbkhewan;
use App\Models\th22\Ternakpotong;
use App\Models\th22\Ternakunggas;
use App\Models\th22\Keamananproduk;
use App\Models\th22\Layanan;

use App\Models\th22\Pengendalianpenyakit;
use App\Models\th22\Penyediaanbenih;
use App\Models\th22\Kesehatanventeriner;
use App\Models\th22\Dukunganmanajemen;

use App\Models\th22\Sdm;

use App\Models\th22\Penyakit5year;


// LOAD MODEL 2023
use App\Models\th23\Piphewan23;
// MODEL TURUNAN PIP HEWAN
use App\Models\th23\Penyakit23;
use App\Models\th23\Rabie23;
use App\Models\th23\Avian23;
use App\Models\th23\Brucellose23;
use App\Models\th23\Anthrax23;
use App\Models\th23\Hcholera23;
use App\Models\th23\Penyakitlain23;
use App\Models\th23\Asf23;
use App\Models\th23\Penyakitviral23;
use App\Models\th23\Penyakitbakterial23;
use App\Models\th23\Pmk23;

use App\Models\th23\Lsd23;
use App\Models\th23\Parasiter23;
use App\Models\th23\Inveswabah23;


use App\Models\th23\Sbkhewan23;
use App\Models\th23\Ternakpotong23;
use App\Models\th23\Ternakungga23;
use App\Models\th23\Keamananproduk23;

// MODEL TURUNAN KEAMANAN PRODUK
use App\Models\th23\Keamananprodukhewan23;
use App\Models\th23\Amrnasional23;


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
        $data_penyakit= Penyakit::all();
        $data_rabies= Rabies::all();
        $data_avian= Avian::all();
        $data_brucellosis= Brucellosis::all();
        $data_anthraxs= Anthraxs::all();
        $data_hcholera= Hcholera::all();
        $data_penyakitlain= Penyakitlain::all();
        $data_asf= Asf::all();
        $data_penyakitviral= Penyakitviral::all();
        $data_penyakitbakterial= Penyakitbakterial::all();
        $data_pmk= Pmk::all();


        $data_sbkhewan= Sbkhewan::all();
        $data_ternakpotong= Ternakpotong::all();
        $data_ternakunggas= Ternakunggas::all();
        $data_keamananproduk= Keamananproduk::all();
        $data_layanan= Layanan::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit::all();
        $data_penyediaanbenih= Penyediaanbenih::all();
        $data_kesehatanventeriner= Kesehatanventeriner::all();
        $data_dukunganmanajemen= Dukunganmanajemen::all();

        $data_sdm= Sdm::all();

        // $Kabupatenklik ='Bangli';

        $data_penyakit5year= Penyakit5year::all();
        // $data_penyakit5year= Penyakit5year::all()->where('Kabupaten',$Kabupatenklik);

        return view('admin.th22.home', [
            "title" => 'Home | SIMANTU 2022'
            ], compact(
            'data_ikm','data_pkhewan','data_piphewan','data_penyakit','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year'
        ));
    }

    public function index23()
    {
        $tahun ='2023';
        $data_ikm = Ikm::where('Tahun', $tahun)->get();
        $data_internal = Kepuasaninternal23::all();
        $data_pkhewan = pkhewan23::all();
        $data_piphewan= Piphewan23::all();
        // DATA TURUNAN PIP HEWAN 
        $data_penyakit= Penyakit23::all();
        $data_rabies= Rabie23::all();
        $data_avian= Avian23::all();
        $data_brucellosis= Brucellose23::all();
        $data_anthraxs= Anthrax23::all();
        $data_hcholera= Hcholera23::all();
        // $data_penyakitlain= Penyakitlain23::all();
        $data_asf= Asf23::all();
        $data_penyakitviral= Penyakitviral23::all();
        $data_penyakitbakterial= Penyakitbakterial23::all();
        $data_pmk= Pmk23::all();

        $data_parasiter= Parasiter23::all();
        $data_lsd= Lsd23::all();
        $data_inveswabah= Inveswabah23::all();


        $data_sbkhewan= Sbkhewan23::all();
        $data_ternakpotong= Ternakpotong23::all();
        $data_ternakunggas= Ternakungga23::all();
        $data_keamananproduk= Keamananproduk23::all();
        $data_layanan= Layanan23::all();
        $data_layanankinerja= Layanankinerja23::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit23::all();
        $data_penyediaanbenih= Penyediaanbenih23::all();
        $data_kesehatanventeriner= Kesehatanventeriner23::all();
        $data_dukunganmanajemen= Dukunganmanajemen23::all();

        $data_sdm= Sdm23::all();

        $data_amrnasional23= Amrnasional23::all();
        $data_keamananprodukhewan23= Keamananprodukhewan23::all();

        // $Kabupatenklik ='Bangli';

        $data_penyakit5year= Penyakit5year::all();
        // $data_penyakit5year= Penyakit5year23::all()->where('Kabupaten',$Kabupatenklik);

        return view('admin.th23.home', [
            "title" => 'Home | SIMANTU 2023'
            ], compact(
            'data_ikm','data_internal','data_pkhewan','data_piphewan','data_penyakit','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd', 'data_inveswabah','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_layanankinerja','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year','data_amrnasional23','data_keamananprodukhewan23'
        ));
    }

    public function index24()
    {
        $tahun ='2024';
        $data_ikm = Ikm::where('Tahun', $tahun)->get();
        $data_internal = Kepuasaninternal23::all();
        $data_pkhewan = pkhewan23::all();
        $data_piphewan= Piphewan23::all();
        // DATA TURUNAN PIP HEWAN 
        $data_penyakit= Penyakit23::all();
        $data_rabies= Rabie23::all();
        $data_avian= Avian23::all();
        $data_brucellosis= Brucellose23::all();
        $data_anthraxs= Anthrax23::all();
        $data_hcholera= Hcholera23::all();
        // $data_penyakitlain= Penyakitlain23::all();
        $data_asf= Asf23::all();
        $data_penyakitviral= Penyakitviral23::all();
        $data_penyakitbakterial= Penyakitbakterial23::all();
        $data_pmk= Pmk23::all();

        $data_parasiter= Parasiter23::all();
        $data_lsd= Lsd23::all();
        $data_inveswabah= Inveswabah23::all();


        $data_sbkhewan= Sbkhewan23::all();
        $data_ternakpotong= Ternakpotong23::all();
        $data_ternakunggas= Ternakungga23::all();
        $data_keamananproduk= Keamananproduk23::all();
        $data_layanan= Layanan23::all();
        $data_layanankinerja= Layanankinerja23::all();

        $data_pengendalianpenyakit= Pengendalianpenyakit23::all();
        $data_penyediaanbenih= Penyediaanbenih23::all();
        $data_kesehatanventeriner= Kesehatanventeriner23::all();
        $data_dukunganmanajemen= Dukunganmanajemen23::all();

        $data_sdm= Sdm23::all();

        $data_amrnasional23= Amrnasional23::all();
        $data_keamananprodukhewan23= Keamananprodukhewan23::all();

        // $Kabupatenklik ='Bangli';

        $data_penyakit5year= Penyakit5year::all();
        // $data_penyakit5year= Penyakit5year23::all()->where('Kabupaten',$Kabupatenklik);

        return view('admin.th24.home', [
            "title" => 'Home | SIMANTU 2024'
            ], compact(
            'data_ikm','data_internal','data_pkhewan','data_piphewan','data_penyakit','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd', 'data_inveswabah','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_layanankinerja','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year','data_amrnasional23','data_keamananprodukhewan23'
        ));
    }
}
