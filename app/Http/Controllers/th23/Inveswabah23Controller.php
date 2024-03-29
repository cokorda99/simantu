<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Inveswabah23;
class Inveswabah23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_inveswabah23= Inveswabah23::all();
        return view('admin.th23.detailpenyakit.inveswabah', [
                "title" => 'Investigasi Wabah  | SIMANTU'
            ], compact(
            'data_inveswabah23',
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
        $model = new Inveswabah23;

        return view('admin.th23.detailpenyakit.inveswabah', [
            "title" => 'Investigasi Wabah  | SIMANTU'
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
        $model = new Inveswabah23;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;
        // $model->updateAll = 1;

        $model->save();

        return redirect('/Investigasi_Wabah23')->with('success' , 'Data berhasil ditambah');
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
         $model = Inveswabah23::find($id);

    //      return view('admin.th23./Penyakit_Inveswabah', [
    //          "title" => 'Investigasi Wabah  | SIMANTU'
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
            $question = Inveswabah23::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/Investigasi_Wabah23');
        }else {
            $model = Inveswabah23::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
            $model->save();
            return redirect('/Investigasi_Wabah23')->with('success' , 'Data berhasil diUpdate');
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
