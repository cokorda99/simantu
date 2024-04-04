<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Piphewan;
use App\Models\penyakits\Rabies;
use App\Models\th22\Avian;
use App\Models\th22\Brucellosis;
use App\Models\th22\Anthraxs;
use App\Models\th22\Hcholera;
use App\Models\th22\Penyakitlain;
use App\Models\th22\Asf;
use App\Models\th22\Penyakitviral;
use App\Models\th22\Penyakitbakterial;
use App\Models\th22\Pmk;


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
        $data_avian= Avian::all();
        $data_brucellosis= Brucellosis::all();
        $data_anthraxs= Anthraxs::all();
        $data_hcholera= Hcholera::all();
        $data_penyakitlain= Penyakitlain::all();
        $data_asf= Asf::all();
        $data_penyakitviral= Penyakitviral::all();
        $data_penyakitbakterial= Penyakitbakterial::all();
        $data_pmk= Pmk::all();

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
        $data_avian= Avian::all();
        $data_brucellosis= Brucellosis::all();
        $data_anthraxs= Anthraxs::all();
        $data_hcholera= Hcholera::all();
        $data_penyakitlain= Penyakitlain::all();
        $data_asf= Asf::all();
        $data_penyakitviral= Penyakitviral::all();
        $data_penyakitbakterial= Penyakitbakterial::all();
        $data_pmk= Pmk::all();

        return view('admin.th23.PengamatanPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk'
        ));
    }
    public function index24()
    {
        //
        $tahun ='2024';
        $data_piphewan= Piphewan::all();
        $data_rabies = Rabies::where('Tahun', $tahun)->get();
        $data_avian= Avian::all();
        $data_brucellosis= Brucellosis::all();
        $data_anthraxs= Anthraxs::all();
        $data_hcholera= Hcholera::all();
        $data_penyakitlain= Penyakitlain::all();
        $data_asf= Asf::all();
        $data_penyakitviral= Penyakitviral::all();
        $data_penyakitbakterial= Penyakitbakterial::all();
        $data_pmk= Pmk::all();

        return view('admin.th24.PengamatanPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_piphewan','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_penyakitlain','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk'
        ));
        // return view('admin.th24.PengamatanPenyakitHewan' , [
        //     "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Piphewan;

        return view('admin.th22.PengamatanPenyakitHewan', [
            "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
        ], compact(
        'model',
    ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $model = new Piphewan;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/PengamatanPenyakitHewan')->with('success' , 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //
         $model = Piphewan::find($id);

    //      return view('admin.th22.PengamatanPenyakitHewan', [
    //          "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
    //      ], compact(
    //      'model',
    //  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $model = Piphewan::find($id);
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/PengamatanPenyakitHewan')->with('success' , 'Data berhasil diUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
