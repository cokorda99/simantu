<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Jenispilihanpenyakit;

class Jenispilihanpenyakit23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_jenispenyakit= Jenispilihanpenyakit::all();
        return view('admin.th23.penyakit5year.jenispenyakit_crud', [
                "title" => 'Data Jenis Penyakit | SIMANTU'
            ], compact(
            'data_jenispenyakit',
        ));
        // return view('admin.th23.penyakit5year.jenispenyakit_crud' , [
        //     "title" => 'Data Jenis Penyakit | SIMANTU'
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
        $model = new Jenispilihanpenyakit;

        return view('admin.th23.penyakit5year.jenispenyakit_crud', [
            "title" => 'Data Jenis Penyakit | SIMANTU'
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
        $model = new Jenispilihanpenyakit;
        $model->Nama_Penyakit= $request->Nama_Penyakit;

        $model->save();

        return redirect('/data_Pilihan_Penyakit23')->with('success' , 'Data berhasil ditambah');
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
         $model = Jenispilihanpenyakit::find($id);

    //      return view('admin.th23.penyakit5year.jenispenyakit_crud', [
    //          "title" => 'Data Jenis Penyakit | SIMANTU'
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
        $model = Jenispilihanpenyakit::find($id);
        $model->Nama_Penyakit= $request->Nama_Penyakit;
        $model->save();
        return redirect('/data_Pilihan_Penyakit23')->with('success' , 'Data berhasil diUpdate');

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

        $model = Jenispilihanpenyakit::find($id);
        $model ->delete();

        return redirect('/data_Pilihan_Penyakit23')->with('success' , 'Data berhasil diHapus');
    }
}