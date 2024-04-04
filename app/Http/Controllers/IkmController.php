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
}
