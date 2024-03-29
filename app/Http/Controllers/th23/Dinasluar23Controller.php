<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Dinasluar23;

class Dinasluar23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_dinasluar23All= Dinasluar23::all();
        // menangkap data pencarian
        $cari = $request->cari;
        if ($cari == null) {
            # code...
            // mengirim data pegawai ke view index
            $data_dinasluar23= Dinasluar23::paginate(10);

        } else {
            # code...
            // mengambil data dari table pegawai sesuai pencarian data
            $data_dinasluar23 = Dinasluar23::where([
                ['Nama','!=', Null],
                [function ($query) use ($request){
                    if(($cari = $request->cari)){
                        $query->orWhere('Nama', 'LIKE', '%' . $cari . '%')->get();
                    }
                }]
            ])->paginate(10);
        }

        return view('admin.th23.sdm.dinasluar', [
                "title" => 'Dinas Luar | SIMANTU'
            ], compact(
            'data_dinasluar23','data_dinasluar23All',
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
        $model = new Dinasluar23;

        return view('admin.th23.sdm.dinasluar', [
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
        $model = new Dinasluar23;
        $model->Nama = $request->Nama;
        $model->Tujuan = $request->Tujuan;
        $model->Tanggal = $request->Tanggal;
        $model->Kegiatan = $request->Kegiatan;

        $model->save();

        return redirect('/sdm_dinasluar23')->with('success' , 'Data berhasil ditambah');
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
         $model = Dinasluar23::find($id);

    //      return view('admin.th23.sdm.dinasluar', [
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
        $model = Dinasluar23::find($id);
        $model->Nama = $request->Nama;
        $model->Tujuan = $request->Tujuan;
        $model->Tanggal = $request->Tanggal;
        $model->Kegiatan = $request->Kegiatan;

        $model->save();

        return redirect('/sdm_dinasluar23')->with('success' , 'Data berhasil diUpdate');
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
        $model = Dinasluar23::find($id);
        $model ->delete();

        return redirect('/sdm_dinasluar23')->with('success' , 'Data berhasil diHapus');
    }

    
}

