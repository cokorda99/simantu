<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penyakit5year;
use App\Models\Jenispilihanpenyakit;

class Penyakit5yearController extends Controller
{
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_penyakit5year = new Penyakit5year;
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
    
            $data_penyakit5year->save();
            return redirect('/v22/pengaturan_Penyakit_terakhir');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_penyakit5year= Penyakit5year::all();
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th22.penyakit5year.penyakit_crud', [
                    "title" => 'Pengaturan Penyakit 5 Tahun Terakhir | SIMANTU'
                ], compact(
                'data_penyakit5year','data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
            $data_penyakit5year->save();
            return redirect('/v22/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year ->delete();
            return redirect('/v22/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diHapus');
        } 
        else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_penyakit5year = new Penyakit5year;
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
    
            $data_penyakit5year->save();
            return redirect('/v23/pengaturan_Penyakit_terakhir');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_penyakit5year= Penyakit5year::all();
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th23.penyakit5year.penyakit_crud', [
                    "title" => 'Pengaturan Penyakit 5 Tahun Terakhir | SIMANTU'
                ], compact(
                'data_penyakit5year','data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
            $data_penyakit5year->save();
            return redirect('/v23/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year ->delete();
            return redirect('/v23/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diHapus');
        } 
        else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
    public function index24(Request $request)
    {
        if ($request->isMethod('post')) {

            //CREATE
            $data_penyakit5year = new Penyakit5year;
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
    
            $data_penyakit5year->save();
            return redirect('/v24/pengaturan_Penyakit_terakhir');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_penyakit5year= Penyakit5year::all();
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th24.penyakit5year.penyakit_crud', [
                    "title" => 'Pengaturan Penyakit 5 Tahun Terakhir | SIMANTU'
                ], compact(
                'data_penyakit5year','data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year->Kabupaten= $request->Kabupaten;
            $data_penyakit5year->Penyakit = $request->Penyakit;
            $data_penyakit5year->Th2018 = $request->Th2018;
            $data_penyakit5year->Th2019 = $request->Th2019;
            $data_penyakit5year->Th2020 = $request->Th2020;
            $data_penyakit5year->Th2021 = $request->Th2021;
            $data_penyakit5year->Th2022 = $request->Th2022;
            $data_penyakit5year->Th2023 = $request->Th2023;
            $data_penyakit5year->Th2024 = $request->Th2024;
            $data_penyakit5year->save();
            return redirect('/v24/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_penyakit5year = Penyakit5year::find($request->Id);
            $data_penyakit5year ->delete();
            return redirect('/v24/pengaturan_Penyakit_terakhir')->with('success' , 'Data berhasil diHapus');
        } 
        else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
