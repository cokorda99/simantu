<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Hcholera;
class HcholeraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_hcholera= Hcholera::all();
        return view('admin.th22.detailpenyakit.hcholera', [
                "title" => 'Penyakit Hog Cholera  | SIMANTU'
            ], compact(
            'data_hcholera',
        ));
    }
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_hcholera  = new Hcholera;
            $data_hcholera->Bulan = $request->Bulan;
            $data_hcholera->Target = $request->Target;
            $data_hcholera->Realisasi = $request->Realisasi;
            $data_hcholera->Tahun = '2022';
            $data_hcholera->updateAll = '1';
            $data_hcholera ->save();
            return redirect('/v22/Penyakit_HogCholera');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_hcholera = Hcholera::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.hcholera', [
                    "title" => 'Penyakit Hcholera | SIMANTU'
                ], compact(
                'data_hcholera','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Hcholera::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_HogCholera');
                }else {
                    $model = Hcholera::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_HogCholera');
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
            $data_hcholera  = new Hcholera;
            $data_hcholera->Bulan = $request->Bulan;
            $data_hcholera->Target = $request->Target;
            $data_hcholera->Realisasi = $request->Realisasi;
            $data_hcholera->Tahun = '2023';
            $data_hcholera->updateAll = '1';
            $data_hcholera ->save();
            return redirect('/v23/Penyakit_HogCholera');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_hcholera = Hcholera::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.hcholera', [
                    "title" => 'Penyakit Hcholera | SIMANTU'
                ], compact(
                'data_hcholera','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Hcholera::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_HogCholera');
                }else {
                    $model = Hcholera::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_HogCholera');
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
            $data_hcholera  = new Hcholera;
            $data_hcholera->Bulan = $request->Bulan;
            $data_hcholera->Target = $request->Target;
            $data_hcholera->Realisasi = $request->Realisasi;
            $data_hcholera->Tahun = '2024';
            $data_hcholera->updateAll = '1';
            $data_hcholera ->save();
            return redirect('/v24/Penyakit_HogCholera');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_hcholera = Hcholera::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.hcholera', [
                    "title" => 'Penyakit Hcholera | SIMANTU'
                ], compact(
                'data_hcholera','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Hcholera::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_HogCholera');
                }else {
                    $model = Hcholera::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_HogCholera');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
