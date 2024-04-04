<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ikm;

class IkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_ikm  = new Ikm;
            $data_ikm->Bulan = $request->Bulan;
            $data_ikm->Target = $request->Target;
            $data_ikm->Realisasi = $request->Realisasi;
            $data_ikm->Tahun = '2022';
            $data_ikm->updateAll = '1';
            $data_ikm ->save();
            return redirect('/v22/IndeksKepuasanMasyarakat');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            // $data_ikm = Ikm::all();
            $data_ikm = Ikm::where('Tahun', $tahun)->get();
            
            return view('admin.th22.IndeksKepuasanMasyarakat', [
                    "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
                ], compact(
                'data_ikm','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ikm::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/IndeksKepuasanMasyarakat');
                }else {
                    $model = Ikm::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/IndeksKepuasanMasyarakat');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_ikm  = new Ikm;
            $data_ikm->Bulan = $request->Bulan;
            $data_ikm->Target = $request->Target;
            $data_ikm->Realisasi = $request->Realisasi;
            $data_ikm->Tahun = '2023';
            $data_ikm->updateAll = '1';
            $data_ikm ->save();
            return redirect('/v23/IndeksKepuasanMasyarakat');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            // $data_ikm = Ikm::all();
            $data_ikm = Ikm::where('Tahun', $tahun)->get();
            
            return view('admin.th23.IndeksKepuasanMasyarakat', [
                    "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
                ], compact(
                'data_ikm','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ikm::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/IndeksKepuasanMasyarakat');
                }else {
                    $model = Ikm::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/IndeksKepuasanMasyarakat');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index24(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_ikm  = new Ikm;
            $data_ikm->Bulan = $request->Bulan;
            $data_ikm->Target = $request->Target;
            $data_ikm->Realisasi = $request->Realisasi;
            $data_ikm->Tahun = '2024';
            $data_ikm->updateAll = '1';
            $data_ikm ->save();
            return redirect('/v24/IndeksKepuasanMasyarakat');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            // $data_ikm = Ikm::all();
            $data_ikm = Ikm::where('Tahun', $tahun)->get();
            
            return view('admin.th24.IndeksKepuasanMasyarakat', [
                    "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
                ], compact(
                'data_ikm','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ikm::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/IndeksKepuasanMasyarakat');
                }else {
                    $model = Ikm::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/IndeksKepuasanMasyarakat');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
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
        $model->Tahun = '2022';

        $model->save();

        return view('admin.th22.IndeksKepuasanMasyarakat', [
            "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
        ], compact(
        'model',
    ));
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

         return view('admin.th22.IndeksKepuasanMasyarakat', [
             "title" => 'Indeks Kepuasan Masyarakat | SIMANTU'
         ], compact(
         'model',
     ));
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
            return redirect('/IndeksKepuasanMasyarakat');
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
