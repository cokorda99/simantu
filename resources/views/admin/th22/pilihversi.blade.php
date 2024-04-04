@extends('layouts/mainversi')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-auto"></div>
      <div class="col col-lg-5" style="background-color: rgba(131, 89, 163, 0.5); height: 100vh;">
        <div class="container" style="margin-top: 30vh;">
            <h3 style="text-align: center; font-weight: bold; color: white;">Simantu BBVET Denpasar</h3>
            <h5 style="text-align: center; color: white;">Silahkan Pilih Tahun Anggaran yang Akan Ditampilkan</h5>
            <br>
            <div class="container" style="padding-left: 50px; padding-right: 50px;">
                <a href="/home2022"><input type="submit" class="btn btn-outline-light btn-lg btn-block" value="Data Tahun 2022" name="tahun_2022" style="border-radius: 25px;"></a>
                <br>
                <a href="/home2023"><input type="submit" class="btn btn-outline-light btn-lg btn-block" value="Data Tahun 2023" name="tahun_2023" style="border-radius: 25px;"></a>
                <br>
                <a href="/home2023"><input type="submit" class="btn btn-outline-light btn-lg btn-block" value="Data Tahun 2024" name="tahun_2023" style="border-radius: 25px;"></a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection