<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Penyakitlain;

class Penyakitlain23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_penyakitlain= Penyakitlain::all();
        return view('admin.th23.detailpenyakit.penyakithewan', [
                "title" => 'Penyakit Hewan Lainnya  | SIMANTU'
            ], compact(
            'data_penyakitlain',
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
        $model = new Penyakitlain;

        return view('admin.th23.detailpenyakit.penyakithewan', [
            "title" => 'Penyakit Hewan Lainnya  | SIMANTU'
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
        $model = new Penyakitlain;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/Penyakit_HewanLaninnya')->with('success' , 'Data berhasil ditambah');
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
         $model = Penyakitlain::find($id);

    //      return view('admin.th23./Penyakit_Penyakitlain', [
    //          "title" => 'Penyakit Hewan Lainnya  | SIMANTU'
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
            $question = Penyakitlain::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/Penyakit_HewanLaninnya');
        }else {
            $model = Penyakitlain::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
            $model->save();
            return redirect('/Penyakit_HewanLaninnya')->with('success' , 'Data berhasil diUpdate');
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
