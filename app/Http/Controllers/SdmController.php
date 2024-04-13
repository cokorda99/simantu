<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sdm;

class SdmController extends Controller
{
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->Nip == null) {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v22/sdm_sdm');
            } else {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v22/sdm_sdm');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_sdmAll= Sdm::all();
            $data_sdm= Sdm::paginate(10);
    
            return view('admin.th22.sdm.sdm', [
                    "title" => 'SDM | SIMANTU'
                ], compact(
                'data_sdm','data_sdmAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Sdm::find($request->id);
            $model->Nama = $request->Nama;
            $model->Nip = $request->Nip;
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
            $model->save();
    
            return redirect('/v22/sdm_sdm');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Sdm::find($request->id);
            $model ->delete();
            return redirect('/v22/sdm_sdm');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

    public function index23(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->Nip == null) {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v23/sdm_sdm');
            } else {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v23/sdm_sdm');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_sdmAll= Sdm::all();
            $data_sdm= Sdm::paginate(10);

            // menangkap data pencarian
            $cari = $request->cari;
            if ($cari == null) {
                # code...
                // mengirim data pegawai ke view index
                $data_sdm= Sdm::paginate(10);

            } else {
                # code...
                // mengambil data dari table pegawai sesuai pencarian data
                $data_sdm = Sdm::where([
                    ['Nama','!=', Null],
                    [function ($query) use ($request){
                        if(($cari = $request->cari)){
                            $query->orWhere('Nama', 'LIKE', '%' . $cari . '%')->get();
                        }
                    }]
                ])->paginate(10);
            }
        
            return view('admin.th23.sdm.sdm', [
                    "title" => 'SDM | SIMANTU'
                ], compact(
                'data_sdm','data_sdmAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Sdm::find($request->id);
            $model->Nama = $request->Nama;
            $model->Nip = $request->Nip;
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
            $model->save();
    
            return redirect('/v23/sdm_sdm');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Sdm::find($request->id);
            $model ->delete();
            return redirect('/v23/sdm_sdm');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

    public function index24(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->Nip == null) {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v24/sdm_sdm');
            } else {
                # code...
                $model = new Sdm;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v24/sdm_sdm');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_sdmAll= Sdm::all();
            $data_sdm= Sdm::paginate(10);

            // menangkap data pencarian
            $cari = $request->cari;
            if ($cari == null) {
                # code...
                // mengirim data pegawai ke view index
                $data_sdm= Sdm::paginate(10);

            } else {
                # code...
                // mengambil data dari table pegawai sesuai pencarian data
                $data_sdm = Sdm::where([
                    ['Nama','!=', Null],
                    [function ($query) use ($request){
                        if(($cari = $request->cari)){
                            $query->orWhere('Nama', 'LIKE', '%' . $cari . '%')->get();
                        }
                    }]
                ])->paginate(10);
            }
    
            return view('admin.th24.sdm.sdm', [
                    "title" => 'SDM | SIMANTU'
                ], compact(
                'data_sdm','data_sdmAll','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = Sdm::find($request->id);
            $model->Nama = $request->Nama;
            $model->Nip = $request->Nip;
            $model->Jenis = $request->Jenis;
            $model->Sebaran = $request->Sebaran;
            $model->Pendidikan = $request->Pendidikan;
            $model->Jabatan = $request->Jabatan;
            $model->Fungsional = $request->Fungsional;
    
            $model->save();
    
            return redirect('/v24/sdm_sdm');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = Sdm::find($request->id);
            $model ->delete();
            return redirect('/v24/sdm_sdm');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }

}
