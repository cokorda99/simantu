<?php

namespace App\Http\Controllers\anggaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\anggaran\Kesehatanventeriner;

class KesehatanventerinerController extends Controller
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
            $data_kesehatanventeriner  = new Kesehatanventeriner;
            $data_kesehatanventeriner->Bulan = $request->Bulan;
            $data_kesehatanventeriner->Target = $request->Target;
            $data_kesehatanventeriner->Realisasi = $request->Realisasi;
            $data_kesehatanventeriner->Tahun = '2022';
            $data_kesehatanventeriner->akrual = '0';
            $data_kesehatanventeriner->sp2d = '0';
            $data_kesehatanventeriner->updateAll = '1';
            $data_kesehatanventeriner ->save();
            return redirect('/v22/anggaran_KesehatanVeteriner');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
            return view('admin.th22.serapan_anggaran.KesehatanVeteriner', [
                    "title" => 'Kesehatan Veteriner | SIMANTU'
                ], compact(
                'data_kesehatanventeriner','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Kesehatanventeriner::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/anggaran_KesehatanVeteriner');
                }else {
                    $model = Kesehatanventeriner::find($request->Id);
                    $model->Realisasi = $request->Realisasi;
                    $model->save();
                    return redirect('/v22/anggaran_KesehatanVeteriner');
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
            $data_kesehatanventeriner  = new Kesehatanventeriner;
            $data_kesehatanventeriner->Bulan = $request->Bulan;
            $data_kesehatanventeriner->Target = $request->Target;
            $data_kesehatanventeriner->Realisasi = $request->Realisasi;
            $data_kesehatanventeriner->Tahun = '2023';
            $data_kesehatanventeriner->akrual = '0';
            $data_kesehatanventeriner->sp2d = '0';
            $data_kesehatanventeriner->updateAll = '1';
            $data_kesehatanventeriner ->save();
            return redirect('/v23/anggaran_KesehatanVeteriner');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
            return view('admin.th23.serapan_anggaran.KesehatanVeteriner', [
                    "title" => 'Kesehatan Veteriner | SIMANTU'
                ], compact(
                'data_kesehatanventeriner','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Kesehatanventeriner::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/anggaran_KesehatanVeteriner');
                }else {
                    $model = Kesehatanventeriner::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v23/anggaran_KesehatanVeteriner');
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
            $data_kesehatanventeriner  = new Kesehatanventeriner;
            $data_kesehatanventeriner->Bulan = $request->Bulan;
            $data_kesehatanventeriner->Target = $request->Target;
            $data_kesehatanventeriner->Realisasi = $request->Realisasi;
            $data_kesehatanventeriner->Tahun = '2024';
            $data_kesehatanventeriner->akrual = '0';
            $data_kesehatanventeriner->sp2d = '0';
            $data_kesehatanventeriner->updateAll = '1';
            $data_kesehatanventeriner ->save();
            return redirect('/v24/anggaran_KesehatanVeteriner');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_kesehatanventeriner= Kesehatanventeriner::where('Tahun', $tahun)->get();
            return view('admin.th24.serapan_anggaran.KesehatanVeteriner', [
                    "title" => 'Kesehatan Veteriner | SIMANTU'
                ], compact(
                'data_kesehatanventeriner','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Kesehatanventeriner::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/anggaran_KesehatanVeteriner');
                }else {
                    $model = Kesehatanventeriner::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v24/anggaran_KesehatanVeteriner');
                }  
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
