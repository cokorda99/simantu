<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Pengendalianpenyakit;

class PengendalianpenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_pengendalianpenyakit= Pengendalianpenyakit::all();
        return view('admin.th22.serapan_anggaran.PengendalianPenyakit', [
                "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
            ], compact(
            'data_pengendalianpenyakit',
        ));
        // return view('admin.th22.serapan_anggaran.PengendalianPenyakit' , [
        //     "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
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
        $model = new Pengendalianpenyakit;

        return view('admin.th22.serapan_anggaran.PengendalianPenyakit', [
            "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
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
        $model = new Pengendalianpenyakit;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/anggaran_PengendalianPenyakit')->with('success' , 'Data berhasil ditambah');
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
         $model = Pengendalianpenyakit::find($id);

    //      return view('admin.th22.serapan_anggaran.PengendalianPenyakit', [
    //          "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
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
            $question = Pengendalianpenyakit::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/anggaran_PengendalianPenyakit');
        }else {
            //other code ( update for unique record ) 
            $model = Pengendalianpenyakit::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/anggaran_PengendalianPenyakit')->with('success' , 'Data berhasil diUpdate');
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

