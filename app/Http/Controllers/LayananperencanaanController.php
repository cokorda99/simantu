<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layananperencanaan;

class LayananperencanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function index24(Request $request)
     {
         if ($request->isMethod('post')) {
 
             //CREATE
             $data_layananperencanaan  = new Layananperencanaan;
             $data_layananperencanaan->Bulan = $request->Bulan;
             $data_layananperencanaan->Target = $request->Target;
             $data_layananperencanaan->Realisasi = $request->Realisasi;
             $data_layananperencanaan->Tahun = '2024';
             $data_layananperencanaan->updateAll = '1';
             $data_layananperencanaan ->save();
             return redirect('/v24/LayananPerencanaanDanPenganggaran');
 
         } elseif ($request->isMethod('get')) {
             //READ
             $tahun ='2024';
             $data_layananperencanaan = Layananperencanaan::where('Tahun', $tahun)->get();
             
             return view('admin.th24.LayananPerencanaanDanPenganggaran', [
                     "title" => 'Layanan Perencanaan dan Penganggaran | SIMANTU'
                 ], compact(
                 'data_layananperencanaan','tahun'
             ));
         } elseif ($request->isMethod('patch')) {
             $tahun ='2024';
             if($request->get('forUpdateAll') == "forUpdateAllValue"){
                 $question = Layananperencanaan::where('updateAll',1)
                 ->where('Tahun', $tahun)
                     ->update([
                         'Target' => $request->get('valueUpdateAll')
                     ]);
                     return redirect('/v24/LayananPerencanaanDanPenganggaran');
                 }else {
                     $model = Layananperencanaan::find($request->id);
                     $model->Bulan = $request->Bulan;
                     $model->Target = $request->Target;
                     $model->Realisasi = $request->Realisasi;
             
                     $model->save();
                     return redirect('/v24/LayananPerencanaanDanPenganggaran');
                 }
         } else {
             // Handle other methods
             return response()->json(['message' => 'Method not allowed'], 405);
         }
     }
}
