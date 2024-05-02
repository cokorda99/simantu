<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layananperkantoran;

class LayananperkantoranController extends Controller
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
            $data_layananperkantoran  = new Layananperkantoran;
            $data_layananperkantoran->Bulan = $request->Bulan;
            $data_layananperkantoran->Target = $request->Target;
            $data_layananperkantoran->Realisasi = $request->Realisasi;
            $data_layananperkantoran->Tahun = '2024';
            $data_layananperkantoran->updateAll = '1';
            $data_layananperkantoran ->save();
            return redirect('/v24/LayananPerkantoran');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_layananperkantoran = Layananperkantoran::where('Tahun', $tahun)->get();
            
            return view('admin.th24.LayananPerkantoran', [
                    "title" => 'Layanan Perkantoran | SIMANTU'
                ], compact(
                'data_layananperkantoran','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Layananperkantoran::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/LayananPerkantoran');
                }else {
                    $model = Layananperkantoran::find($request->id);
                    $model->Bulan = $request->Bulan;
                    $model->Target = $request->Target;
                    $model->Realisasi = $request->Realisasi;
            
                    $model->save();
                    return redirect('/v24/LayananPerkantoran');
                }
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
