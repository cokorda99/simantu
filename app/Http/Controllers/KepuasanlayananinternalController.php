<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kepuasaninternal;

class KepuasanlayananinternalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index23 (Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_internal  = new Kepuasaninternal;
            $data_internal->Bulan = $request->Bulan;
            $data_internal->Target = $request->Target;
            $data_internal->Realisasi = $request->Realisasi;
            $data_internal->Tahun = '2023';
            $data_internal->updateAll = '1';
            $data_internal ->save();
            return redirect('/v23/KepuasanLayananInternal');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_internal = Kepuasaninternal::where('Tahun', $tahun)->get();
            
            return view('admin.th23.IndeksKepuasanLayananInternal', [
                    "title" => 'Nilai Indeks Kepuasan Layanan Internal Pegawai | SIMANTU'
                ], compact(
                'data_internal','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Kepuasaninternal::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/KepuasanLayananInternal');
                }else {
                    $model = Kepuasaninternal::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/KepuasanLayananInternal');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

    public function index24 (Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_internal  = new Kepuasaninternal;
            $data_internal->Bulan = $request->Bulan;
            $data_internal->Target = $request->Target;
            $data_internal->Realisasi = $request->Realisasi;
            $data_internal->Tahun = '2024';
            $data_internal->updateAll = '1';
            $data_internal ->save();
            return redirect('/v24/KepuasanLayananInternal');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_internal = Kepuasaninternal::where('Tahun', $tahun)->get();
            
            return view('admin.th24.IndeksKepuasanLayananInternal', [
                    "title" => 'Nilai Indeks Kepuasan Layanan Internal Pegawai | SIMANTU'
                ], compact(
                'data_internal','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Kepuasaninternal::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/KepuasanLayananInternal');
                }else {
                    $model = Kepuasaninternal::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/KepuasanLayananInternal');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
