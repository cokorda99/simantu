<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Penyakit5year;
use App\Models\th22\Jenispilihanpenyakit;

class Penyakit5yearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_penyakit5year= Penyakit5year::all();
        $data_jenispenyakit= Jenispilihanpenyakit::all();
        return view('admin.th22.penyakit5year.penyakit_crud', [
                "title" => 'Pengaturan Penyakit 5 Tahun Terakhirt | SIMANTU'
            ], compact(
            'data_penyakit5year','data_jenispenyakit'
        ));
        // return view('admin.th22.penyakit5year.penyakit_crud' , [
        //     "title" => 'Pengaturan Penyakit 5 Tahun Terakhirt | SIMANTU'
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
        $model = new Penyakit5year;

        return view('admin.th22.penyakit5year.penyakit_crud', [
            "title" => 'Pengaturan Penyakit 5 Tahun Terakhirt | SIMANTU'
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
        $model = new Penyakit5year;
        $model->Kabupaten= $request->Kabupaten;
        $model->Penyakit = $request->Penyakit;
        $model->Th2018 = $request->Th2018;
        $model->Th2019 = $request->Th2019;
        $model->Th2020 = $request->Th2020;
        $model->Th2021 = $request->Th2021;
        $model->Th2022 = $request->Th2022;

        $model->save();

        return redirect('/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil ditambah');
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
         $model = Penyakit5year::find($id);

    //      return view('admin.th22.penyakit5year.penyakit_crud', [
    //          "title" => 'Pengaturan Penyakit 5 Tahun Terakhirt | SIMANTU'
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
        //other code ( update for unique record ) 
        $model = Penyakit5year::find($id);
        $model->Kabupaten= $request->Kabupaten;
        $model->Penyakit = $request->Penyakit;
        $model->Th2018 = $request->Th2018;
        $model->Th2019 = $request->Th2019;
        $model->Th2020 = $request->Th2020;
        $model->Th2021 = $request->Th2021;
        $model->Th2022 = $request->Th2022;
        $model->save();
        return redirect('/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diUpdate');

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

        $model = Penyakit5year::find($id);
        $model ->delete();

        return redirect('/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diHapus');
    }
}
