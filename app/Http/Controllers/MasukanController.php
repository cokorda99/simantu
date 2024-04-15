<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masukan;

class MasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Masukan;
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v22/masukanBalai');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_masukan = Masukan::all();
            return view('admin.th22.masukanKepalaBalai', [
                    "title" => 'Masukan Kepala Balai | SIMANTU'
                ], compact(
                'data_masukan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Masukan::find($request->id);
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v22/masukanBalai');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Masukan::find($request->id);
            $model ->delete();
            return redirect('/v22/masukanBalai');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Masukan;
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v23/masukanBalai');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_masukan = Masukan::all();
            return view('admin.th23.masukanKepalaBalai', [
                    "title" => 'Masukan Kepala Balai | SIMANTU'
                ], compact(
                'data_masukan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Masukan::find($request->id);
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v23/masukanBalai');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Masukan::find($request->id);
            $model ->delete();
            return redirect('/v23/masukanBalai');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index24(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = new Masukan;
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v24/masukanBalai');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_masukan = Masukan::all();
            return view('admin.th24.masukanKepalaBalai', [
                    "title" => 'Masukan Kepala Balai | SIMANTU'
                ], compact(
                'data_masukan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Masukan::find($request->id);
            $model->Tanggal = $request->Tanggal;
            $model->Bulan = $request->Bulan;
            $model->Tahun = $request->Tahun;
            $model->Judul = $request->Judul;
            $model->Isi_Masukan = $request->Isi_Masukan;
            $model->save();
            return redirect('/v24/masukanBalai');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Masukan::find($request->id);
            $model ->delete();
            return redirect('/v24/masukanBalai');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
