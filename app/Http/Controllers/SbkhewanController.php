<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Sbkhewan;

class SbkhewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_sbkhewan= Sbkhewan::all();
        return view('admin.th22.SaranaBidang', [
                "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
            ], compact(
            'data_sbkhewan',
        ));
        // return view('admin.th22.SaranaBidang' , [
        //     "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
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
        $model = new Sbkhewan;

        return view('admin.th22.SaranaBidang', [
            "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
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
        $model = new Sbkhewan;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/SaranaBidang')->with('success' , 'Data berhasil ditambah');
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
         $model = Sbkhewan::find($id);

    //      return view('admin.th22.SaranaBidang', [
    //          "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
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
        if($request->get('forUpdateAll') == "forUpdateAllValue"){
            $question = Sbkhewan::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/SaranaBidang');
        }else {
            //other code ( update for unique record ) 
            $model = Sbkhewan::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/SaranaBidang')->with('success' , 'Data berhasil diUpdate');
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
