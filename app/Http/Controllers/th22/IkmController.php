<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Ikm;

class IkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_ikm = Ikm::all();

        // return $data_ikm;
        return view('admin.th22.IndeksKepuasanMasyarakat', [
                "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
            ], compact(
            'data_ikm',
        ));
        // return view('admin.th22.IndeksKepuasanMasyarakat' , [
        //     "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
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
        $model = new Ikm;

        return view('admin.th22.IndeksKepuasanMasyarakat', [
            "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
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
        $model = new Ikm;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/IndeksKepuasanMasyarakat')->with('success' , 'Data berhasil ditambah');
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
         $model = Ikm::find($id);

    //      return view('admin.th22.IndeksKepuasanMasyarakat', [
    //          "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
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
            $question = Ikm::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/IndeksKepuasanMasyarakat');
        }else {
            //other code ( update for unique record ) 
            $model = Ikm::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
            return redirect('/IndeksKepuasanMasyarakat');;
            // return redirect('/IndeksKepuasanMasyarakat')->with('message' , 'Data berhasil diUpdate');
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
