<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pkhewan;

class PkhewanController extends Controller
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
            $data_pkhewan  = new Pkhewan;
            $data_pkhewan->Bulan = $request->Bulan;
            $data_pkhewan->Target = $request->Target;
            $data_pkhewan->Realisasi = $request->Realisasi;
            $data_pkhewan->Tahun = '2022';
            $data_pkhewan->updateAll = '1';
            $data_pkhewan ->save();
            return redirect('/v22/PelayananKesehatanHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_pkhewan = Pkhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th22.PelayananKesehatanHewan', [
                    "title" => 'Pelayanan Kesehatan Hewan | SIMANTU'
                ], compact(
                'data_pkhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pkhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/PelayananKesehatanHewan');
                }else {
                    $model = Pkhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/PelayananKesehatanHewan');
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
            $data_pkhewan  = new Pkhewan;
            $data_pkhewan->Bulan = $request->Bulan;
            $data_pkhewan->Target = $request->Target;
            $data_pkhewan->Realisasi = $request->Realisasi;
            $data_pkhewan->Tahun = '2023';
            $data_pkhewan->updateAll = '1';
            $data_pkhewan ->save();
            return redirect('/v23/PelayananKesehatanHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_pkhewan = Pkhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th23.PelayananKesehatanHewan', [
                    "title" => 'Pelayanan Kesehatan Hewan | SIMANTU'
                ], compact(
                'data_pkhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pkhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/PelayananKesehatanHewan');
                }else {
                    $model = Pkhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/PelayananKesehatanHewan');
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
            $data_pkhewan  = new Pkhewan;
            $data_pkhewan->Bulan = $request->Bulan;
            $data_pkhewan->Target = $request->Target;
            $data_pkhewan->Realisasi = $request->Realisasi;
            $data_pkhewan->Tahun = '2024';
            $data_pkhewan->updateAll = '1';
            $data_pkhewan ->save();
            return redirect('/v24/PelayananKesehatanHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_pkhewan = Pkhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th24.PelayananKesehatanHewan', [
                    "title" => 'Pelayanan Kesehatan Hewan | SIMANTU'
                ], compact(
                'data_pkhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pkhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/PelayananKesehatanHewan');
                }else {
                    $model = Pkhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/PelayananKesehatanHewan');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
