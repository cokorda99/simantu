<?php

namespace App\Http\Controllers\th23;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\th23\Keamananproduk23;
use App\Models\th23\Keamananprodukhewan23;
use App\Models\th23\Amrnasional23;

class Keamananproduk23Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_amrnasional23= Amrnasional23::all();
        $data_keamananproduk23= Keamananproduk23::all();
        $data_keamananprodukhewan23= Keamananprodukhewan23::all();
        
        return view('admin.th23.KeamananProduk', [
                "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
            ], compact(
            'data_keamananproduk23','data_amrnasional23','data_keamananprodukhewan23',
        ));
        // return view('admin.th23.KeamananProduk' , [
        //     "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Keamananproduk;

        return view('admin.th23.KeamananProduk', [
            "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
        ], compact(
        'model',
    ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $model = new Keamananproduk23;
        $model->Bulan = $request->Bulan;
        $model->Target = $request->Target;
        $model->Realisasi = $request->Realisasi;

        $model->save();

        return redirect('/KeamananProduk23')->with('success' , 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //
         $model = Keamananproduk23::find($id);

    //      return view('admin.th23.KeamananProduk', [
    //          "title" => 'Keamanan Produk dan Mutu Produk Hewan | SIMANTU'
    //      ], compact(
    //      'model',
    //  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->get('forUpdateAll') == "forUpdateAllValue"){
            $question = Keamananproduk23::where('updateAll',$id)
                ->update([
                    'Target' => $request->get('valueUpdateAll')
                ]);
                return redirect('/KeamananProduk23');
        }else {
            //other code ( update for unique record ) 
            $model = Keamananproduk23::find($id);
            $model->Bulan = $request->Bulan;
            $model->Target = $request->Target;
            $model->Realisasi = $request->Realisasi;
    
            $model->save();
    
            return redirect('/KeamananProduk23')->with('success' , 'Data berhasil diUpdate');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
