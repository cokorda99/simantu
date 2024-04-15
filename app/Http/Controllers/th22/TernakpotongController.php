<?php

namespace App\Http\Controllers\th22;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th22\Ternakpotong;

class TernakpotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index22(Request $request) 
   {
    if ($request->isMethod('post')) {

        $data_ternakpotong = new Ternakpotong;
        $data_ternakpotong->Bulan = $request-Bulan;
        $data_ternakpotong->Target = $request->Target;
        $data_ternakpotong->Realisasi = $request->Realisasi;
        $data_ternakpotong->Tahun = '2022';
        $data_ternakpotong->updateAll = '1';
        $data_ternakpotong->save();
        return redirect('/v22/TernakRuminansia');
    } elseif ($request->isMethod('get')) {
        $tahun = '2022';
        $data_ternakpotong = Ternakpotong::where('Tahun', $tahun)->get();

        return view('admin.th22.TernakRuminansia', ["title" => 'Ternak Potong Ruminansia | SIMANTU'], compact('data_ternakpotong','tahun'));
    } elseif ($request->isMethod('patch')) {
        $tahun = '2022';
        if($request->get('forUpdateAll') == "forUpdateAllValue"){
            $question = Ternakpotong::where('updateAll',1)->where('Tahun', $tahun)->update([
                'Target' => $request->get('valueUpdateAll')
            ]);
            return redirect('/v22/TernakRuminansia');
        } else {
            $model = Ternakpotong::find($request->id);
            $model -> Bulan = $request->Bulan;
            $model -> Target = $request->Target;
            $model -> Realisasi = $request->Realisasi;

            $model->save();
            return redirect('/v22/TernakRuminansia');
        }
    } else {
        return response()->json(['message' => 'Method not allowed'], 405);
    }
   }
}
