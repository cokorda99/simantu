<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Ternakunggas;

class TernakunggasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_ternakunggas= Ternakunggas::all();
        return view('admin.th22.TernakUnggas', [
                "title" => 'Ternak Unggas dan Aneka Ternak | SIMANTU'
            ], compact(
            'data_ternakunggas',
        ));
        // return view('admin.th22.TernakUnggas' , [
        //     "title" => 'Ternak Unggas dan Aneka Ternak | SIMANTU'
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
        $model = new Ternakunggas;

        return view('admin.th22.TernakUnggas', [
            "title" => 'Ternak Unggas dan Aneka Ternak | SIMANTU'
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
        $model = new Ternakunggas;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/TernakUnggas')->with('success' , 'Data berhasil ditambah');
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
         $model = Ternakunggas::find($id);

    //      return view('admin.th22.TernakUnggas', [
    //          "title" => 'Ternak Unggas dan Aneka Ternak | SIMANTU'
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
            $question = Ternakunggas::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/TernakUnggas');
        }else {
            $model = Ternakunggas::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/TernakUnggas')->with('success' , 'Data berhasil diUpdate');
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

