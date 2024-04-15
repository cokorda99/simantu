<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Parasiter;
class ParasiterController extends Controller
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
            $data_parasiter  = new Parasiter;
            $data_parasiter->Bulan = $request->Bulan;
            $data_parasiter->Target = $request->Target;
            $data_parasiter->Realisasi = $request->Realisasi;
            $data_parasiter->Tahun = '2022';
            $data_parasiter->updateAll = '1';
            $data_parasiter ->save();
            return redirect('/v22/Penyakit_Parasiter');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_parasiter = Parasiter::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.parasiter', [
                    "title" => 'Penyakit Parasiter | SIMANTU'
                ], compact(
                'data_parasiter','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Parasiter::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Parasiter');
                }else {
                    $model = Parasiter::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Parasiter');
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
            $data_parasiter  = new Parasiter;
            $data_parasiter->Bulan = $request->Bulan;
            $data_parasiter->Target = $request->Target;
            $data_parasiter->Realisasi = $request->Realisasi;
            $data_parasiter->Tahun = '2023';
            $data_parasiter->updateAll = '1';
            $data_parasiter ->save();
            return redirect('/v23/Penyakit_Parasiter');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_parasiter = Parasiter::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.parasiter', [
                    "title" => 'Penyakit Parasiter | SIMANTU'
                ], compact(
                'data_parasiter','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Parasiter::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Parasiter');
                }else {
                    $model = Parasiter::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Parasiter');
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
            $data_parasiter  = new Parasiter;
            $data_parasiter->Bulan = $request->Bulan;
            $data_parasiter->Target = $request->Target;
            $data_parasiter->Realisasi = $request->Realisasi;
            $data_parasiter->Tahun = '2024';
            $data_parasiter->updateAll = '1';
            $data_parasiter ->save();
            return redirect('/v24/Penyakit_Parasiter');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_parasiter = Parasiter::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.parasiter', [
                    "title" => 'Penyakit Parasiter | SIMANTU'
                ], compact(
                'data_parasiter','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Parasiter::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Parasiter');
                }else {
                    $model = Parasiter::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Parasiter');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
