<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Anthraxs;

class AnthraxsController extends Controller
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
            $data_anthraxs  = new Anthraxs;
            $data_anthraxs->Bulan = $request->Bulan;
            $data_anthraxs->Target = $request->Target;
            $data_anthraxs->Realisasi = $request->Realisasi;
            $data_anthraxs->Tahun = '2022';
            $data_anthraxs->updateAll = '1';
            $data_anthraxs ->save();
            return redirect('/v22/Penyakit_Anthraxs');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_anthraxs = Anthraxs::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.anthraxs', [
                    "title" => 'Penyakit Anthraxs | SIMANTU'
                ], compact(
                'data_anthraxs','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Anthraxs::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Anthraxs');
                }else {
                    $model = Anthraxs::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Anthraxs');
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
            $data_anthraxs  = new Anthraxs;
            $data_anthraxs->Bulan = $request->Bulan;
            $data_anthraxs->Target = $request->Target;
            $data_anthraxs->Realisasi = $request->Realisasi;
            $data_anthraxs->Tahun = '2023';
            $data_anthraxs->updateAll = '1';
            $data_anthraxs ->save();
            return redirect('/v23/Penyakit_Anthraxs');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_anthraxs = Anthraxs::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.anthraxs', [
                    "title" => 'Penyakit Anthraxs | SIMANTU'
                ], compact(
                'data_anthraxs','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Anthraxs::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Anthraxs');
                }else {
                    $model = Anthraxs::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Anthraxs');
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
            $data_anthraxs  = new Anthraxs;
            $data_anthraxs->Bulan = $request->Bulan;
            $data_anthraxs->Target = $request->Target;
            $data_anthraxs->Realisasi = $request->Realisasi;
            $data_anthraxs->Tahun = '2024';
            $data_anthraxs->updateAll = '1';
            $data_anthraxs ->save();
            return redirect('/v24/Penyakit_Anthraxs');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_anthraxs = Anthraxs::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.anthraxs', [
                    "title" => 'Penyakit Anthraxs | SIMANTU'
                ], compact(
                'data_anthraxs','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Anthraxs::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Anthraxs');
                }else {
                    $model = Anthraxs::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Anthraxs');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
