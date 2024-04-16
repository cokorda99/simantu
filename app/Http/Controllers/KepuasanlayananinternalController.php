<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kepuasaninternal;

class Kepuasanlayananinternal23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_internal= Kepuasaninternal::all();
        return view('admin.th23.IndeksKepuasanLayananInternal', [
                "title" => 'Indeks Kepuasan Layanan Internal | SIMANTU'
            ], compact(
            'data_internal',
        ));
        // return view('admin.th23.serapan_anggaran.KesehatanVeteriner' , [
        //     "title" => 'Kesehatan Veteriner | SIMANTU'
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
        $model = new Kepuasaninternal;

        return view('admin.th23.IndeksKepuasanLayananInternal', [
            "title" => 'Indeks Kepuasan Layanan Internal | SIMANTU'
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
        $model = new Kepuasaninternal;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/kepuasanlayanan_internal')->with('success' , 'Data berhasil ditambah');
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
         $model = Kepuasaninternal::find($id);

    //      return view('admin.th23.serapan_anggaran.KesehatanVeteriner', [
    //          "title" => 'Kesehatan Veteriner | SIMANTU'
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

        if($request->get('forUpdateAll') == "forUpdateAllValue"){
            $question = Kepuasaninternal::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/kepuasanlayanan_internal');
        }else {
            //other code ( update for unique record ) 
            $model = Kepuasaninternal::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
            // $model->akrual = $request->akrual;
            // $model->sp2d = $request->sp2d;
    
    
            $model->save();
            return redirect('/kepuasanlayanan_internal');;
    
            // return redirect('/kepuasanlayanan_internal')->with('success' , 'Data berhasil diUpdate');;
        }
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
