<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index22(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->Nip == null) {
                # code...
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v22/Admin_profile');
            } else {
                # code...
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v22/Admin_profile');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2022';
            $data_user= User::all();
            return view('admin.th22.ProfileAdmin', [
                    "title" => 'PROFILE ADMIN |  SIMANTU'
                ], compact(
              'data_user','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = User::find($request->id);
            $image = $request->file('image');
            if ($image == null) {
                # code...
                $model->name = $request->name;
                $model->save();
            } else {
                # code...
                $model = User::find($request->id);
                $model->name = $request->name;
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $model->image = $imageName;
                $model->save();
            }
            return redirect('/v22/Admin_profile');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = User::find($request->id);
            $model ->delete();
            return redirect('/v22/Admin_profile');
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
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v23/Admin_profile');
            } else {
                # code...
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v23/Admin_profile');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2023';
            $data_user= User::all();
            return view('admin.th23.ProfileAdmin', [
                    "title" => 'PROFILE ADMIN |  SIMANTU'
                ], compact(
              'data_user','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = User::find($request->id);
            $image = $request->file('image');
            if ($image == null) {
                # code...
                $model->name = $request->name;
                $model->save();
            } else {
                # code...
                $model = User::find($request->id);
                $model->name = $request->name;
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $model->image = $imageName;
                $model->save();
            }
    
            return redirect('/v23/Admin_profile');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = User::find($request->id);
            $model ->delete();
            return redirect('/v23/Admin_profile');
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
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = '-';
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v24/Admin_profile');
            } else {
                # code...
                $model = new User;
                $model->Nama = $request->Nama;
                $model->Nip = $request->Nip;
                $model->Jenis = $request->Jenis;
                $model->Sebaran = $request->Sebaran;
                $model->Pendidikan = $request->Pendidikan;
                $model->Jabatan = $request->Jabatan;
                $model->Fungsional = $request->Fungsional;
                $model->save();
                return redirect('/v24/Admin_profile');
            }

        } elseif ($request->isMethod('get')) {
            //READ
            $tahun ='2024';
            $data_user= User::all();
            return view('admin.th24.ProfileAdmin', [
                    "title" => 'PROFILE ADMIN |  SIMANTU'
                ], compact(
              'data_user','tahun'
            ));
        } elseif ($request->isMethod('patch')) {
            $model = User::find($request->id);
            $image = $request->file('image');
            if ($image == null) {
                # code...
                $model->name = $request->name;
                $model->save();
            } else {
                # code...
                $model = User::find($request->id);
                $model->name = $request->name;
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $model->image = $imageName;
                $model->save();
            }
    
            return redirect('/v24/Admin_profile');
        } elseif ($request->isMethod('delete')) {
            //other code ( update for unique record ) 
            $model = User::find($request->id);
            $model ->delete();
            return redirect('/v24/Admin_profile');
        } else {
            // Handle other methods
            return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}
