<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Brucellosis;

class BrucellosisController extends Controller
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
            $data_brucellosis  = new Brucellosis;
            $data_brucellosis->Bulan = $request->Bulan;
            $data_brucellosis->Target = $request->Target;
            $data_brucellosis->Realisasi = $request->Realisasi;
            $data_brucellosis->Tahun = '2022';
            $data_brucellosis->updateAll = '1';
            $data_brucellosis ->save();
            return redirect('/v22/Penyakit_Brucellosis');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_brucellosis = Brucellosis::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.brucell', [
                    "title" => 'Penyakit Brucellosis | SIMANTU'
                ], compact(
                'data_brucellosis','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Brucellosis::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Brucellosis');
                }else {
                    $model = Brucellosis::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Brucellosis');
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
            $data_brucellosis  = new Brucellosis;
            $data_brucellosis->Bulan = $request->Bulan;
            $data_brucellosis->Target = $request->Target;
            $data_brucellosis->Realisasi = $request->Realisasi;
            $data_brucellosis->Tahun = '2023';
            $data_brucellosis->updateAll = '1';
            $data_brucellosis ->save();
            return redirect('/v23/Penyakit_Brucellosis');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_brucellosis = Brucellosis::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.brucell', [
                    "title" => 'Penyakit Brucellosis | SIMANTU'
                ], compact(
                'data_brucellosis','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Brucellosis::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Brucellosis');
                }else {
                    $model = Brucellosis::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Brucellosis');
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
            $data_brucellosis  = new Brucellosis;
            $data_brucellosis->Bulan = $request->Bulan;
            $data_brucellosis->Target = $request->Target;
            $data_brucellosis->Realisasi = $request->Realisasi;
            $data_brucellosis->Tahun = '2024';
            $data_brucellosis->updateAll = '1';
            $data_brucellosis ->save();
            return redirect('/v24/Penyakit_Brucellosis');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_brucellosis = Brucellosis::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.brucell', [
                    "title" => 'Penyakit Brucellosis | SIMANTU'
                ], compact(
                'data_brucellosis','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Brucellosis::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Brucellosis');
                }else {
                    $model = Brucellosis::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Brucellosis');
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
        $model = new Brucellosis;

        return view('admin.th22.detailpenyakit.brucell', [
            "title" => 'Penyakit Brucellosis | SIMANTU'
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
        $model = new Brucellosis;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/Penyakit_Brucellosis')->with('success' , 'Data berhasil ditambah');
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
         $model = Brucellosis::find($id);

    //      return view('admin.th22./Penyakit_Brucellosis', [
    //          "title" => 'Penyakit Brucellosis | SIMANTU'
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
            $question = Brucellosis::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/Penyakit_Brucellosis');
        }else {
            $model = Brucellosis::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
            $model->save();
            return redirect('/Penyakit_Brucellosis')->with('success' , 'Data berhasil diUpdate');
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
