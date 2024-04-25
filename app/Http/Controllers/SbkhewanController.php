<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sbkhewan;

class SbkhewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index23 (Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_sbkhewan  = new Sbkhewan;
            $data_sbkhewan->Bulan = $request->Bulan;
            $data_sbkhewan->Target = $request->Target;
            $data_sbkhewan->Realisasi = $request->Realisasi;
            $data_sbkhewan->Tahun = '2023';
            $data_sbkhewan->updateAll = '1';
            $data_sbkhewan ->save();
            return redirect('/v23/SaranaBidang');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_sbkhewan = Sbkhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th23.SaranaBidang', [
                    "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
                ], compact(
                'data_sbkhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Sbkhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/SaranaBidang');
                }else {
                    $model = Sbkhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/SaranaBidang');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

    public function index24 (Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_sbkhewan  = new Sbkhewan;
            $data_sbkhewan->Bulan = $request->Bulan;
            $data_sbkhewan->Target = $request->Target;
            $data_sbkhewan->Realisasi = $request->Realisasi;
            $data_sbkhewan->Tahun = '2024';
            $data_sbkhewan->updateAll = '1';
            $data_sbkhewan ->save();
            return redirect('/v24/SaranaBidang');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_sbkhewan = Sbkhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th24.SaranaBidang', [
                    "title" => 'Sarana Bidang Kesehatan Hewan | SIMANTU'
                ], compact(
                'data_sbkhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Sbkhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/SaranaBidang');
                }else {
                    $model = Sbkhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/SaranaBidang');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
