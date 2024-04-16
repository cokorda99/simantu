<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ternakpotong;

class TernakpotongController extends Controller
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
            $data_ternakpotong  = new Ternakpotong;
            $data_ternakpotong->Bulan = $request->Bulan;
            $data_ternakpotong->Target = $request->Target;
            $data_ternakpotong->Realisasi = $request->Realisasi;
            $data_ternakpotong->Tahun = '2022';
            $data_ternakpotong->updateAll = '1';
            $data_ternakpotong ->save();
            return redirect('/v22/TernakRuminansia');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_ternakpotong = Ternakpotong::where('Tahun', $tahun)->get();
            
            return view('admin.th22.TernakRuminansia', [
                    "title" => 'Ternak Ruminansia Potong | SIMANTU'
                ], compact(
                'data_ternakpotong','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakpotong::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/TernakRuminansia');
                }else {
                    $model = Ternakpotong::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/TernakRuminansia');
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
            $data_ternakpotong  = new Ternakpotong;
            $data_ternakpotong->Bulan = $request->Bulan;
            $data_ternakpotong->Target = $request->Target;
            $data_ternakpotong->Realisasi = $request->Realisasi;
            $data_ternakpotong->Tahun = '2023';
            $data_ternakpotong->updateAll = '1';
            $data_ternakpotong ->save();
            return redirect('/v23/TernakRuminansia');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_ternakpotong = Ternakpotong::where('Tahun', $tahun)->get();
            
            return view('admin.th23.TernakRuminansia', [
                    "title" => 'Ternak Ruminansia Potong | SIMANTU'
                ], compact(
                'data_ternakpotong','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakpotong::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/TernakRuminansia');
                }else {
                    $model = Ternakpotong::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/TernakRuminansia');
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
            $data_ternakpotong  = new Ternakpotong;
            $data_ternakpotong->Bulan = $request->Bulan;
            $data_ternakpotong->Target = $request->Target;
            $data_ternakpotong->Realisasi = $request->Realisasi;
            $data_ternakpotong->Tahun = '2024';
            $data_ternakpotong->updateAll = '1';
            $data_ternakpotong ->save();
            return redirect('/v24/TernakRuminansia');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_ternakpotong = Ternakpotong::where('Tahun', $tahun)->get();
            
            return view('admin.th24.TernakRuminansia', [
                    "title" => 'Ternak Ruminansia Potong | SIMANTU'
                ], compact(
                'data_ternakpotong','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Ternakpotong::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/TernakRuminansia');
                }else {
                    $model = Ternakpotong::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/TernakRuminansia');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
