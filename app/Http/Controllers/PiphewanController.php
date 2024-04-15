<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Piphewan;
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
// TAMBAHAN TURUNAN PENYAKIT2023
use App\Models\penyakits\Parasiter;
use App\Models\penyakits\Lsd;
use App\Models\penyakits\Inveswabah;



class PiphewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index22()
    {
        $tahun ='2022';
        $data_piphewan= Piphewan::all();
        $data_rabies = Rabies::where('Tahun', $tahun)->get();
        $data_avian= Avian::where('Tahun', $tahun)->get();
        $data_brucellosis= Brucellosis::where('Tahun', $tahun)->get();
        $data_anthraxs= Anthraxs::where('Tahun', $tahun)->get();
        $data_hcholera= Hcholera::where('Tahun', $tahun)->get();
        $data_penyakitlain= Penyakitlain::where('Tahun', $tahun)->get();
        $data_asf= Asf::where('Tahun', $tahun)->get();
        $data_penyakitviral= Penyakitviral::where('Tahun', $tahun)->get();
        $data_penyakitbakterial= Penyakitbakterial::where('Tahun', $tahun)->get();
        $data_pmk= Pmk::where('Tahun', $tahun)->get();

        return view('admin.th22.PengamatanPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk'
        ));
    }
    public function index23()
    {
        //
        $tahun ='2023';
        $data_piphewan= Piphewan::all();
        $data_rabies = Rabies::where('Tahun', $tahun)->get();
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

        return view('admin.th23.PengamatanPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd' , 'data_inveswabah','tahun'
        ));
    }
    public function index24()
    {
        //
        $tahun ='2024';
        $data_piphewan= Piphewan::all();
        $data_rabies = Rabies::where('Tahun', $tahun)->get();
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

        return view('admin.th24.PengamatanPenyakitHewan', [
            "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
        ], compact(
        'data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter', 'data_lsd' , 'data_inveswabah','tahun'
    ));
    }
}
