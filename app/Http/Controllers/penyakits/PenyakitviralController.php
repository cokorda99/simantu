<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Penyakitviral;

class PenyakitviralController extends Controller
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
            $data_penyakitviral  = new Penyakitviral;
            $data_penyakitviral->Bulan = $request->Bulan;
            $data_penyakitviral->Target = $request->Target;
            $data_penyakitviral->Realisasi = $request->Realisasi;
            $data_penyakitviral->Tahun = '2022';
            $data_penyakitviral->updateAll = '1';
            $data_penyakitviral ->save();
            return redirect('/v22/Penyakit_Viral');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_penyakitviral = Penyakitviral::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.penyakitviral', [
                    "title" => 'Penyakit Viral | SIMANTU'
                ], compact(
                'data_penyakitviral','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitviral::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_Viral');
                }else {
                    $model = Penyakitviral::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_Viral');
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
            $data_penyakitviral  = new Penyakitviral;
            $data_penyakitviral->Bulan = $request->Bulan;
            $data_penyakitviral->Target = $request->Target;
            $data_penyakitviral->Realisasi = $request->Realisasi;
            $data_penyakitviral->Tahun = '2023';
            $data_penyakitviral->updateAll = '1';
            $data_penyakitviral ->save();
            return redirect('/v23/Penyakit_Viral');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_penyakitviral = Penyakitviral::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.penyakitviral', [
                    "title" => 'Penyakit Viral | SIMANTU'
                ], compact(
                'data_penyakitviral','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitviral::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_Viral');
                }else {
                    $model = Penyakitviral::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_Viral');
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
            $data_penyakitviral  = new Penyakitviral;
            $data_penyakitviral->Bulan = $request->Bulan;
            $data_penyakitviral->Target = $request->Target;
            $data_penyakitviral->Realisasi = $request->Realisasi;
            $data_penyakitviral->Tahun = '2024';
            $data_penyakitviral->updateAll = '1';
            $data_penyakitviral ->save();
            return redirect('/v24/Penyakit_Viral');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_penyakitviral = Penyakitviral::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.penyakitviral', [
                    "title" => 'Penyakit Viral | SIMANTU'
                ], compact(
                'data_penyakitviral','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitviral::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_Viral');
                }else {
                    $model = Penyakitviral::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_Viral');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
