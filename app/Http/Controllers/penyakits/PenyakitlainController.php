<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Penyakitlain;

class PenyakitlainController extends Controller

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
            $data_penyakitlain  = new Penyakitlain;
            $data_penyakitlain->Bulan = $request->Bulan;
            $data_penyakitlain->Target = $request->Target;
            $data_penyakitlain->Realisasi = $request->Realisasi;
            $data_penyakitlain->Tahun = '2022';
            $data_penyakitlain->updateAll = '1';
            $data_penyakitlain ->save();
            return redirect('/v22/Penyakit_HewanLaninnya');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_penyakitlain = Penyakitlain::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.penyakithewan', [
                    "title" => 'Penyakit Hewan Lainnya | SIMANTU'
                ], compact(
                'data_penyakitlain','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitlain::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Penyakit_HewanLaninnya');
                }else {
                    $model = Penyakitlain::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Penyakit_HewanLaninnya');
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
            $data_penyakitlain  = new Penyakitlain;
            $data_penyakitlain->Bulan = $request->Bulan;
            $data_penyakitlain->Target = $request->Target;
            $data_penyakitlain->Realisasi = $request->Realisasi;
            $data_penyakitlain->Tahun = '2023';
            $data_penyakitlain->updateAll = '1';
            $data_penyakitlain ->save();
            return redirect('/v23/Penyakit_HewanLaninnya');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_penyakitlain = Penyakitlain::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.penyakithewan', [
                    "title" => 'Penyakit Hewan Lainnya | SIMANTU'
                ], compact(
                'data_penyakitlain','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitlain::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Penyakit_HewanLaninnya');
                }else {
                    $model = Penyakitlain::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Penyakit_HewanLaninnya');
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
            $data_penyakitlain  = new Penyakitlain;
            $data_penyakitlain->Bulan = $request->Bulan;
            $data_penyakitlain->Target = $request->Target;
            $data_penyakitlain->Realisasi = $request->Realisasi;
            $data_penyakitlain->Tahun = '2024';
            $data_penyakitlain->updateAll = '1';
            $data_penyakitlain ->save();
            return redirect('/v24/Penyakit_HewanLaninnya');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_penyakitlain = Penyakitlain::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.penyakithewan', [
                    "title" => 'Penyakit Hewan Lainnya | SIMANTU'
                ], compact(
                'data_penyakitlain','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyakitlain::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Penyakit_HewanLaninnya');
                }else {
                    $model = Penyakitlain::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Penyakit_HewanLaninnya');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}