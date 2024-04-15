<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Penyakitbakterial;

class PenyakitbakterialController extends Controller
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
            $data_penyakitbakterial  = new Penyakitbakterial;
            $data_penyakitbakterial->Bulan = $request->Bulan;
            $data_penyakitbakterial->Target = $request->Target;
            $data_penyakitbakterial->Realisasi = $request->Realisasi;
            $data_penyakitbakterial->Tahun = '2022';
            $data_penyakitbakterial->updateAll = '1';
            $data_penyakitbakterial ->save();
            return redirect('/v22/Penyakit_Bakterial');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_penyakitbakterial = Penyakitbakterial::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.penyakitbakterial', [
                    "title" => 'Penyakit Bakterial | SIMANTU'
                ], compact(
                'data_penyakitbakterial','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitbakterial::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Bakterial');
                }else {
                    $model = Penyakitbakterial::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Bakterial');
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
            $data_penyakitbakterial  = new Penyakitbakterial;
            $data_penyakitbakterial->Bulan = $request->Bulan;
            $data_penyakitbakterial->Target = $request->Target;
            $data_penyakitbakterial->Realisasi = $request->Realisasi;
            $data_penyakitbakterial->Tahun = '2023';
            $data_penyakitbakterial->updateAll = '1';
            $data_penyakitbakterial ->save();
            return redirect('/v23/Penyakit_Bakterial');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_penyakitbakterial = Penyakitbakterial::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.penyakitbakterial', [
                    "title" => 'Penyakit Bakterial | SIMANTU'
                ], compact(
                'data_penyakitbakterial','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitbakterial::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Bakterial');
                }else {
                    $model = Penyakitbakterial::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Bakterial');
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
            $data_penyakitbakterial  = new Penyakitbakterial;
            $data_penyakitbakterial->Bulan = $request->Bulan;
            $data_penyakitbakterial->Target = $request->Target;
            $data_penyakitbakterial->Realisasi = $request->Realisasi;
            $data_penyakitbakterial->Tahun = '2024';
            $data_penyakitbakterial->updateAll = '1';
            $data_penyakitbakterial ->save();
            return redirect('/v24/Penyakit_Bakterial');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_penyakitbakterial = Penyakitbakterial::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.penyakitbakterial', [
                    "title" => 'Penyakit Bakterial | SIMANTU'
                ], compact(
                'data_penyakitbakterial','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitbakterial::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Bakterial');
                }else {
                    $model = Penyakitbakterial::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Bakterial');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
