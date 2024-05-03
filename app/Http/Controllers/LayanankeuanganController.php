<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layanankeuangan;

class LayanankeuanganController extends Controller
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
             $data_layanankeuangan  = new Layanankeuangan;
             $data_layanankeuangan->Bulan = $request->Bulan;
             $data_layanankeuangan->Target = $request->Target;
             $data_layanankeuangan->Realisasi = $request->Realisasi;
             $data_layanankeuangan->Tahun = '2024';
             $data_layanankeuangan->updateAll = '1';
             $data_layanankeuangan ->save();
             return redirect('/v24/LayananManajemenKeuangan');
 
         } elseif ($request->isMethod('get')) {
             //READ
             $tahun ='2024';
             $data_layanankeuangan = Layanankeuangan::where('Tahun', $tahun)->get();
             
             return view('admin.th24.LayananKeuangan', [
                     "title" => 'Layanan Keuangan | SIMANTU'
                 ], compact(
                 'data_layanankeuangan','tahun'
             ));
         } elseif ($request->isMethod('patch')) {
             $tahun ='2024';
             if($request->get('forUpdateAll') == "forUpdateAllValue"){
                 $question = Layanankeuangan::where('updateAll',1)
                 ->where('Tahun', $tahun)
                     ->update([
                         'Target' => $request->get('valueUpdateAll')
                     ]);
                     return redirect('/v24/LayananManajemenKeuangan');
                 }else {
                     $model = Layanankeuangan::find($request->id);
                     $model->Bulan = $request->Bulan;
                     $model->Target = $request->Target;
                     $model->Realisasi = $request->Realisasi;
             
                     $model->save();
                     return redirect('/v24/LayananManajemenKeuangan');
                 }
         } else {
             // Handle other methods
             return response()->json(['message' => 'Method not allowed'], 405);
         }
     }
}
