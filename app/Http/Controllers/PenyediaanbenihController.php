<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penyediaanbenih;
class PenyediaanbenihController extends Controller
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
            $data_penyediaanbenih  = new Penyediaanbenih;
            $data_penyediaanbenih->Bulan = $request->Bulan;
            $data_penyediaanbenih->Target = $request->Target;
            $data_penyediaanbenih->Realisasi = $request->Realisasi;
            $data_penyediaanbenih->Tahun = '2022';
            $data_penyediaanbenih->akrual = '0';
            $data_penyediaanbenih->sp2d = '0';
            $data_penyediaanbenih->updateAll = '1';
            $data_penyediaanbenih ->save();
            return redirect('/v22/anggaran_PenyedianBenih');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
            return view('admin.th22.serapan_anggaran.PenyedianBenih', [
                    "title" => 'Penyedian Benih dan Bibit | SIMANTU'
                ], compact(
                'data_penyediaanbenih','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2022';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyediaanbenih::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v22/anggaran_PenyedianBenih');
                }else {
                    $model = Penyediaanbenih::find($request->Id);
                    $model->Realisasi = $request->Realisasi;
                    $model->save();
                    return redirect('/v22/anggaran_PenyedianBenih');
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
            $data_penyediaanbenih  = new Penyediaanbenih;
            $data_penyediaanbenih->Bulan = $request->Bulan;
            $data_penyediaanbenih->Target = $request->Target;
            $data_penyediaanbenih->Realisasi = $request->Realisasi;
            $data_penyediaanbenih->Tahun = '2023';
            $data_penyediaanbenih->akrual = '0';
            $data_penyediaanbenih->sp2d = '0';
            $data_penyediaanbenih->updateAll = '1';
            $data_penyediaanbenih ->save();
            return redirect('/v23/anggaran_PenyedianBenih');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
            return view('admin.th23.serapan_anggaran.PenyedianBenih', [
                    "title" => 'Penyedian Benih dan Bibit | SIMANTU'
                ], compact(
                'data_penyediaanbenih','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2023';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyediaanbenih::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v23/anggaran_PenyedianBenih');
                }else {
                    $model = Penyediaanbenih::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v23/anggaran_PenyedianBenih');
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
            $data_penyediaanbenih  = new Penyediaanbenih;
            $data_penyediaanbenih->Bulan = $request->Bulan;
            $data_penyediaanbenih->Target = $request->Target;
            $data_penyediaanbenih->Realisasi = $request->Realisasi;
            $data_penyediaanbenih->Tahun = '2024';
            $data_penyediaanbenih->akrual = '0';
            $data_penyediaanbenih->sp2d = '0';
            $data_penyediaanbenih->updateAll = '1';
            $data_penyediaanbenih ->save();
            return redirect('/v24/anggaran_PenyedianBenih');

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_penyediaanbenih= Penyediaanbenih::where('Tahun', $tahun)->get();
            return view('admin.th24.serapan_anggaran.PenyedianBenih', [
                    "title" => 'Penyedian Benih dan Bibit | SIMANTU'
                ], compact(
                'data_penyediaanbenih','tahun',
            ));
        } elseif ($request->isMethod('patch')) {
            $tahun ='2024';
            if($request->get('forUpdateAll') == "forUpdateAllValue"){
                $question = Penyediaanbenih::where('updateAll',1)
                ->where('Tahun', $tahun)
                    ->update([
                        'Target' => $request->get('valueUpdateAll')
                    ]);
                    return redirect('/v24/anggaran_PenyedianBenih');
                }else {
                    $model = Penyediaanbenih::find($request->Id);
                    $model->akrual = $request->akrual;
                    $model->sp2d = $request->sp2d;
                    $model->save();
                    return redirect('/v24/anggaran_PenyedianBenih');
                }  
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }


}
