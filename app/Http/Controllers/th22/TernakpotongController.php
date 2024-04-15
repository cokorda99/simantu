<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Ternakpotong;

class TernakpotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_ternakpotong= Ternakpotong::all();
        return view('admin.th22.TernakRuminansia', [
                "title" => 'Ternak Ruminansia Potong | SIMANTU'
            ], compact(
            'data_ternakpotong',
        ));
        // return view('admin.th22.TernakRuminansia' , [
        //     "title" => 'Ternak Ruminansia Potong | SIMANTU'
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
        $model = new Ternakpotong;

        return view('admin.th22.TernakRuminansia', [
            "title" => 'Ternak Ruminansia Potong | SIMANTU'
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
        $model = new Ternakpotong;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/TernakRuminansia')->with('success' , 'Data berhasil ditambah');
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
         $model = Ternakpotong::find($id);

    //      return view('admin.th22.TernakRuminansia', [
    //          "title" => 'Ternak Ruminansia Potong | SIMANTU'
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
            $question = Ternakpotong::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/TernakRuminansia');
        }else {
            //other code ( update for unique record ) 
            $model = Ternakpotong::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/TernakRuminansia')->with('success' , 'Data berhasil diUpdate');
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

    public function index22(Request $request) {
        return redirect('/v22/TernakRuminansia');
    }

    public function index23(Request $request) {
        return redirect('/v23/TernakRuminansia');
    }

    public function index24(Request $request) {
        return redirect('/v24/TernakRuminansia');
    }
}
