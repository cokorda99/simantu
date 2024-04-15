<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Pmk;

class PmkController extends Controller
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
            $data_pmk = new Pmk;
            $data_pmk->Bulan = $request->Bulan;
            $data_pmk->Target = $request->Target;
            $data_pmk->Realisasi = $request->Realisasi;
            $data_pmk->Tahun = '2022';
            $data_pmk->updateAll = '1';
            $data_pmk->save();
            return redirect('/v22/Penyakit_Pmk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_pmk= Pmk::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.pmk', [
                    "title" => 'Penyakit Pmk | SIMANTU'
                ], compact(
                'data_pmk','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pmk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Pmk');
                }else {
                    $model = Pmk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Pmk');
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
            $data_pmk = new Pmk;
            $data_pmk->Bulan = $request->Bulan;
            $data_pmk->Target = $request->Target;
            $data_pmk->Realisasi = $request->Realisasi;
            $data_pmk->Tahun = '2023';
            $data_pmk->updateAll = '1';
            $data_pmk->save();
            return redirect('/v23/Penyakit_Pmk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_pmk= Pmk::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.pmk', [
                    "title" => 'Penyakit Pmk | SIMANTU'
                ], compact(
                'data_pmk','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pmk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Pmk');
                }else {
                    $model = Pmk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Pmk');
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
            $data_pmk = new Pmk;
            $data_pmk->Bulan = $request->Bulan;
            $data_pmk->Target = $request->Target;
            $data_pmk->Realisasi = $request->Realisasi;
            $data_pmk->Tahun = '2024';
            $data_pmk->updateAll = '1';
            $data_pmk->save();
            return redirect('/v24/Penyakit_Pmk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_pmk= Pmk::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.pmk', [
                    "title" => 'Penyakit Pmk | SIMANTU'
                ], compact(
                'data_pmk','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pmk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Pmk');
                }else {
                    $model = Pmk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Pmk');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}