<?php

namespace App\Http\Controllers\penyakits;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\penyakits\Inveswabah;
class InveswabahController extends Controller
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
            $data_inveswabah  = new Inveswabah;
            $data_inveswabah->Bulan = $request->Bulan;
            $data_inveswabah->Target = $request->Target;
            $data_inveswabah->Realisasi = $request->Realisasi;
            $data_inveswabah->Tahun = '2022';
            $data_inveswabah->updateAll = '1';
            $data_inveswabah ->save();
            return redirect('/v22/Investigasi_Wabah');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_inveswabah = Inveswabah::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailpenyakit.inveswabah', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_inveswabah','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Inveswabah::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Investigasi_Wabah');
                }else {
                    $model = Inveswabah::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Investigasi_Wabah');
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
            $data_inveswabah  = new Inveswabah;
            $data_inveswabah->Bulan = $request->Bulan;
            $data_inveswabah->Target = $request->Target;
            $data_inveswabah->Realisasi = $request->Realisasi;
            $data_inveswabah->Tahun = '2023';
            $data_inveswabah->updateAll = '1';
            $data_inveswabah ->save();
            return redirect('/v23/Investigasi_Wabah');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_inveswabah = Inveswabah::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailpenyakit.inveswabah', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_inveswabah','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Inveswabah::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Investigasi_Wabah');
                }else {
                    $model = Inveswabah::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Investigasi_Wabah');
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
            $data_inveswabah  = new Inveswabah;
            $data_inveswabah->Bulan = $request->Bulan;
            $data_inveswabah->Target = $request->Target;
            $data_inveswabah->Realisasi = $request->Realisasi;
            $data_inveswabah->Tahun = '2024';
            $data_inveswabah->updateAll = '1';
            $data_inveswabah ->save();
            return redirect('/v24/Investigasi_Wabah');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_inveswabah = Inveswabah::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailpenyakit.inveswabah', [
                    "title" => 'Penyakit Lsd | SIMANTU'
                ], compact(
                'data_inveswabah','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Inveswabah::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Investigasi_Wabah');
                }else {
                    $model = Inveswabah::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Investigasi_Wabah');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
