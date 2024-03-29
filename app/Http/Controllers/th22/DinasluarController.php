<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Dinasluar;

class DinasluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_dinasluarAll= Dinasluar::all();
        $data_dinasluar= Dinasluar::paginate(10);

        return view('admin.th22.sdm.dinasluar', [
                "title" => 'Dinas Luar | SIMANTU'
            ], compact(
            'data_dinasluar','data_dinasluarAll',
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
        $model = new Dinasluar;

        return view('admin.th22.sdm.dinasluar', [
            "title" => 'Dinas Luar | SIMANTU'
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
        $model = new Dinasluar;
        $model->Nama = $request->Nama;
        $model->Tujuan = $request->Tujuan;
        $model->Tanggal = $request->Tanggal;
        $model->Kegiatan = $request->Kegiatan;

        $model->save();

        return redirect('/sdm_dinasluar')->with('success' , 'Data berhasil ditambah');
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
         $model = Dinasluar::find($id);

    //      return view('admin.th22.sdm.dinasluar', [
    //          "title" => 'Dinas Luar | SIMANTU'
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
        $model = Dinasluar::find($id);
        $model->Nama = $request->Nama;
        $model->Tujuan = $request->Tujuan;
        $model->Tanggal = $request->Tanggal;
        $model->Kegiatan = $request->Kegiatan;

        $model->save();

        return redirect('/sdm_dinasluar')->with('success' , 'Data berhasil diUpdate');
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
        $model = Dinasluar::find($id);
        $model ->delete();

        return redirect('/sdm_dinasluar')->with('success' , 'Data berhasil diHapus');
    }

    
}

