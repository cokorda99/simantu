<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\th22\Ikm;
// use App\Models\th22\pkhewan;
// use App\Models\th22\Piphewan;
// // MODEL TURUNAN PIP HEWAN
// use App\Models\th22\Penyakit;
// use App\Models\th22\Rabies;
// use App\Models\th22\Avian;
// use App\Models\th22\Brucellosis;
// use App\Models\th22\Anthraxs;
// use App\Models\th22\Hcholera;
// use App\Models\th22\Penyakitlain;
// use App\Models\th22\Asf;
// use App\Models\th22\Penyakitviral;
// use App\Models\th22\Penyakitbakterial;
// use App\Models\th22\Pmk;


// use App\Models\th22\Sbkhewan;
// use App\Models\th22\Ternakpotong;
// use App\Models\th22\Ternakunggas;
// use App\Models\th22\Keamananproduk;
// use App\Models\th22\Layanan;

// use App\Models\th22\Pengendalianpenyakit;
// use App\Models\th22\Penyediaanbenih;
// use App\Models\th22\Kesehatanventeriner;
// use App\Models\th22\Dukunganmanajemen;

// use App\Models\th22\Sdm;

// use App\Models\th22\Penyakit5year;


class HomeController extends Controller
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
    public function index()
    {
        // $data_ikm = Ikm::all();
        // $data_pkhewan = pkhewan::all();
        // $data_piphewan= Piphewan::all();
        // // DATA TURUNAN PIP HEWAN 
        // $data_penyakit= Penyakit::all();
        // $data_rabies= Rabies::all();
        // $data_avian= Avian::all();
        // $data_brucellosis= Brucellosis::all();
        // $data_anthraxs= Anthraxs::all();
        // $data_hcholera= Hcholera::all();
        // $data_penyakitlain= Penyakitlain::all();
        // $data_asf= Asf::all();
        // $data_penyakitviral= Penyakitviral::all();
        // $data_penyakitbakterial= Penyakitbakterial::all();
        // $data_pmk= Pmk::all();


        // $data_sbkhewan= Sbkhewan::all();
        // $data_ternakpotong= Ternakpotong::all();
        // $data_ternakunggas= Ternakunggas::all();
        // $data_keamananproduk= Keamananproduk::all();
        // $data_layanan= Layanan::all();

        // $data_pengendalianpenyakit= Pengendalianpenyakit::all();
        // $data_penyediaanbenih= Penyediaanbenih::all();
        // $data_kesehatanventeriner= Kesehatanventeriner::all();
        // $data_dukunganmanajemen= Dukunganmanajemen::all();

        // $data_sdm= Sdm::all();

        // // $Kabupatenklik ='Bangli';

        // $data_penyakit5year= Penyakit5year::all();
        // $data_penyakit5year= Penyakit5year::all()->where('Kabupaten',$Kabupatenklik);

        // return view('admin.th22.pilihversi', [
        //     "title" => 'Home | SIMANTU'
        //     ], compact(
        //     'data_ikm','data_pkhewan','data_piphewan','data_penyakit','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_sbkhewan','data_ternakpotong','data_ternakunggas','data_keamananproduk','data_layanan','data_pengendalianpenyakit','data_penyediaanbenih','data_kesehatanventeriner','data_dukunganmanajemen', 'data_sdm' ,'data_penyakit5year'
        // ));

        return view('admin.th22.pilihversi', [
            "title" => 'Home | SIMANTU'
            ]);
    }
}
