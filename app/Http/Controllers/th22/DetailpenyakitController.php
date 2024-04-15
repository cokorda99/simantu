<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Detailpenyakit;
use App\Models\th22\Penyakit;
use App\Models\th22\Piphewan;

class DetailpenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penyakitallAll= Detailpenyakit::all();
        $data_penyakit= Penyakit::all();
        $data_bulan= Piphewan::all();
        $data_penyakitall= Detailpenyakit::paginate(5);

        return view('admin.th22.DetailPenyakitHewan', [
                "title" => 'Pengamatan dan Identifikasi Penyakit Hewan | SIMANTU'
            ], compact(
            'data_penyakitall','data_penyakitallAll','data_penyakit','data_bulan',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Detailpenyakit;

        return view('admin.th22.DetailPenyakitHewan', [
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
        $model = new Detailpenyakit;
        $model->id_penyakit = $request->id_penyakit;
        $model->Penyakit = $request->Penyakit;
        $model->id_bulan = $request->id_bulan;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;


        $model->save();

        return redirect('/DetailPenyakitHewan')->with('success' , 'Data berhasil ditambah');
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
         $model = Detailpenyakit::find($id);

    //      return view('admin.th22.DetailPenyakitHewan', [
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
        $model = Detailpenyakit::find($id);
        $model->id_penyakit = $request->id_penyakit;
        $model->Penyakit = $request->Penyakit;
        $model->id_bulan = $request->id_bulan;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/DetailPenyakitHewan')->with('success' , 'Data berhasil diUpdate');
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
        $model = Detailpenyakit::find($id);
        $model ->delete();

        return redirect('/DetailPenyakitHewan')->with('success' , 'Data berhasil diHapus');
    }

    
}