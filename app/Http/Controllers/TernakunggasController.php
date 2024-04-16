<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ternakunggas;

class TernakunggasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index22(Request $request) 
    {
        if ($request->isMethod('post')) {


            $data_ternakunggas = new Ternakunggas;
            $data_ternakunggas->Bulan = $request->Bulan;
            $data_ternakunggas->Target = $request->Target;
            $data_ternakunggas->Realisasi = $request->Realisasi;
            $data_ternakunggas->Tahun = '2022';
            $data_ternakunggas->updateAll = '1';
            $data_ternakunggas ->save();
            return redirect('/v22/TernakUnggas');
        } elseif ($request->isMethod('get')) {
            $tahun = '2022';
            $data_ternakunggas = Ternakunggas::where('Tahun', $tahun)->get();

            return view('admin.th22.TernakUnggas', ["title" => 'Ternak Unggas | SIMANTU'], compact('data_ternakunggas','tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakunggas::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v22/TernakUnggas');
            } else {
                $model = Ternakunggas::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v22/TernakUnggas');
            }
        } else {
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index23(Request $request) 
    {
        if ($request->isMethod('post')) {


            $data_ternakunggas = new Ternakunggas;
            $data_ternakunggas->Bulan = $request->Bulan;
            $data_ternakunggas->Target = $request->Target;
            $data_ternakunggas->Realisasi = $request->Realisasi;
            $data_ternakunggas->Tahun = '2023';
            $data_ternakunggas->updateAll = '1';
            $data_ternakunggas ->save();
            return redirect('/v23/TernakUnggas');
        } elseif ($request->isMethod('get')) {
            $tahun = '2023';
            $data_ternakunggas = Ternakunggas::where('Tahun', $tahun)->get();

            return view('admin.th23.TernakUnggas', ["title" => 'Ternak Unggas | SIMANTU'], compact('data_ternakunggas','tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakunggas::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v23/TernakUnggas');
            } else {
                $model = Ternakunggas::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v23/TernakUnggas');
            }
        } else {
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index24(Request $request) 
    {
        if ($request->isMethod('post')) {


            $data_ternakunggas = new Ternakunggas;
            $data_ternakunggas->Bulan = $request->Bulan;
            $data_ternakunggas->Target = $request->Target;
            $data_ternakunggas->Realisasi = $request->Realisasi;
            $data_ternakunggas->Tahun = '2024';
            $data_ternakunggas->updateAll = '1';
            $data_ternakunggas ->save();
            return redirect('/v24/TernakUnggas');
        } elseif ($request->isMethod('get')) {
            $tahun = '2024';
            $data_ternakunggas = Ternakunggas::where('Tahun', $tahun)->get();

            return view('admin.th24.TernakUnggas', ["title" => 'Ternak Unggas | SIMANTU'], compact('data_ternakunggas','tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakunggas::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v24/TernakUnggas');
            } else {
                $model = Ternakunggas::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v24/TernakUnggas');
            }
        } else {
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}

