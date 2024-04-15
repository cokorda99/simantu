<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dinasluar;

class DinasluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Dinasluar;
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = '2022';
            $model->save();
            return redirect('/v22/sdm_dinasluar');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_dinasluarAll= Dinasluar::where('Tahun', $tahun)->get();
            $data_dinasluar= Dinasluar::where('Tahun', $tahun)->paginate(10);
    
            return view('admin.th22.sdm.dinasluar', [
                    "title" => 'Dinas Luar | SIMANTU'
                ], compact(
                'data_dinasluar','data_dinasluarAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Dinasluar::find($request->id);
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = $request->Tahun;
    
            $model->save();
    
            return redirect('/v22/sdm_dinasluar');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Dinasluar::find($request->id);
            $model ->delete();
            return redirect('/v22/sdm_dinasluar');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Dinasluar;
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = '2023';
            $model->save();
            return redirect('/v23/sdm_dinasluar');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_dinasluarAll= Dinasluar::where('Tahun', $tahun)->get();
            $data_dinasluar= Dinasluar::where('Tahun', $tahun)->paginate(10);
    
            return view('admin.th23.sdm.dinasluar', [
                    "title" => 'Dinas Luar | SIMANTU'
                ], compact(
                'data_dinasluar','data_dinasluarAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Dinasluar::find($request->id);
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = $request->Tahun;
    
            $model->save();
    
            return redirect('/v23/sdm_dinasluar');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Dinasluar::find($request->id);
            $model ->delete();
            return redirect('/v23/sdm_dinasluar');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index24(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Dinasluar;
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = '2024';
            $model->save();
            return redirect('/v24/sdm_dinasluar');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_dinasluarAll= Dinasluar::where('Tahun', $tahun)->get();
            $data_dinasluar= Dinasluar::where('Tahun', $tahun)->paginate(10);
    
            return view('admin.th24.sdm.dinasluar', [
                    "title" => 'Dinas Luar | SIMANTU'
                ], compact(
                'data_dinasluar','data_dinasluarAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Dinasluar::find($request->id);
            $model->Nama = $request->Nama;
            $model->Tujuan = $request->Tujuan;
            $model->Tanggal = $request->Tanggal;
            $model->Kegiatan = $request->Kegiatan;
            $model->Tahun = $request->Tahun;
    
            $model->save();
    
            return redirect('/v24/sdm_dinasluar');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Dinasluar::find($request->id);
            $model ->delete();
            return redirect('/v24/sdm_dinasluar');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    
}

