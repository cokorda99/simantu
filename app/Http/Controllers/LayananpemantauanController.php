<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layananpemantauan;

class LayananpemantauanController extends Controller
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
             $data_layananpemantauan  = new Layananpemantauan;
             $data_layananpemantauan->Bulan = $request->Bulan;
             $data_layananpemantauan->Target = $request->Target;
             $data_layananpemantauan->Realisasi = $request->Realisasi;
             $data_layananpemantauan->Tahun = '2024';
             $data_layananpemantauan->updateAll = '1';
             $data_layananpemantauan ->save();
             return redirect('/v24/LayananPemantauanDanEvaluasi');
 
         } elseif ($request->isMethod('get')) {
             //READ
             $tahun ='2024';
             $data_layananpemantauan = Layananpemantauan::where('Tahun', $tahun)->get();
             
             return view('admin.th24.LayananPemantauanDanEvaluasi', [
                     "title" => 'Layanan Pemantauan dan Evaluasi | SIMANTU'
                 ], compact(
                 'data_layananpemantauan','tahun'
             ));
         } elseif ($request->isMethod('patch')) {
             $tahun ='2024';
             if($request->get('forUpdateAll') == "forUpdateAllValue"){
                 $question = Layananpemantauan::where('updateAll',1)
                 ->where('Tahun', $tahun)
                     ->update([
                         'Target' => $request->get('valueUpdateAll')
                     ]);
                     return redirect('/v24/LayananPemantauanDanEvaluasi');
                 }else {
                     $model = Layananpemantauan::find($request->id);
                     $model->Bulan = $request->Bulan;
                     $model->Target = $request->Target;
                     $model->Realisasi = $request->Realisasi;
             
                     $model->save();
                     return redirect('/v24/LayananPemantauanDanEvaluasi');
                 }
         } else {
             // Handle other methods
             return response()->json(['message' => 'Method not allowed'], 405);
         }
     }
}
