<?php

namespace App\Http\Controllers\anggaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\anggaran\Dukunganmanajemen;

class DukunganmanajemenController extends Controller
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
            $data_dukunganmanajemen  = new Dukunganmanajemen;
            $data_dukunganmanajemen->Bulan = $request->Bulan;
            $data_dukunganmanajemen->Target = $request->Target;
            $data_dukunganmanajemen->Realisasi = $request->Realisasi;
            $data_dukunganmanajemen->Tahun = '2022';
            $data_dukunganmanajemen->akrual = '0';
            $data_dukunganmanajemen->sp2d = '0';
            $data_dukunganmanajemen->updateAll = '1';
            $data_dukunganmanajemen ->save();
            return redirect('/v22/anggaran_DukunganManajemen');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();
            return view('admin.th22.serapan_anggaran.DukunganManajemen', [
                    "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
                ], compact(
                'data_dukunganmanajemen','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Dukunganmanajemen::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/anggaran_DukunganManajemen');
                }else {
                    $model = Dukunganmanajemen::find($request->Id);
                    $model->Realisasi = $request->Realisasi;
                    $model->save();
                    return redirect('/v22/anggaran_DukunganManajemen');
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
            $data_dukunganmanajemen  = new Dukunganmanajemen;
            $data_dukunganmanajemen->Bulan = $request->Bulan;
            $data_dukunganmanajemen->Target = $request->Target;
            $data_dukunganmanajemen->Realisasi = $request->Realisasi;
            $data_dukunganmanajemen->Tahun = '2023';
            $data_dukunganmanajemen->akrual = '0';
            $data_dukunganmanajemen->sp2d = '0';
            $data_dukunganmanajemen->updateAll = '1';
            $data_dukunganmanajemen ->save();
            return redirect('/v23/anggaran_DukunganManajemen');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();
            return view('admin.th23.serapan_anggaran.DukunganManajemen', [
                    "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
                ], compact(
                'data_dukunganmanajemen','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Dukunganmanajemen::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/anggaran_DukunganManajemen');
                }else {
                    $model = Dukunganmanajemen::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v23/anggaran_DukunganManajemen');
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
            $data_dukunganmanajemen  = new Dukunganmanajemen;
            $data_dukunganmanajemen->Bulan = $request->Bulan;
            $data_dukunganmanajemen->Target = $request->Target;
            $data_dukunganmanajemen->Realisasi = $request->Realisasi;
            $data_dukunganmanajemen->Tahun = '2024';
            $data_dukunganmanajemen->akrual = '0';
            $data_dukunganmanajemen->sp2d = '0';
            $data_dukunganmanajemen->updateAll = '1';
            $data_dukunganmanajemen ->save();
            return redirect('/v24/anggaran_DukunganManajemen');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_dukunganmanajemen= Dukunganmanajemen::where('Tahun', $tahun)->get();
            return view('admin.th24.serapan_anggaran.DukunganManajemen', [
                    "title" => 'Dukungan Manajemen dan Teknis Lainnya | SIMANTU'
                ], compact(
                'data_dukunganmanajemen','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Dukunganmanajemen::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/anggaran_DukunganManajemen');
                }else {
                    $model = Dukunganmanajemen::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v24/anggaran_DukunganManajemen');
                }  
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
