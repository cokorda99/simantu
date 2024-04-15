<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Keamananproduk;
use App\Models\keamananproduk\Keamananprodukhewan;
use App\Models\keamananproduk\Amrnasional;

class KeamananprodukController extends Controller
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
            $data_keamananproduk  = new Keamananproduk;
            $data_keamananproduk->Bulan = $request->Bulan;
            $data_keamananproduk->Target = $request->Target;
            $data_keamananproduk->Realisasi = $request->Realisasi;
            $data_keamananproduk->Tahun = '2022';
            $data_keamananproduk->updateAll = '1';
            $data_keamananproduk ->save();
            return redirect('/v22/KeamananProduk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_keamananproduk = Keamananproduk::where('Tahun', $tahun)->get();
            
            return view('admin.th22.KeamananProduk', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                'data_keamananproduk','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananproduk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/KeamananProduk');
                }else {
                    $model = Keamananproduk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/KeamananProduk');
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
            $data_keamananproduk  = new Keamananproduk;
            $data_keamananproduk->Bulan = $request->Bulan;
            $data_keamananproduk->Target = $request->Target;
            $data_keamananproduk->Realisasi = $request->Realisasi;
            $data_keamananproduk->Tahun = '2023';
            $data_keamananproduk->updateAll = '1';
            $data_keamananproduk ->save();
            return redirect('/v23/KeamananProduk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_keamananproduk = Keamananproduk::where('Tahun', $tahun)->get();
            $data_amrnasional = Amrnasional::where('Tahun', $tahun)->get();
            $data_keamananprodukhewan = Keamananprodukhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th23.KeamananProduk', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                'data_keamananproduk','tahun','data_amrnasional','data_keamananprodukhewan'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananproduk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/KeamananProduk');
                }else {
                    $model = Keamananproduk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/KeamananProduk');
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
            $data_keamananproduk  = new Keamananproduk;
            $data_keamananproduk->Bulan = $request->Bulan;
            $data_keamananproduk->Target = $request->Target;
            $data_keamananproduk->Realisasi = $request->Realisasi;
            $data_keamananproduk->Tahun = '2024';
            $data_keamananproduk->updateAll = '1';
            $data_keamananproduk ->save();
            return redirect('/v24/KeamananProduk');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_keamananproduk = Keamananproduk::where('Tahun', $tahun)->get();
            $data_amrnasional = Amrnasional::where('Tahun', $tahun)->get();
            $data_keamananprodukhewan = Keamananprodukhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th24.KeamananProduk', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                    'data_keamananproduk','tahun','data_amrnasional','data_keamananprodukhewan'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananproduk::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/KeamananProduk');
                }else {
                    $model = Keamananproduk::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/KeamananProduk');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
