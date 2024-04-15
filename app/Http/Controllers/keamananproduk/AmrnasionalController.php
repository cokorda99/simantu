<?php

namespace App\Http\Controllers\keamananproduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\keamananproduk\Amrnasional;

class AmrnasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_amrnasional  = new Amrnasional;
            $data_amrnasional->Bulan = $request->Bulan;
            $data_amrnasional->Target = $request->Target;
            $data_amrnasional->Realisasi = $request->Realisasi;
            $data_amrnasional->Tahun = '2023';
            $data_amrnasional->updateAll = '1';
            $data_amrnasional ->save();
            return redirect('/v23/AMR_Nasional');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_amrnasional = Amrnasional::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailkeamananproduk.amrnasional', [
                    "title" => 'AMR Nasional | SIMANTU'
                ], compact(
                'data_amrnasional','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Amrnasional::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/AMR_Nasional');
                }else {
                    $model = Amrnasional::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/AMR_Nasional');
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
            $data_amrnasional  = new Amrnasional;
            $data_amrnasional->Bulan = $request->Bulan;
            $data_amrnasional->Target = $request->Target;
            $data_amrnasional->Realisasi = $request->Realisasi;
            $data_amrnasional->Tahun = '2024';
            $data_amrnasional->updateAll = '1';
            $data_amrnasional ->save();
            return redirect('/v24/AMR_Nasional');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_amrnasional = Amrnasional::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailkeamananproduk.amrnasional', [
                    "title" => 'AMR Nasional | SIMANTU'
                ], compact(
                'data_amrnasional','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Amrnasional::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/AMR_Nasional');
                }else {
                    $model = Amrnasional::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/AMR_Nasional');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}

