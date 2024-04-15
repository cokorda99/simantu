<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengendalianpenyakit;

class PengendalianpenyakitController extends Controller
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
            $data_pengendalianpenyakit  = new Pengendalianpenyakit;
            $data_pengendalianpenyakit->Bulan = $request->Bulan;
            $data_pengendalianpenyakit->Target = $request->Target;
            $data_pengendalianpenyakit->Realisasi = $request->Realisasi;
            $data_pengendalianpenyakit->Tahun = '2022';
            $data_pengendalianpenyakit->akrual = '0';
            $data_pengendalianpenyakit->sp2d = '0';
            $data_pengendalianpenyakit->updateAll = '1';
            $data_pengendalianpenyakit ->save();
            return redirect('/v22/anggaran_PengendalianPenyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
            return view('admin.th22.serapan_anggaran.PengendalianPenyakit', [
                    "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
                ], compact(
                'data_pengendalianpenyakit','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pengendalianpenyakit::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/anggaran_PengendalianPenyakit');
                }else {
                    $model = Pengendalianpenyakit::find($request->Id);
                    $model->Realisasi = $request->Realisasi;
                    $model->save();
                    return redirect('/v22/anggaran_PengendalianPenyakit');
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
            $data_pengendalianpenyakit  = new Pengendalianpenyakit;
            $data_pengendalianpenyakit->Bulan = $request->Bulan;
            $data_pengendalianpenyakit->Target = $request->Target;
            $data_pengendalianpenyakit->Realisasi = $request->Realisasi;
            $data_pengendalianpenyakit->Tahun = '2023';
            $data_pengendalianpenyakit->akrual = '0';
            $data_pengendalianpenyakit->sp2d = '0';
            $data_pengendalianpenyakit->updateAll = '1';
            $data_pengendalianpenyakit ->save();
            return redirect('/v23/anggaran_PengendalianPenyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
            return view('admin.th23.serapan_anggaran.PengendalianPenyakit', [
                    "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
                ], compact(
                'data_pengendalianpenyakit','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pengendalianpenyakit::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/anggaran_PengendalianPenyakit');
                }else {
                    $model = Pengendalianpenyakit::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v23/anggaran_PengendalianPenyakit');
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
            $data_pengendalianpenyakit  = new Pengendalianpenyakit;
            $data_pengendalianpenyakit->Bulan = $request->Bulan;
            $data_pengendalianpenyakit->Target = $request->Target;
            $data_pengendalianpenyakit->Realisasi = $request->Realisasi;
            $data_pengendalianpenyakit->Tahun = '2024';
            $data_pengendalianpenyakit->akrual = '0';
            $data_pengendalianpenyakit->sp2d = '0';
            $data_pengendalianpenyakit->updateAll = '1';
            $data_pengendalianpenyakit ->save();
            return redirect('/v24/anggaran_PengendalianPenyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_pengendalianpenyakit= Pengendalianpenyakit::where('Tahun', $tahun)->get();
            return view('admin.th24.serapan_anggaran.PengendalianPenyakit', [
                    "title" => 'Pengendalian dan Penangulangan Penyakit | SIMANTU'
                ], compact(
                'data_pengendalianpenyakit','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Pengendalianpenyakit::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/anggaran_PengendalianPenyakit');
                }else {
                    $model = Pengendalianpenyakit::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v24/anggaran_PengendalianPenyakit');
                }  
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}

