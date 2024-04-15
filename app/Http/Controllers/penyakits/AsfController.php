<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Asf;

class AsfController extends Controller
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
            $data_asf  = new Asf;
            $data_asf->Bulan = $request->Bulan;
            $data_asf->Target = $request->Target;
            $data_asf->Realisasi = $request->Realisasi;
            $data_asf->Tahun = '2022';
            $data_asf->updateAll = '1';
            $data_asf ->save();
            return redirect('/v22/Penyakit_Asf');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_asf = Asf::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.asf', [
                    "title" => 'Penyakit Asf | SIMANTU'
                ], compact(
                'data_asf','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Asf::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Asf');
                }else {
                    $model = Asf::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Asf');
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
            $data_asf  = new Asf;
            $data_asf->Bulan = $request->Bulan;
            $data_asf->Target = $request->Target;
            $data_asf->Realisasi = $request->Realisasi;
            $data_asf->Tahun = '2023';
            $data_asf->updateAll = '1';
            $data_asf ->save();
            return redirect('/v23/Penyakit_Asf');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_asf = Asf::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.asf', [
                    "title" => 'Penyakit Asf | SIMANTU'
                ], compact(
                'data_asf','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Asf::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Asf');
                }else {
                    $model = Asf::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Asf');
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
            $data_asf  = new Asf;
            $data_asf->Bulan = $request->Bulan;
            $data_asf->Target = $request->Target;
            $data_asf->Realisasi = $request->Realisasi;
            $data_asf->Tahun = '2024';
            $data_asf->updateAll = '1';
            $data_asf ->save();
            return redirect('/v24/Penyakit_Asf');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_asf = Asf::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.asf', [
                    "title" => 'Penyakit Asf | SIMANTU'
                ], compact(
                'data_asf','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Asf::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Asf');
                }else {
                    $model = Asf::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Asf');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}