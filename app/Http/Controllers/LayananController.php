<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index22(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data_layanan = new Layanan;
            $data_layanan->Bulan = $request->Bulan;
            $data_layanan->Target = $request->Target;
            $data_layanan->Realisasi = $request->Realisasi;
            $data_layanan->Tahun = '2022';
            $data_layanan->updateAll = '1';
            $data_layanan->save();
            return redirect('/v22/LayananDukungan');
        } elseif ($request->isMethod('get')) {
            $tahun = '2022';
            $data_layanan = Layanan::where('Tahun', $tahun)->get();
            return view('admin.th22.LayananDukungan', ["title" => 'Layanan Dukungan Manajemen Internal | SIMANTU'], compact('data_layanan', 'tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Layanan::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v22/LayananDukungan');
            } else {
                $model = Layanan::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v22/LayananDukungan');
            }
        } else {
            return response()->json(['message' => 'Method not Allowed'], 405);
        }
    }

    public function index23(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data_layanan = new Layanan;
            $data_layanan->Bulan = $request->Bulan;
            $data_layanan->Target = $request->Target;
            $data_layanan->Realisasi = $request->Realisasi;
            $data_layanan->Tahun = '2023';
            $data_layanan->updateAll = '1';
            $data_layanan->save();
            return redirect('/v23/LayananDukungan');
        } elseif ($request->isMethod('get')) {
            $tahun = '2023';
            $data_layanan = Layanan::where('Tahun', $tahun)->get();
            return view('admin.th23.LayananDukungan', ["title" => 'Layanan Dukungan Manajemen Internal | SIMANTU'], compact('data_layanan', 'tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Layanan::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v23/LayananDukungan');
            } else {
                $model = Layanan::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v23/LayananDukungan');
            }
        } else {
            return response()->json(['message' => 'Method not Allowed'], 405);
        }
    }

    public function index24(Request $request) 
    {
        if ($request->isMethod('post')) {
            $data_layanan = new Layanan;
            $data_layanan->Bulan = $request->Bulan;
            $data_layanan->Target = $request->Target;
            $data_layanan->Realisasi = $request->Realisasi;
            $data_layanan->Tahun = '2024';
            $data_layanan->updateAll = '1';
            $data_layanan->save();
            return redirect('/v24/LayananDukungan');
        } elseif ($request->isMethod('get')) {
            $tahun = '2024';
            $data_layanan = Layanan::where('Tahun', $tahun)->get();
            return view('admin.th24.LayananDukungan', ["title" => 'Layanan Dukungan Manajemen Internal | SIMANTU'], compact('data_layanan', 'tahun'));
        } elseif ($request->isMethod('patch')) {
            $tahun = '2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Layanan::where('updateAll',1)->where('Tahun', $tahun)->update(['Target' => $request->get('valueUpdateAll')]);
                return redirect('/v24/LayananDukungan');
            } else {
                $model = Layanan::find($request->id);
                $model->Bulan = $request->Bulan;
                $model->Target = $request->Target;
                $model->Realisasi = $request->Realisasi;

                $model->save();
                return redirect('/v24/LayananDukungan');
            }
        } else {
            return response()->json(['message' => 'Method not Allowed'], 405);
        }
    }
}
