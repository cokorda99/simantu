<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layanankinerja;

class LayanankinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index23(Request $request)
    {
        if($request->isMethod('post')){
            $data_layanankinerja = new Layanankinerja;
            $data_layanankinerja->Bulan = $request->Bulan;
            $data_layanankinerja->Target = $request->Target;
            $data_layanankinerja->Realisasi = $request->Realisasi;
            $data_layanankinerja->Tahun = '2023';
            $data_layanankinerja->updateAll = '1';
            $data_layanankinerja->save();
            return redirect('/v23/LayananManajemenKinerja');
        } elseif ($request->isMethod('get')){
            $tahun = '2023';
            $data_layanankinerja = Layanankinerja::where('Tahun', $tahun)->get();
            return view('admin.th23.LayananKinerja', ["title"=> 'Layanan Manajemen Kinerja Internal | SIMANTU'], compact('data_layanankinerja', 'tahun'));
        } elseif ($request->isMethod('patch')){
            $tahun = '2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue") {
                $question = Layanankinerja::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v23/LayananManajemenKinerja');
            } else {
                $model = Layanankinerja::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v23/LayananManajemenKinerja');
            }
        } else {
            return response()->json(['message' => 'Method not Allowed'], 405);
        }
    }

    public function index24(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data_layanankinerja = new Layanankinerja;
            $data_layanankinerja->Bulan = $request->Bulan;
            $data_layanankinerja->Target = $request->Target;
            $data_layanankinerja->Realisasi = $request->Realisasi;
            $data_layanankinerja->Tahun = '2024';
            $data_layanankinerja->updateAll = '1';
            $data_layanankinerja->save();
            return redirect('/v24/LayananManajemenKinerja');
        } elseif ($request->isMethod('get'))
        {
            $tahun = '2024';
            $data_layanankinerja = Layanankinerja::where('Tahun', $tahun)->get();
            return view('admin.th24.LayananKinerja', ["title"=> 'Layanan Manajemen Kinerja Internal | SIMANTU'], compact('data_layanankinerja', 'tahun'));
        } elseif ($request->isMethod('patch'))
        {
            $tahun = '2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue") {
                $question = Layanankinerja::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v24/LayananManajemenKinerja');
            } else {
                $model = Layanankinerja::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v24/LayananManajemenKinerja');
            }
        } else {
            return response()->json(['message' => 'Method not Allowed'], 405);
        }
    }
}
