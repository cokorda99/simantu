<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Lsd;
class LsdController extends Controller
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
            $data_lsd  = new Lsd;
            $data_lsd->Bulan = $request->Bulan;
            $data_lsd->Target = $request->Target;
            $data_lsd->Realisasi = $request->Realisasi;
            $data_lsd->Tahun = '2022';
            $data_lsd->updateAll = '1';
            $data_lsd ->save();
            return redirect('/v22/Penyakit_Lsd');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_lsd = Lsd::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.lsd', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_lsd','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Lsd::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Lsd');
                }else {
                    $model = Lsd::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Lsd');
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
            $data_lsd  = new Lsd;
            $data_lsd->Bulan = $request->Bulan;
            $data_lsd->Target = $request->Target;
            $data_lsd->Realisasi = $request->Realisasi;
            $data_lsd->Tahun = '2023';
            $data_lsd->updateAll = '1';
            $data_lsd ->save();
            return redirect('/v23/Penyakit_Lsd');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_lsd = Lsd::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.lsd', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_lsd','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Lsd::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Lsd');
                }else {
                    $model = Lsd::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Lsd');
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
            $data_lsd  = new Lsd;
            $data_lsd->Bulan = $request->Bulan;
            $data_lsd->Target = $request->Target;
            $data_lsd->Realisasi = $request->Realisasi;
            $data_lsd->Tahun = '2024';
            $data_lsd->updateAll = '1';
            $data_lsd ->save();
            return redirect('/v24/Penyakit_Lsd');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_lsd = Lsd::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.lsd', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_lsd','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Lsd::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Lsd');
                }else {
                    $model = Lsd::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Lsd');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
