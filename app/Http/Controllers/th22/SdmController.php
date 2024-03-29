<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Sdm;

class SdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_sdmAll= Sdm::all();
        $data_sdm= Sdm::paginate(10);

        return view('admin.th22.sdm.sdm', [
                "title" => 'SDM | SIMANTU'
            ], compact(
            'data_sdm','data_sdmAll',
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
        $model = new Sdm;

        return view('admin.th22.sdm.sdm', [
            "title" => 'SDM | SIMANTU'
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
        if ($request->Nip == null) {
            # code...
            $model = new Sdm;
            $model->Nama = $request->Nama;
            $model->Nip = '-';
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
    
            $model->save();
    
            return redirect('/sdm_sdm')->with('success' , 'Data berhasil ditambah');
        } else {
            # code...
            $model = new Sdm;
            $model->Nama = $request->Nama;
            $model->Nip = $request->Nip;
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
    
            $model->save();
    
            return redirect('/sdm_sdm')->with('success' , 'Data berhasil ditambah');
        }
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
         $model = Sdm::find($id);

    //      return view('admin.th22.sdm.sdm', [
    //          "title" => 'SDM | SIMANTU'
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
        $model = Sdm::find($id);
        $model->Nama = $request->Nama;
        $model->Nip = $request->Nip;
        $model->Jenis = $request->Jenis;
        $model->Sebaran = $request->Sebaran;
        $model->Pendidikan = $request->Pendidikan;
        $model->Jabatan = $request->Jabatan;
        $model->Fungsional = $request->Fungsional;

        $model->save();

        return redirect('/sdm_sdm')->with('success' , 'Data berhasil diUpdate');
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
        $model = Sdm::find($id);
        $model ->delete();

        return redirect('/sdm_sdm')->with('success' , 'Data berhasil diHapus');
    }

    
}
