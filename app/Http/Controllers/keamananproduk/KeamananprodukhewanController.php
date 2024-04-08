<?php

namespace App\Http\Controllers\keamananproduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\keamananproduk\Keamananprodukhewan;

class KeamananprodukhewanController extends Controller
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
            $data_keamananprodukhewan  = new Keamananprodukhewan;
            $data_keamananprodukhewan->Bulan = $request->Bulan;
            $data_keamananprodukhewan->Target = $request->Target;
            $data_keamananprodukhewan->Realisasi = $request->Realisasi;
            $data_keamananprodukhewan->Tahun = '2022';
            $data_keamananprodukhewan->updateAll = '1';
            $data_keamananprodukhewan ->save();
            return redirect('/v22/Keamanan_ProdukHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_keamananprodukhewan = Keamananprodukhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th22.detailkeamananproduk.Keamananprodukhewan', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                'data_keamananprodukhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananprodukhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/Keamanan_ProdukHewan');
                }else {
                    $model = Keamananprodukhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v22/Keamanan_ProdukHewan');
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
            $data_keamananprodukhewan  = new Keamananprodukhewan;
            $data_keamananprodukhewan->Bulan = $request->Bulan;
            $data_keamananprodukhewan->Target = $request->Target;
            $data_keamananprodukhewan->Realisasi = $request->Realisasi;
            $data_keamananprodukhewan->Tahun = '2023';
            $data_keamananprodukhewan->updateAll = '1';
            $data_keamananprodukhewan ->save();
            return redirect('/v23/Keamanan_ProdukHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_keamananprodukhewan = Keamananprodukhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th23.detailkeamananproduk.Keamananprodukhewan', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                'data_keamananprodukhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananprodukhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/Keamanan_ProdukHewan');
                }else {
                    $model = Keamananprodukhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v23/Keamanan_ProdukHewan');
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
            $data_keamananprodukhewan  = new Keamananprodukhewan;
            $data_keamananprodukhewan->Bulan = $request->Bulan;
            $data_keamananprodukhewan->Target = $request->Target;
            $data_keamananprodukhewan->Realisasi = $request->Realisasi;
            $data_keamananprodukhewan->Tahun = '2024';
            $data_keamananprodukhewan->updateAll = '1';
            $data_keamananprodukhewan ->save();
            return redirect('/v24/Keamanan_ProdukHewan');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_keamananprodukhewan = Keamananprodukhewan::where('Tahun', $tahun)->get();
            
            return view('admin.th24.detailkeamananproduk.Keamananprodukhewan', [
                    "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
                ], compact(
                'data_keamananprodukhewan','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Keamananprodukhewan::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/Keamanan_ProdukHewan');
                }else {
                    $model = Keamananprodukhewan::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/Keamanan_ProdukHewan');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
