<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Kesehatanventeriner;

class KesehatanventerinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_kesehatanventeriner= Kesehatanventeriner::all();
        return view('admin.th22.serapan_anggaran.KesehatanVeteriner', [
                "title" => 'Kesehatan Veteriner | SIMANTU'
            ], compact(
            'data_kesehatanventeriner',
        ));
        // return view('admin.th22.serapan_anggaran.KesehatanVeteriner' , [
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
        $model = new Kesehatanventeriner;

        return view('admin.th22.serapan_anggaran.KesehatanVeteriner', [
            "title" => 'Kesehatan Veteriner | SIMANTU'
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
        $model = new Kesehatanventeriner;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/anggaran_KesehatanVeteriner')->with('success' , 'Data berhasil ditambah');
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
         $model = Kesehatanventeriner::find($id);

    //      return view('admin.th22.serapan_anggaran.KesehatanVeteriner', [
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
            $question = Kesehatanventeriner::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/anggaran_KesehatanVeteriner');
        }else {
            //other code ( update for unique record ) 
            $model = Kesehatanventeriner::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/anggaran_KesehatanVeteriner')->with('success' , 'Data berhasil diUpdate');;
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
