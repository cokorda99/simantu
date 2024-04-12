<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jenispilihanpenyakit;

class JenispilihanpenyakitController extends Controller
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
            $data_jenispenyakit = new Jenispilihanpenyakit;
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;

            $data_jenispenyakit->save();
            return redirect('/v22/data_Pilihan_Penyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th22.penyakit5year.jenispenyakit_crud', [
                    "title" => 'Data Jenis Penyakit | SIMANTU'
                ], compact(
                'data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;
            $data_jenispenyakit->save();
            return redirect('/v22/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit ->delete();
            return redirect('/v22/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diHapus');
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
            $data_jenispenyakit = new Jenispilihanpenyakit;
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;

            $data_jenispenyakit->save();
            return redirect('/v23/data_Pilihan_Penyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th23.penyakit5year.jenispenyakit_crud', [
                    "title" => 'Data Jenis Penyakit | SIMANTU'
                ], compact(
                'data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;
            $data_jenispenyakit->save();
            return redirect('/v23/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit ->delete();
            return redirect('/v23/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diHapus');
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
            $data_jenispenyakit = new Jenispilihanpenyakit;
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;

            $data_jenispenyakit->save();
            return redirect('/v24/data_Pilihan_Penyakit');

        } elseif ($request->isMethod('get')) {
            //READ
            $data_jenispenyakit= Jenispilihanpenyakit::all();
            return view('admin.th24.penyakit5year.jenispenyakit_crud', [
                    "title" => 'Data Jenis Penyakit | SIMANTU'
                ], compact(
                'data_jenispenyakit'
            ));
        } elseif ($request->isMethod('patch')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit->Nama_Penyakit= $request->Nama_Penyakit;
            $data_jenispenyakit->save();
            return redirect('/v24/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diUpdate');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $data_jenispenyakit = Jenispilihanpenyakit::find($request->Id);
            $data_jenispenyakit ->delete();
            return redirect('/v24/data_Pilihan_Penyakit')->with('success' , 'Data berhasil diHapus');
        } 
        else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

}