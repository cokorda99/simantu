<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Piphewan23;
use App\Models\th23\Penyakit23;
use App\Models\th23\Rabie23;
use App\Models\th23\Avian23;
use App\Models\th23\Brucellose23;
use App\Models\th23\Anthrax23;
use App\Models\th23\Hcholera23;
// use App\Models\th23\Penyakitlain23;
use App\Models\th23\Asf23;
use App\Models\th23\Penyakitviral23;
use App\Models\th23\Penyakitbakterial23;
use App\Models\th23\Pmk23;

use App\Models\th23\Lsd23;
use App\Models\th23\Parasiter23;
use App\Models\th23\Inveswabah23;


class Piphewan23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_piphewan= Piphewan23::all();
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

        return view('admin.th23.PengamatanPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_piphewan','data_penyakit','data_rabies','data_avian','data_brucellosis','data_anthraxs','data_hcholera','data_asf','data_penyakitviral','data_penyakitbakterial','data_pmk','data_parasiter','data_lsd','data_inveswabah'
        ));
        // return view('admin.th23.PengamatanPenyakitHewan' , [
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

        return view('admin.th23.PengamatanPenyakitHewan', [
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

        return redirect('/PengamatanPenyakitHewan23')->with('success' , 'Data berhasil ditambah');
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
         $model = Piphewan23::find($id);

    //      return view('admin.th23.PengamatanPenyakitHewan', [
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
        $model = Piphewan23::find($id);
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/PengamatanPenyakitHewan23')->with('success' , 'Data berhasil diUpdate');
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
