<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Dukunganmanajemen23;

class Dukunganmanajemen23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_dukunganmanajemen23= Dukunganmanajemen23::all();
        return view('admin.th23.serapan_anggaran.DukunganManajemen', [
                "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
            ], compact(
            'data_dukunganmanajemen23',
        ));
        // return view('admin.th23.serapan_anggaran.DukunganManajemen' , [
        //     "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
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
        $model = new Dukunganmanajemen23;

        return view('admin.th23.serapan_anggaran.DukunganManajemen', [
            "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
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
        $model = new Dukunganmanajemen23;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/anggaran_DukunganManajemen23')->with('success' , 'Data berhasil ditambah');
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
         $model = Dukunganmanajemen23::find($id);

    //      return view('admin.th23.serapan_anggaran.DukunganManajemen', [
    //          "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
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
            $question = Dukunganmanajemen23::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/anggaran_DukunganManajemen23');
        }else {
            //other code ( update for unique record ) 
            $model = Dukunganmanajemen23::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->akrual = $request->akrual;
            $model->sp2d = $request->sp2d;
    
            $model->save();
    
            return redirect('/anggaran_DukunganManajemen23')->with('success' , 'Data berhasil diUpdate');
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
