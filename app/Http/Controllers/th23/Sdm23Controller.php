<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Sdm23;

class Sdm23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_sdmAll23= Sdm23::all();

        // menangkap data pencarian
        $cari = $request->cari;
        if ($cari == null) {
            # code...
            // mengirim data pegawai ke view index
            $data_sdm23= Sdm23::paginate(10);

        } else {
            # code...
            // mengambil data dari table pegawai sesuai pencarian data
            $data_sdm23 = Sdm23::where([
                ['Nama','!=', Null],
                [function ($query) use ($request){
                    if(($cari = $request->cari)){
                        $query->orWhere('Nama', 'LIKE', '%' . $cari . '%')->get();
                    }
                }]
            ])->paginate(10);
        }

        return view('admin.th23.sdm.sdm', [
            "title" => 'SDM | SIMANTU'
        ], compact(
        'data_sdm23','data_sdmAll23',
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
        $model = new Sdm23;

        return view('admin.th23.sdm.sdm', [
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
            $model = new Sdm23;
            $model->Nama = $request->Nama;
            $model->Nip = '-';
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
    
            $model->save();
    
            return redirect('/sdm_sdm23')->with('success' , 'Data berhasil ditambah');
        } else {
            # code...
            $model = new Sdm23;
            $model->Nama = $request->Nama;
            $model->Nip = $request->Nip;
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
    
            $model->save();
    
            return redirect('/sdm_sdm23')->with('success' , 'Data berhasil ditambah');
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
         $model = Sdm23::find($id);

    //      return view('admin.th23.sdm.sdm', [
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
        $model = Sdm23::find($id);
        $model->Nama = $request->Nama;
        $model->Nip = $request->Nip;
        $model->Jenis = $request->Jenis;
        $model->Sebaran = $request->Sebaran;
        $model->Pendidikan = $request->Pendidikan;
        $model->Jabatan = $request->Jabatan;
        $model->Fungsional = $request->Fungsional;

        $model->save();

        return redirect('/sdm_sdm23')->with('success' , 'Data berhasil diUpdate');
    }

    
    // public function cari(Request $request)
	// {

 
	// }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = Sdm23::find($id);
        $model ->delete();

        return redirect('/sdm_sdm23')->with('success' , 'Data berhasil diHapus');
    }

    
}
