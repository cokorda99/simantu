<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Masukan;

class MasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_masukan = Masukan::all();

        // return $data_masukan;
        return view('admin.th22.masukanKepalaBalai', [
                "title" => 'Masukan Kepala Balai | SIMANTU'
            ], compact(
            'data_masukan',
        ));
        // return view('admin.th22.masukanKepalaBalai' , [
        //     "title" => 'Masukan Kepala Balai | SIMANTU'
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
        $model = new Masukan;

        return view('admin.th22.masukanKepalaBalai', [
            "title" => 'Masukan Kepala Balai | SIMANTU'
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
        $model = new Masukan;
        $model->Tanggal = $request->Tanggal;
        $model->Bulan = $request->Bulan;
        $model->Tahun = $request->Tahun;
        $model->Judul = $request->Judul;
        $model->Isi_Masukan = $request->Isi_Masukan;



        $model->save();

        return redirect('/masukanBalai')->with('success' , 'Data berhasil ditambah');
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
         $model = Masukan::find($id);

    //      return view('admin.th22.masukanKepalaBalai', [
    //          "title" => 'Masukan Kepala Balai | SIMANTU'
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
        $model = Masukan::find($id);
        $model->Tanggal = $request->Tanggal;
        $model->Bulan = $request->Bulan;
        $model->Tahun = $request->Tahun;
        $model->Judul = $request->Judul;
        $model->Isi_Masukan = $request->Isi_Masukan;

        $model->save();
        return redirect('/masukanBalai');;
        // return redirect('/masukanBalai')->with('message' , 'Data berhasil diUpdate');
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
        $model = Masukan::find($id);
        $model ->delete();

        return redirect('/masukanBalai')->with('success' , 'Data berhasil diHapus');
    }
}
