@extends('admin/th24/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Beranda 2024
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-10">
                <h5>Wilayah Kerja Balai Besar Veteriner Denpasar & Sebaran Data Penyakit Hewan</h5>
              </div>
              @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'adminepi@gmail.com')
              <div class="col-lg-2">
                <div class="float-end">
                  <a href="pengaturan_Penyakit_terakhir"><button class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button></a>
                </div>
              </div>
              @endif
            </div>
          </div>
          <div class="card-body">
            <div id="map" style="height:500px"></div>
            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-bali-tab" data-bs-toggle="pill" data-bs-target="#pills-bali" type="button" role="tab" aria-controls="pills-bali" aria-selected="true">Bali</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-ntb-tab" data-bs-toggle="pill" data-bs-target="#pills-ntb" type="button" role="tab" aria-controls="pills-ntb" aria-selected="false">NTB</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-ntt-tab" data-bs-toggle="pill" data-bs-target="#pills-ntt" type="button" role="tab" aria-controls="pills-ntt" aria-selected="false">NTT</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-bali" role="tabpanel" aria-labelledby="pills-bali-tab">
                <?php
                $bali_kab = array('Kabupaten Badung', 'Kabupaten Bangli', 'Kabupaten Buleleng', 'Kabupaten Gianyar', 'Kabupaten Jembrana', 'Kabupaten Karangasem', 'Kabupaten Klungkung', 'Kabupaten Tabanan', 'Kota Denpasar');
                $href_bali_kab = array('kab_Badung', 'kab_Bangli', 'kab_Buleleng', 'kab_Gianyar', 'kab_Jembrana', 'kab_Karangasem', 'kab_Klungkung', 'kab_Tabanan', 'kot_Denpasar');
                $color_bali_kab = array('#658edb','#cfdb65', '#dbac65', '#a265db','#f5d5d5', '#f06587', '#f07065','#65f0f0', '#a1f7b5');

                $ntb_kab = array('Kabupaten Bima', 'Kabupaten Dompu', 'Kabupaten Lombok Barat', 'Kabupaten Lombok Tengah', 'Kabupaten Lombok Timur', 'Kabupaten Lombok Utara', 'Kabupaten Sumbawa', 'Kabupaten Sumbawa Barat', 'Kota Bima', 'Kota Mataram');
                $href_ntb_kab = array('kab_Bima', 'kab_Dompu', 'kab_Lombok_Barat', 'kab_Lombok_Tengah', 'kab_Lombok_Timur', 'kab_Lombok_Utara', 'kab_Sumbawa', 'kab_Sumbawa_Barat', 'kot_Bima', 'kot_Mataram');
                $color_ntb_kab = array('#658edb','#cfdb65', '#dbac65', '#a265db','#f5d5d5', '#f06587', '#f07065','#65f0f0', '#a1f7b5' , '#dbeb52');


                $ntt_kab = array('Kabupaten Alor', 'Kabupaten Belu', 'Kabupaten Ende', 'Kabupaten Flores Timur', 'Kabupaten Kupang', 'Kabupaten Lembata', 'Kabupaten Malaka', 'Kabupaten Manggarai', 'Kabupaten Manggarai Barat', 'Kabupaten Manggarai Timur', 'Kabupaten Nagekeo', 'Kabupaten Ngada', 'Kabupaten Rote Ndao', 'Kabupaten Sabu Raijua', 'Kabupaten Sikka', 'Kabupaten Sumba Barat', 'Kabupaten Sumba Barat Daya', 'Kabupaten Sumba Tengah', 'Kabupaten Sumba Timur', 'Kabupaten Timor Tengah Selatan', 'Kabupaten Timor Tengah Utara', 'Kota Kupang');
                $href_ntt_kab = array('kab_Alor', 'kab_Belu', 'kab_Ende', 'kab_Flores_Timur', 'kab_Kupang', 'kab_Lembata', 'kab_Malaka', 'kab_Manggarai', 'kab_Manggarai_Barat', 'kab_Manggarai_Timur', 'kab_Nagekeo', 'kab_Ngada', 'kab_Rote_Ndao', 'kab_Sabu_Raijua', 'kab_Sikka', 'kab_Sumba_Barat', 'kab_Sumba_Barat_Daya', 'kab_Sumba_Tengah', 'kab_Sumba_Timur', 'kab_Timor_Tengah', 'kab_Timor_Tengah_Utara', 'kot_Kupang');
                $color_ntt_kab = array('#658edb','#cfdb65', '#dbac65', '#a265db','#f5d5d5', '#f06587', '#f07065','#65f0f0', '#a1f7b5' , '#dbeb52','#658edb','#cfdb65', '#dbac65', '#a265db','#f5d5d5', '#f06587', '#f07065','#65f0f0', '#a1f7b5' , '#dbeb52', '#dbac65', '#a265db');


                $todayY = (int)date("Y");
                $rangeY = range($todayY - 4, $todayY);

                $jenis_penyakit = array('Rabies');
                ?>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="table-primary">
                            <th>No</th>
                            <th>Kabupaten/Kota</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i = 0; $i < 9 ; $i++)
                          <tr style="background-color: {{ $color_bali_kab[$i]}};">
                            <td>{{$i+1 }}</td>
                            <td><a id="<?php echo $href_bali_kab[$i] ?>" type="button">
                                <?php echo "$bali_kab[$i]"; ?>
                              </a>
                            </td>
                          </tr>
                          @endfor     
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    {{-- TABEL BADUNG --}}
                    <div class="table-responsive" id="TabelPengnyakitBadung" style="display: block; background-color: #658edb;">
                      <center><p style="font-weight: bold;">Kabupaten Badung</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Badung') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL BANGLI --}}
                    <div class="table-responsive" id="TabelPengnyakitBangli" style="display: none; background-color: #cfdb65;">
                      <center><p style="font-weight: bold;">Kabupaten Bangli</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Bangli') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL BULELENG --}}
                    <div class="table-responsive" id="TabelPengnyakitBuleleng" style="display: none; background-color: #dbac65;">
                      <center><p style="font-weight: bold;">Kabupaten Buleleng</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Buleleng') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL GIANYAR --}}
                    <div class="table-responsive" id="TabelPengnyakitGianyar" style="display: none; background-color: #a265db;">
                      <center><p style="font-weight: bold;">Kabupaten Gianyar</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Gianyar') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL JEMBRANA --}}
                    <div class="table-responsive" id="TabelPengnyakitJembrana" style="display: none; background-color: #f5d5d5;">
                      <center><p style="font-weight: bold;">Kabupaten Jembrana</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Jembrana') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL KARANGASEM --}}
                    <div class="table-responsive" id="TabelPengnyakitKarangasem" style="display: none; background-color: #f06587;">
                      <center><p style="font-weight: bold;">Kabupaten Karangasem</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Karangasem') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL KLUNGKUNG --}}
                    <div class="table-responsive" id="TabelPengnyakitKlungkung" style="display: none; background-color: #f07065;">
                      <center><p style="font-weight: bold;">Kabupaten Klungkung</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Klungkung') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL TABANAN --}}
                    <div class="table-responsive" id="TabelPengnyakitTabanan" style="display: none; background-color: #65f0f0;">
                      <center><p style="font-weight: bold;">Kabupaten Tabanan</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Tabanan') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL DENPASAR--}}
                    <div class="table-responsive" id="TabelPengnyakitDenpasar" style="display: none; background-color: #a1f7b5;">
                      <center><p style="font-weight: bold;">Kota Denpasar</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Denpasar') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-ntb" role="tabpanel" aria-labelledby="pills-ntb-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="table-primary">
                            <th>No</th>
                            <th>Kabupaten/Kota</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i = 0; $i < 10 ; $i++)
                          <tr style="background-color: {{ $color_ntb_kab[$i]}};">
                            <td>{{$i+1 }}</td>
                            <td><a id="<?php echo $href_ntb_kab[$i] ?>" type="button">
                                <?php echo "$ntb_kab[$i]"; ?>
                              </a>
                            </td>
                          </tr>
                          @endfor  
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    {{-- TABEL BIMA --}}
                    <div class="table-responsive" id="TabelPengnyakitBima" style="display: block; background-color: #658edb;">
                      <center><p style="font-weight: bold;">Kabupaten Bima</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Bima') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL DOMPU --}}
                    <div class="table-responsive" id="TabelPengnyakitDompu" style="display: none; background-color: #cfdb65;">
                      <center><p style="font-weight: bold;">Kabupaten Dompu</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Dompu') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Lombok Barat --}}
                    <div class="table-responsive" id="TabelPengnyakitLombokBarat" style="display: none; background-color: #dbac65;">
                      <center><p style="font-weight: bold;">Kabupaten Lombok Barat</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Lombok Barat') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Lombok Tengah --}}
                    <div class="table-responsive" id="TabelPengnyakitLombokTengah" style="display: none; background-color: #a265db;">
                      <center><p style="font-weight: bold;">Kabupaten Lombok Tengah</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Lombok Tengah') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Lombok Timur --}}
                    <div class="table-responsive" id="TabelPengnyakitLombokTimur" style="display: none;  background-color: #f5d5d5;">
                      <center><p style="font-weight: bold;">Kabupaten Lombok Timur</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Lombok Timur') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Lombok Utara --}}
                    <div class="table-responsive" id="TabelPengnyakitLombokUtara" style="display: none;  background-color: #f06587;">
                      <center><p style="font-weight: bold;">Kabupaten Lombok Utara</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Lombok Utara') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Sumbawa --}}
                    <div class="table-responsive" id="TabelPengnyakitSumbawa" style="display: none;  background-color: #f07065;">
                      <center><p style="font-weight: bold;">Kabupaten Sumbawa</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumbawa') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Sumbawa Barat --}}
                    <div class="table-responsive" id="TabelPengnyakitSumbawaBarat" style="display: none;  background-color: #65f0f0;">
                      <center><p style="font-weight: bold;">Kabupaten Sumbawa Barat</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumbawa Barat') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Kota Bima--}}
                    <div class="table-responsive" id="TabelPengnyakitKotaBima" style="display: none;  background-color: #a1f7b5;">
                      <center><p style="font-weight: bold;">Kabupaten Kota Bima</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Kota Bima') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Kota Mataram--}}
                    <div class="table-responsive" id="TabelPengnyakitKotaMataram" style="display: none;  background-color: #dbeb52;">
                      <center><p style="font-weight: bold;">Kabupaten Kota Mataram</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Kota Mataram') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-ntt" role="tabpanel" aria-labelledby="pills-ntt-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="table-primary">
                            <th>No</th>
                            <th>Kabupaten/Kota</th>
                          </tr>
                        </thead>
                        <tbody>
                          @for ($i = 0; $i < 22 ; $i++)
                          <tr style="background-color: {{ $color_ntt_kab[$i]}};">
                            <td>{{$i+1 }}</td>
                            <td><a id="<?php echo $href_ntt_kab[$i] ?>" type="button">
                                <?php echo "$ntt_kab[$i]"; ?>
                              </a>
                            </td>
                          </tr>
                          @endfor  
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    {{-- TABEL ALOR--}}
                    <div class="table-responsive" id="TabelPengnyakitAlor" style="display: block;  background-color: #658edb;">
                      <center><p style="font-weight: bold;">Kabupaten Alor</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Alor') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL BELU--}}
                    <div class="table-responsive" id="TabelPengnyakitBelu" style="display: none;  background-color: #cfdb65;">
                      <center><p style="font-weight: bold;">Kabupaten Belu</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Belu') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL ENDE--}}
                    <div class="table-responsive" id="TabelPengnyakitEnde" style="display: none;  background-color: #dbac65;">
                      <center><p style="font-weight: bold;">Kabupaten Ende</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Ende') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Flores Timur--}}
                    <div class="table-responsive" id="TabelPengnyakitFloresTimur" style="display: none;  background-color: #a265db;">
                      <center><p style="font-weight: bold;">Kabupaten Flores Timur</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Flores Timur') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Kupang--}}
                    <div class="table-responsive" id="TabelPengnyakitKupang" style="display: none;  background-color: #f5d5d5;">
                      <center><p style="font-weight: bold;">Kabupaten Kupang</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Kupang') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Lembata--}}
                    <div class="table-responsive" id="TabelPengnyakitLembata" style="display: none;  background-color: #f06587;">
                      <center><p style="font-weight: bold;">Kabupaten Lembata</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Lembata') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Malaka--}}
                    <div class="table-responsive" id="TabelPengnyakitMalaka" style="display: none;  background-color: #f07065;">
                      <center><p style="font-weight: bold;">Kabupaten Malaka</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Malaka') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Manggarai--}}
                    <div class="table-responsive" id="TabelPengnyakitManggarai" style="display: none;  background-color: #65f0f0;">
                      <center><p style="font-weight: bold;">Kabupaten Manggarai</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Manggarai') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Manggarai Barat--}}
                    <div class="table-responsive" id="TabelPengnyakitManggaraiBarat" style="display: none;  background-color: #a1f7b5;">
                      <center><p style="font-weight: bold;">Kabupaten Manggarai Barat</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Manggarai Barat') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Manggarai Timur--}}
                    <div class="table-responsive" id="TabelPengnyakitManggaraiTimur" style="display: none;  background-color: #dbeb52;">
                      <center><p style="font-weight: bold;">Kabupaten Manggarai Timur</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Manggarai Timur') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Nagekeo--}}
                    <div class="table-responsive" id="TabelPengnyakitNagekeo" style="display: none;  background-color: #658edb;">
                      <center><p style="font-weight: bold;">Kabupaten Nagekeo</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Nagekeo') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Ngada--}}
                    <div class="table-responsive" id="TabelPengnyakitNgada" style="display: none;  background-color: #cfdb65;">
                      <center><p style="font-weight: bold;">Kabupaten Ngada</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Ngada') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Rote Ndao--}}
                    <div class="table-responsive" id="TabelPengnyakitRoteNdao" style="display: none;  background-color: #dbac65;">
                      <center><p style="font-weight: bold;">Kabupaten Rote Ndao</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Rote Ndao') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sabu Raijua--}}
                    <div class="table-responsive" id="TabelPengnyakitSabuRaijua" style="display: none;  background-color: #a265db;">
                      <center><p style="font-weight: bold;">Kabupaten Sabu Raijua</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sabu Raijua') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sikka--}}
                    <div class="table-responsive" id="TabelPengnyakitSikka" style="display: none;  background-color: #f5d5d5;">
                      <center><p style="font-weight: bold;">Kabupaten Sikka</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sikka') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sumba Barat--}}
                    <div class="table-responsive" id="TabelPengnyakitSumbaBarat" style="display: none;  background-color: #f06587;">
                      <center><p style="font-weight: bold;">Kabupaten Sumba Barat</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumba Barat') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sumba Barat Daya--}}
                    <div class="table-responsive" id="TabelPengnyakitSumbaBaratDaya" style="display: none;  background-color: #f07065;">
                      <center><p style="font-weight: bold;">Kabupaten Sumba Barat Daya</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumba Barat Daya') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sumba Tengah--}}
                    <div class="table-responsive" id="TabelPengnyakitSumbaTengah" style="display: none;  background-color: #65f0f0;">
                      <center><p style="font-weight: bold;">Kabupaten Sumba Tengah</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumba Tengah') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    {{-- TABEL Sumba Timur--}}
                    <div class="table-responsive" id="TabelPengnyakitSumbaTimur" style="display: none;  background-color: #a1f7b5;">
                      <center><p style="font-weight: bold;">Kabupaten Sumba Timur</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Sumba Timurr') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Timor Tengah--}}
                    <div class="table-responsive" id="TabelPengnyakitTimorTengah" style="display: none;  background-color: #dbeb52;">
                      <center><p style="font-weight: bold;">Kabupaten Timor Tengah Selatan</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Timor Tengah') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Timor Tengah Utara--}}
                    <div class="table-responsive" id="TabelPengnyakitTimorTengahUtara" style="display: none;  background-color: #dbac65;">
                      <center><p style="font-weight: bold;">Kabupaten Timor Tengah Utara</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Timor Tengah Utara') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    {{-- TABEL Kota Kupang--}}
                    <div class="table-responsive" id="TabelPengnyakitKotaKupang" style="display: none;  background-color: #a265db;">
                      <center><p style="font-weight: bold;">Kota Kupang</p></center>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Jenis Penyakit</th>
                            <th>2019</th>
                            <th>2020</th>
                            <th>2021</th>
                            <th>2022</th>
                            <th>2024</th>
                          </tr>
                        </thead>
                        <tbody>
                          <p hidden> {{ $i = 1 }}</p>
                          @foreach ($data_penyakit5year->where('Kabupaten','Kota Kupang') as $key=>$value)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td hidden>{{ $value-> Kabupaten}}</td>
                            <td>{{ $value-> Penyakit}}</td>
                            <td>{{ $value-> Th2019}}</td>
                            <td>{{ $value-> Th2020}}</td>
                            <td>{{ $value-> Th2021}}</td>
                            <td>{{ $value-> Th2022}}</td>
                            <td>{{ $value-> Th2024}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <h5>Perjanjian Kinerja Tahun 2024 <span id="yKinerja"></span> </h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>No</th>
                    <th width="20%">Sasaran Kegiatan</th>
                    <th width="38%">Indikator</th>
                    <th>Target</th>
                    <th>Realisasi</th>
                    <th>Persentase</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-warning">A</td>
                    <td class="table-success">Terwujudnya Birokrasi Ditjen Peternakan dan Kesehatan Hewan yang Efektif,
                      Efisien, dan
                      Berorientasi pada Layanan Prima</td>
                    <td>
                      <table>
                        <tr>
                          <td><a href="IndeksKepuasanMasyarakat">1. Indeks Kepuasan Masyarakat atas Layanan Balai Besar
                              Veteriner Denpasar yang diberikan</a></td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-info">
                      <?php echo "<script>document.writeln(tampil_totalTarget_Ikm);</script>"; ?>Likert
                    </td>
                    <td class="table-danger">
                      <?php echo "<script>document.writeln(tampil_totalRealisasi_Ikm);</script>"; ?> Likert
                    </td>
                    <td class="table-secondary">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_Ikm);</script>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">B</td>
                    <td class="table-success">Peningkatan Layanan Pengendalian dan Penanggulangan Penyakit Hewan</td>
                    <td>
                      <table>
                        <tr>
                          <td><a href="PelayananKesehatanHewan">2. Pelayanan Kesehatan Hewan</a></td>
                        </tr>
                        <tr>
                          <td><a href="PengamatanPenyakitHewan">3. Sampel Penyakit Hewan Yang Teramati dan Teridentifikasi</a></td>
                        </tr>
                        <tr>
                          <td><a href="SaranaBidang">4. Sarana Bidang Kesehatan Hewan</a></td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-info">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Pkhewan);</script>"; ?> Layanan
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(totalTarget_tampil_piphewan);</script>"; ?> Sampel
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Sbkhewan);</script>"; ?> Unit
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-danger">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Pkhewan);</script>"; ?> Layanan
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(totalRealisasi_tampil_piphewan);</script>"; ?> Sampel
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Sbkhewan);</script>"; ?> Unit
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-secondary">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Pkhewan);</script>"; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(persentase_tampil_piphewan);</script>"; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Sbkhewan);</script>"; ?>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">C</td>
                    <td class="table-success">Peningkatan Layanan Penyediaan Benih dan Bibit serta Peningkatan Produksi
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td><a href="TernakRuminansia">5. Ternak Ruminansia Potong</a></td>
                        </tr>
                        <tr>
                          <td><a href="TernakUnggas">6. Ternak Unggas dan Aneka Ternak</a></td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-info">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Ternakpotong );</script>"; ?> Ekor
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Ternakunggas );</script>"; ?> Ekor
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-danger">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Ternakpotong);</script>"; ?> Ekor
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Ternakunggas);</script>"; ?> Ekor
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-secondary">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Ternakpotong);</script>"; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Ternakunggas);</script>"; ?>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">D</td>
                    <td class="table-success">Peningkatan Layanan Kesehatan Masyarakat Veteriner</td>
                    <td>
                      <table>
                        <tr>
                          <td><a href="KeamananProduk">7. Keamanan dan Mutu Produk Hewan</a></td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-info">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(totalTarget_tampil_keamananprodukFix);</script>"; ?>
                            Produk
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-danger">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(totalRealisasi_tampil_kemananproduk);</script>"; ?>
                            Produk
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-secondary">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(persentase_tampil_kemananproduk);</script>"; ?>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">E</td>
                    <td class="table-success">Peningkatan Layanan Dukungan Manajemen dan Dukungan Teknis Lainnya Ditjen Peternakan dan Kesehatan Hewan</td>
                    <td>
                      <table>
                        <tr>
                          <td><a href="LayananDukungan">8. Layanan BMN</a></td>
                        </tr>
                        <tr>
                          <td><a href="LayananManajemenKinerja">9. Layanan Organisasi dan Tata Kelola Internal</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">10. Layanan Perkantoran</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">11. Layanan Perencanaan dan Penganggaran</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">12. Layanan Pemantauan dan Evaluasi</a></td>
                        </tr>
                        <tr>
                          <td><a href="#">13. Layanan Manajemen Keuangan</a></td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-info">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Layanan );</script>"; ?> Layanan
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalTarget_Layanankinerja );</script>"; ?> Dokumen
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-danger">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Layanan );</script>"; ?> Layanan
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_totalRealisasi_Layanankinerja );</script>"; ?> Dokumen
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td class="table-secondary">
                      <table>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Layanan);</script>"; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <?php echo "<script>document.writeln(tampil_PersentaseFix_Layanankinerja);</script>"; ?>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <h5>Realisasi Serapan Angaran Tahun 2024<span id="yAnggaran"></span> </h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>No</th>
                    <th width="35%">Jenis Anggaran</th>
                    <th>Pagu</th>
                    <th>Akrual</th>
                    <th>Persentase</th>
                    <th>SP2D</th>
                    <th>Persentase</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="table-warning">1</td>
                    <td class="table-light"><a href="anggaran_PengendalianPenyakit">Pengendalian dan Penanggulangan
                        Penyakit Hewan</a></td>
                    <td class="table-info">Rp.
                      <?php echo "<script>document.writeln(tampil_totalTarget_Pengendalianpenyakit);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalAkrual_Pengendalianpenyakit);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_AkrualPengendalianpenyakit);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalSp2d_Pengendalianpenyakit);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_Sp2dPengendalianpenyakit);</script>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">2</td>
                    <td class="table-light"><a href="anggaran_PenyedianBenih">Penyediaan Benih dan Bibit Serta
                        Peningkatan Produksi
                        Ternak</a></td>
                    <td class="table-info">Rp.
                      <?php echo "<script>document.writeln(tampil_totalTarget_Penyediaanbenih);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalAkrual_Penyediaanbenih);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_AkrualPenyediaanbenih);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalSp2d_Penyediaanbenih);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_Sp2dPenyediaanbenih);</script>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">3</td>
                    <td class="table-light"><a href="anggaran_KesehatanVeteriner">Peningkatan Kesehatan Masyarakat
                        Veteriner</a></td>
                    <td class="table-info">Rp.
                      <?php echo "<script>document.writeln(tampil_totalTarget_Kesehatanventeriner);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalAkrual_Kesehatanventeriner);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_AkrualKesehatanventeriner);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalSp2d_Kesehatanventeriner);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_Sp2dKesehatanventeriner);</script>"; ?>
                    </td>
                  </tr>
                  <tr>
                    <td class="table-warning">4</td>
                    <td class="table-light"><a href="anggaran_DukunganManajemen">Dukungan Manajemen dan Dukungan Teknis
                        Lainnya Ditjen
                        Peternakan dan Kesehatan
                        Hewan</a></td>
                    <td class="table-info">Rp.
                      <?php echo "<script>document.writeln(tampil_totalTarget_Dukunganmanajemen);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalAkrual_Dukunganmanajemen);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_AkrualDukunganmanajemen);</script>"; ?>
                    </td>
                    <td class="table-danger">Rp.
                      <?php echo "<script>document.writeln(tampil_totalSp2d_Dukunganmanajemen);</script>"; ?>
                    </td>
                    <td class="table-active">
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_Sp2dDukunganmanajemen);</script>"; ?>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr class="table-success">
                    <td></td>
                    <td>Jumlah</td>
                    <td>Rp.
                      <?php echo "<script>document.writeln(tampil_JumlahTarget_Total);</script>"; ?>
                    </td>
                    <td>Rp.
                      <?php echo "<script>document.writeln(tampil_JumlahAkrual_Total);</script>"; ?>
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_TotalAkrual);</script>"; ?>
                    </td>
                    <td>Rp.
                      <?php echo "<script>document.writeln(tampil_JumlahSp2d_Total);</script>"; ?>
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(tampil_PersentaseFix_TotalSp2d);</script>"; ?>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>


          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <h5>Indeks Kepuasan Layanan Internal</h5>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr class="table-primary">
                  <th>No</th>
                  <th>Kegiatan</th>
                  <th>Target</th>
                  <th>Capaian</th>
                  <th>Persentase Capaian</th>
                </tr>
              </thead>
              <tbody>
                <td class="table-warning">1</td>
                <td class="table-light"><a href="KepuasanLayananInternal">Nilai Indeks Kepuasan Layanan Internal Pegawai</a></td>
                <td>
                  <?php echo "<script>document.writeln(tampil_totalTarget_Internal);</script>"; ?>Likert
                </td>
                <td>
                  <?php echo "<script>document.writeln(tampil_totalRealisasi_Internal);</script>"; ?>Likert
                </td>
                <td>
                  <?php echo "<script>document.writeln(tampil_PersentaseFix_Internal);</script>"; ?>
                </td>
              </tbody>
            </table>
          </div>




          <div class="card-header">
            <div class="row">
              <div class="col-sm-6">
                <h5>SDM Tahun 2024<span id="ySDM"></span></h5>
              </div>
            </div>
          </div>
          <div class="card-body">
            <a href="sdm_sdm">
              <h5 style="font-weight: bold;">1. Jumlah Pegawai</h5>
            </a>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>PNS</th>
                    <th>PPPK</th>
                    <th>THL</th>
                    <th>OUTSOURCING</th>
                    <th>TOTAL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td>
                      <?php echo "<script>document.writeln(total_Jenis_PNS);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Jenis_PPPK);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Jenis_THL);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Jenis_OUTSOURCING);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pegawai);</script>"; ?> Orang
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 style="font-weight: bold;">2. Sebaran Pegawai</h5>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>Bagian Umum</th>
                    <th>Kelompok Substansi</th>
                    <th>Kelompok JAFUNG MEDIK PARAMEDIK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td>
                      <?php echo "<script>document.writeln(total_Sebaran_BagianUmum);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Sebaran_KelompokSubstansi);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Sebaran_KelompokJafung);</script>"; ?> Orang
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 style="font-weight: bold;">3. Tingkat Pendidikan</h5>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="table-primary">
                    <th>S3</th>
                    <th>S2</th>
                    <th>S1</th>
                    <th>D4</th>
                    <th>D3</th>
                    <th>SLTA/SMK</th>
                    <th>SLTP</th>
                    <th>SD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_S3);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_S2);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_S1);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_D4);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_D3);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_SMA);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_SMP);</script>"; ?> Orang
                    </td>
                    <td>
                      <?php echo "<script>document.writeln(total_Pendidikan_SD);</script>"; ?> Orang
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="sdm_dinasluar">
              <h5 style="font-weight: bold;">4. Dinas Luar</h5>
            </a>

            <a href="masukanBalai">
              <h5 style="font-weight: bold;">5. Koreksi Kepala Balai</h5>
            </a>

          </div>
        </div>
      </div>

    </div>
    <!-- /.col -->



  </section>
</div>
@endsection

<!--  -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  
  $(document).ready(function() {
    $("#yKinerja").html($("#select_yKinerja").val())
    $("#yAnggaran").html($("#select_yAnggaran").val())
    $("#ySDM").html($("#select_ySDM").val())
    $("#select_yKinerja").change(function() {
      $("#yKinerja").html($(this).val());
    })
    $("#select_yAnggaran").change(function() {
      $("#yAnggaran").html($(this).val());
    })
    $("#select_ySDM").change(function() {
      $("#ySDM").html($(this).val());
    })

  });

</script>
{{-- SCRIPT BAGIAN ATAS --}}

<script>
  // INTERNAL
  var data_internal = {!!json_encode($data_internal -> toArray()) !!};
  var total_Target_Internal = 0;
  var total_realisasi_internal = 0;
  var jumlah_realisasi_int = 0;

  for (let index = 0; index < data_internal.length; index++){
    var Target_internal = parseFloat(data_internal[index].Target);
    var Realisasi_Internal = parseFloat(data_internal[index].Realisasi);

    console.log(Realisasi_Internal);
    total_Target_Internal += Target_internal;
    total_realisasi_internal += Realisasi_Internal;
    if (Realisasi_Internal != 0){
      jumlah_realisasi_int +=1;
    }
  }
  console.log('TES: ' + total_realisasi_internal );
  var rata_totalRealisasi_internal = parseFloat(total_realisasi_internal / jumlah_realisasi_int);
  var rata_totalTarget_Internal = parseFloat(total_Target_Internal / 12);
  // console.log('TES: ' + rata_totalRealisasi_internal);

  var tampil_totalTarget_Internal = String(rata_totalTarget_Internal.toFixed(2));
  var tampil_totalRealisasi_Internal = String(rata_totalRealisasi_internal.toFixed(2));

  var tampil_Persentase_int = (parseFloat(rata_totalRealisasi_internal) / parseFloat(rata_totalTarget_Internal)) * 100;
  var tampil_PersentaseFix_Internal = tampil_Persentase_int.toFixed(2) + ' %';



  // IKM
  var data_ikm = {!!json_encode($data_ikm -> toArray()) !!};
  var total_Target_Ikm = 0;
  var total_Realisasi_Ikm = 0;
  var jumlahRealisasinow_Ikm = 0;
  for (let index = 0; index < data_ikm.length; index++) {
    var Target_Ikm = parseFloat(data_ikm[index].Target);
    var Realisasi_Ikm = parseFloat(data_ikm[index].Realisasi);
    total_Target_Ikm += Target_Ikm;
    total_Realisasi_Ikm += Realisasi_Ikm;
    if (Realisasi_Ikm != 0) {
      jumlahRealisasinow_Ikm += 1;
    }
  }
  var rata_totalRealisasi_Ikm = parseFloat(total_Realisasi_Ikm / jumlahRealisasinow_Ikm);
  var rata_totalTarget_Ikm = parseFloat(total_Target_Ikm / 12);
  console.log('TES');

  var tampil_totalTarget_Ikm = String(rata_totalTarget_Ikm.toFixed(2));
  var tampil_totalRealisasi_Ikm = String(rata_totalRealisasi_Ikm.toFixed(2));

  var tampil_Persentase = (parseFloat(rata_totalRealisasi_Ikm) / parseFloat(rata_totalTarget_Ikm)) * 100;
  var tampil_PersentaseFix_Ikm = tampil_Persentase.toFixed(2) + ' %'

  // PELAYANAN KESEHATAN HEWAN
  var data_pkhewan = {!!json_encode($data_pkhewan -> toArray()) !!};
  var total_Target_Pkhewan = 0;
  var total_Realisasi_Pkhewan = 0;
  for (let index = 0; index < data_pkhewan.length; index++) {
    var Target_Pkhewan = parseInt(data_pkhewan[index].Target);
    var Realisasi_Pkhewan = parseInt(data_pkhewan[index].Realisasi);
    total_Target_Pkhewan += Target_Pkhewan;
    total_Realisasi_Pkhewan += Realisasi_Pkhewan;
  }

  var rata_totalTarget_Pkhewan = total_Target_Pkhewan / 12;
  var tampil_totalTarget_Pkhewan = String(rata_totalTarget_Pkhewan);
  var tampil_totalRealisasi_Pkhewan = String(total_Realisasi_Pkhewan);
  // console.log(tampil_totalTarget_Pkhewan, tampil_totalRealisasi_Pkhewan)
  var tampil_Persentase = (parseInt(total_Realisasi_Pkhewan) / parseInt(rata_totalTarget_Pkhewan)) * 100;
  var tampil_PersentaseFix_Pkhewan = tampil_Persentase.toFixed(2) + ' %'

  //   PENGAMATAN DAN IDENTIFIKASI PENYAKIT HEWAN
  var data_piphewan = {!! json_encode($data_piphewan -> toArray())!!};
  //  console.log('TES', data_piphewan);
  var total_Target = 0;
  var total_Realisasi = 0;
  for (let index = 0; index < data_piphewan.length; index++) {
    var Target = parseInt(data_piphewan[index].Target);
    var Realisasi = parseInt(data_piphewan[index].Realisasi);
    // console.log(Realisasi);
    total_Target += Target;
    total_Realisasi += Realisasi;
  }
  var tampil_totalTarget = String(total_Target);
  var tampil_totalRealisasi = String(total_Realisasi);
  console.log(tampil_totalTarget, tampil_totalRealisasi)
  var tampil_Persentase = (parseInt(total_Realisasi) / parseInt(total_Target)) * 100;
  var tampil_PersentaseFix = tampil_Persentase.toFixed(2) + ' %'
  //  console.log(tampil_Persentase.toFixed(2)+' %')

//  PENYAKIT PMK
  var data_pmk = {!! json_encode($data_pmk -> toArray())!!};
  var total_Target_Pmk = 0;
  var total_Realisasi_Pmk = 0;
  for (let index = 0; index < data_pmk.length; index++) {
    var Target_Pmk = parseInt(data_pmk[index].Target);
    var Realisasi_Pmk = parseInt(data_pmk[index].Realisasi);
    total_Target_Pmk += Target_Pmk;
    total_Realisasi_Pmk += Realisasi_Pmk;
  }

  var rata_totalTarget_Pmk  = total_Target_Pmk /12;
  var tampil_totalTarget_Pmk = String(rata_totalTarget_Pmk);
  var tampil_totalRealisasi_Pmk = String(total_Realisasi_Pmk);
  // console.log(tampil_totalTarget_Pmk, tampil_totalRealisasi_Pmk)
  var tampil_Persentase = (parseInt(total_Realisasi_Pmk) / parseInt(rata_totalTarget_Pmk)) * 100;
  var tampil_PersentaseFix_Pmk = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT PMK PER BULAN 
  var targetbulan1_pmk = parseInt(data_pmk[0].Target);
  var realisasibulan1_pmk = parseInt(data_pmk[0].Realisasi);
  var targetbulan2_pmk = parseInt(data_pmk[1].Target);
  var realisasibulan2_pmk = parseInt(data_pmk[1].Realisasi);
  var targetbulan3_pmk = parseInt(data_pmk[2].Target);
  var realisasibulan3_pmk = parseInt(data_pmk[2].Realisasi);
  var targetbulan4_pmk = parseInt(data_pmk[3].Target);
  var realisasibulan4_pmk = parseInt(data_pmk[3].Realisasi);
  var targetbulan5_pmk = parseInt(data_pmk[4].Target);
  var realisasibulan5_pmk = parseInt(data_pmk[4].Realisasi);
  var targetbulan6_pmk = parseInt(data_pmk[5].Target);
  var realisasibulan6_pmk = parseInt(data_pmk[5].Realisasi);
  var targetbulan7_pmk = parseInt(data_pmk[6].Target);
  var realisasibulan7_pmk = parseInt(data_pmk[6].Realisasi);
  var targetbulan8_pmk = parseInt(data_pmk[7].Target);
  var realisasibulan8_pmk = parseInt(data_pmk[7].Realisasi);
  var targetbulan9_pmk = parseInt(data_pmk[8].Target);
  var realisasibulan9_pmk = parseInt(data_pmk[8].Realisasi);
  var targetbulan10_pmk = parseInt(data_pmk[9].Target);
  var realisasibulan10_pmk = parseInt(data_pmk[9].Realisasi);
  var targetbulan11_pmk = parseInt(data_pmk[10].Target);
  var realisasibulan11_pmk = parseInt(data_pmk[10].Realisasi);
  var targetbulan12_pmk = parseInt(data_pmk[11].Target);
  var realisasibulan12_pmk = parseInt(data_pmk[11].Realisasi);

  //  PENYAKIT RABIES
  var data_rabies = {!! json_encode($data_rabies -> toArray())!!};
  var total_Target_Rabies = 0;
  var total_Realisasi_Rabies = 0;
  for (let index = 0; index < data_rabies.length; index++) {
    var Target_Rabies = parseInt(data_rabies[index].Target);
    var Realisasi_Rabies = parseInt(data_rabies[index].Realisasi);
    total_Target_Rabies += Target_Rabies;
    total_Realisasi_Rabies += Realisasi_Rabies;
  }

  var rata_totalTarget_Rabies  = total_Target_Rabies /12;
  var tampil_totalTarget_Rabies = String(rata_totalTarget_Rabies);
  var tampil_totalRealisasi_Rabies = String(total_Realisasi_Rabies);
  // console.log(tampil_totalTarget_Rabies, tampil_totalRealisasi_Rabies)
  var tampil_Persentase = (parseInt(total_Realisasi_Rabies) / parseInt(rata_totalTarget_Rabies)) * 100;
  var tampil_PersentaseFix_Rabies = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT RABIES PER BULAN 
  var targetbulan1_rabies = parseInt(data_rabies[0].Target);
  var realisasibulan1_rabies = parseInt(data_rabies[0].Realisasi);
  var targetbulan2_rabies = parseInt(data_rabies[1].Target);
  var realisasibulan2_rabies = parseInt(data_rabies[1].Realisasi);
  var targetbulan3_rabies = parseInt(data_rabies[2].Target);
  var realisasibulan3_rabies = parseInt(data_rabies[2].Realisasi);
  var targetbulan4_rabies = parseInt(data_rabies[3].Target);
  var realisasibulan4_rabies = parseInt(data_rabies[3].Realisasi);
  var targetbulan5_rabies = parseInt(data_rabies[4].Target);
  var realisasibulan5_rabies = parseInt(data_rabies[4].Realisasi);
  var targetbulan6_rabies = parseInt(data_rabies[5].Target);
  var realisasibulan6_rabies = parseInt(data_rabies[5].Realisasi);
  var targetbulan7_rabies = parseInt(data_rabies[6].Target);
  var realisasibulan7_rabies = parseInt(data_rabies[6].Realisasi);
  var targetbulan8_rabies = parseInt(data_rabies[7].Target);
  var realisasibulan8_rabies = parseInt(data_rabies[7].Realisasi);
  var targetbulan9_rabies = parseInt(data_rabies[8].Target);
  var realisasibulan9_rabies = parseInt(data_rabies[8].Realisasi);
  var targetbulan10_rabies = parseInt(data_rabies[9].Target);
  var realisasibulan10_rabies = parseInt(data_rabies[9].Realisasi);
  var targetbulan11_rabies = parseInt(data_rabies[10].Target);
  var realisasibulan11_rabies = parseInt(data_rabies[10].Realisasi);
  var targetbulan12_rabies = parseInt(data_rabies[11].Target);
  var realisasibulan12_rabies = parseInt(data_rabies[11].Realisasi);


//  PENYAKIT AVIAN
var data_avian = {!! json_encode($data_avian -> toArray())!!};
var total_Target_Avian = 0;
var total_Realisasi_Avian = 0;
for (let index = 0; index < data_avian.length; index++) {
  var Target_Avian = parseInt(data_avian[index].Target);
  var Realisasi_Avian = parseInt(data_avian[index].Realisasi);
  total_Target_Avian += Target_Avian;
  total_Realisasi_Avian += Realisasi_Avian;
}

var rata_totalTarget_Avian  = total_Target_Avian /12;
var tampil_totalTarget_Avian = String(rata_totalTarget_Avian);
var tampil_totalRealisasi_Avian = String(total_Realisasi_Avian);
// console.log(tampil_totalTarget_Avian, tampil_totalRealisasi_Avian)
var tampil_Persentase = (parseInt(total_Realisasi_Avian) / parseInt(rata_totalTarget_Avian)) * 100;
var tampil_PersentaseFix_Avian = tampil_Persentase.toFixed(2) + ' %'

// PENYAKIT AVIAN PER BULAN 
var targetbulan1_avian = parseInt(data_avian[0].Target);
var realisasibulan1_avian = parseInt(data_avian[0].Realisasi);
var targetbulan2_avian = parseInt(data_avian[1].Target);
var realisasibulan2_avian = parseInt(data_avian[1].Realisasi);
var targetbulan3_avian = parseInt(data_avian[2].Target);
var realisasibulan3_avian = parseInt(data_avian[2].Realisasi);
var targetbulan4_avian = parseInt(data_avian[3].Target);
var realisasibulan4_avian = parseInt(data_avian[3].Realisasi);
var targetbulan5_avian = parseInt(data_avian[4].Target);
var realisasibulan5_avian = parseInt(data_avian[4].Realisasi);
var targetbulan6_avian = parseInt(data_avian[5].Target);
var realisasibulan6_avian = parseInt(data_avian[5].Realisasi);
var targetbulan7_avian = parseInt(data_avian[6].Target);
var realisasibulan7_avian = parseInt(data_avian[6].Realisasi);
var targetbulan8_avian = parseInt(data_avian[7].Target);
var realisasibulan8_avian = parseInt(data_avian[7].Realisasi);
var targetbulan9_avian = parseInt(data_avian[8].Target);
var realisasibulan9_avian = parseInt(data_avian[8].Realisasi);
var targetbulan10_avian = parseInt(data_avian[9].Target);
var realisasibulan10_avian = parseInt(data_avian[9].Realisasi);
var targetbulan11_avian = parseInt(data_avian[10].Target);
var realisasibulan11_avian = parseInt(data_avian[10].Realisasi);
var targetbulan12_avian = parseInt(data_avian[11].Target);
var realisasibulan12_avian = parseInt(data_avian[11].Realisasi);

  //  PENYAKIT BRUCELLOSIS
  var data_brucellosis = {!! json_encode($data_brucellosis -> toArray())!!};
  var total_Target_Brucellosis = 0;
  var total_Realisasi_Brucellosis = 0;
  for (let index = 0; index < data_brucellosis.length; index++) {
    var Target_Brucellosis = parseInt(data_brucellosis[index].Target);
    var Realisasi_Brucellosis = parseInt(data_brucellosis[index].Realisasi);
    total_Target_Brucellosis += Target_Brucellosis;
    total_Realisasi_Brucellosis += Realisasi_Brucellosis;
  }

  var rata_totalTarget_Brucellosis  = total_Target_Brucellosis /12;
  var tampil_totalTarget_Brucellosis = String(rata_totalTarget_Brucellosis);
  var tampil_totalRealisasi_Brucellosis = String(total_Realisasi_Brucellosis);
  // console.log(tampil_totalTarget_Brucellosis, tampil_totalRealisasi_Brucellosis)
  var tampil_Persentase = (parseInt(total_Realisasi_Brucellosis) / parseInt(rata_totalTarget_Brucellosis)) * 100;
  var tampil_PersentaseFix_Brucellosis = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT BRUCELLOSIS PER BULAN 
  var targetbulan1_brucellosis = parseInt(data_brucellosis[0].Target);
  var realisasibulan1_brucellosis = parseInt(data_brucellosis[0].Realisasi);
  var targetbulan2_brucellosis = parseInt(data_brucellosis[1].Target);
  var realisasibulan2_brucellosis = parseInt(data_brucellosis[1].Realisasi);
  var targetbulan3_brucellosis = parseInt(data_brucellosis[2].Target);
  var realisasibulan3_brucellosis = parseInt(data_brucellosis[2].Realisasi);
  var targetbulan4_brucellosis = parseInt(data_brucellosis[3].Target);
  var realisasibulan4_brucellosis = parseInt(data_brucellosis[3].Realisasi);
  var targetbulan5_brucellosis = parseInt(data_brucellosis[4].Target);
  var realisasibulan5_brucellosis = parseInt(data_brucellosis[4].Realisasi);
  var targetbulan6_brucellosis = parseInt(data_brucellosis[5].Target);
  var realisasibulan6_brucellosis = parseInt(data_brucellosis[5].Realisasi);
  var targetbulan7_brucellosis = parseInt(data_brucellosis[6].Target);
  var realisasibulan7_brucellosis = parseInt(data_brucellosis[6].Realisasi);
  var targetbulan8_brucellosis = parseInt(data_brucellosis[7].Target);
  var realisasibulan8_brucellosis = parseInt(data_brucellosis[7].Realisasi);
  var targetbulan9_brucellosis = parseInt(data_brucellosis[8].Target);
  var realisasibulan9_brucellosis = parseInt(data_brucellosis[8].Realisasi);
  var targetbulan10_brucellosis = parseInt(data_brucellosis[9].Target);
  var realisasibulan10_brucellosis = parseInt(data_brucellosis[9].Realisasi);
  var targetbulan11_brucellosis = parseInt(data_brucellosis[10].Target);
  var realisasibulan11_brucellosis = parseInt(data_brucellosis[10].Realisasi);
  var targetbulan12_brucellosis = parseInt(data_brucellosis[11].Target);
  var realisasibulan12_brucellosis = parseInt(data_brucellosis[11].Realisasi);


    //  PENYAKIT ANTRAKS
    var data_anthrax = {!! json_encode($data_anthraxs -> toArray())!!};
  var total_Target_Anthrax = 0;
  var total_Realisasi_Anthrax = 0;
  for (let index = 0; index < data_anthrax.length; index++) {
    var Target_Anthrax = parseInt(data_anthrax[index].Target);
    var Realisasi_Anthrax = parseInt(data_anthrax[index].Realisasi);
    total_Target_Anthrax += Target_Anthrax;
    total_Realisasi_Anthrax += Realisasi_Anthrax;
  }

  var rata_totalTarget_Anthrax  = total_Target_Anthrax /12;
  var tampil_totalTarget_Anthrax = String(rata_totalTarget_Anthrax);
  var tampil_totalRealisasi_Anthrax = String(total_Realisasi_Anthrax);
  // console.log(tampil_totalTarget_Anthrax, tampil_totalRealisasi_Anthrax)
  var tampil_Persentase = (parseInt(total_Realisasi_Anthrax) / parseInt(rata_totalTarget_Anthrax)) * 100;
  var tampil_PersentaseFix_Anthrax = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT ANTRAKS PER BULAN 
  var targetbulan1_anthrax = parseInt(data_anthrax[0].Target);
  var realisasibulan1_anthrax = parseInt(data_anthrax[0].Realisasi);
  var targetbulan2_anthrax = parseInt(data_anthrax[1].Target);
  var realisasibulan2_anthrax = parseInt(data_anthrax[1].Realisasi);
  var targetbulan3_anthrax = parseInt(data_anthrax[2].Target);
  var realisasibulan3_anthrax = parseInt(data_anthrax[2].Realisasi);
  var targetbulan4_anthrax = parseInt(data_anthrax[3].Target);
  var realisasibulan4_anthrax = parseInt(data_anthrax[3].Realisasi);
  var targetbulan5_anthrax = parseInt(data_anthrax[4].Target);
  var realisasibulan5_anthrax = parseInt(data_anthrax[4].Realisasi);
  var targetbulan6_anthrax = parseInt(data_anthrax[5].Target);
  var realisasibulan6_anthrax = parseInt(data_anthrax[5].Realisasi);
  var targetbulan7_anthrax = parseInt(data_anthrax[6].Target);
  var realisasibulan7_anthrax = parseInt(data_anthrax[6].Realisasi);
  var targetbulan8_anthrax = parseInt(data_anthrax[7].Target);
  var realisasibulan8_anthrax = parseInt(data_anthrax[7].Realisasi);
  var targetbulan9_anthrax = parseInt(data_anthrax[8].Target);
  var realisasibulan9_anthrax = parseInt(data_anthrax[8].Realisasi);
  var targetbulan10_anthrax = parseInt(data_anthrax[9].Target);
  var realisasibulan10_anthrax = parseInt(data_anthrax[9].Realisasi);
  var targetbulan11_anthrax = parseInt(data_anthrax[10].Target);
  var realisasibulan11_anthrax = parseInt(data_anthrax[10].Realisasi);
  var targetbulan12_anthrax = parseInt(data_anthrax[11].Target);
  var realisasibulan12_anthrax = parseInt(data_anthrax[11].Realisasi);


    //  PENYAKIT HOG CHOLERA
    var data_hcholera = {!! json_encode($data_hcholera -> toArray())!!};
  var total_Target_Hcholera = 0;
  var total_Realisasi_Hcholera = 0;
  for (let index = 0; index < data_hcholera.length; index++) {
    var Target_Hcholera = parseInt(data_hcholera[index].Target);
    var Realisasi_Hcholera = parseInt(data_hcholera[index].Realisasi);
    total_Target_Hcholera += Target_Hcholera;
    total_Realisasi_Hcholera += Realisasi_Hcholera;
  }

  var rata_totalTarget_Hcholera  = total_Target_Hcholera /12;
  var tampil_totalTarget_Hcholera = String(rata_totalTarget_Hcholera);
  var tampil_totalRealisasi_Hcholera = String(total_Realisasi_Hcholera);
  // console.log(tampil_totalTarget_Hcholera, tampil_totalRealisasi_Hcholera)
  var tampil_Persentase = (parseInt(total_Realisasi_Hcholera) / parseInt(rata_totalTarget_Hcholera)) * 100;
  var tampil_PersentaseFix_Hcholera = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT HOG CHOLERA PER BULAN 
  var targetbulan1_hcholera = parseInt(data_hcholera[0].Target);
  var realisasibulan1_hcholera = parseInt(data_hcholera[0].Realisasi);
  var targetbulan2_hcholera = parseInt(data_hcholera[1].Target);
  var realisasibulan2_hcholera = parseInt(data_hcholera[1].Realisasi);
  var targetbulan3_hcholera = parseInt(data_hcholera[2].Target);
  var realisasibulan3_hcholera = parseInt(data_hcholera[2].Realisasi);
  var targetbulan4_hcholera = parseInt(data_hcholera[3].Target);
  var realisasibulan4_hcholera = parseInt(data_hcholera[3].Realisasi);
  var targetbulan5_hcholera = parseInt(data_hcholera[4].Target);
  var realisasibulan5_hcholera = parseInt(data_hcholera[4].Realisasi);
  var targetbulan6_hcholera = parseInt(data_hcholera[5].Target);
  var realisasibulan6_hcholera = parseInt(data_hcholera[5].Realisasi);
  var targetbulan7_hcholera = parseInt(data_hcholera[6].Target);
  var realisasibulan7_hcholera = parseInt(data_hcholera[6].Realisasi);
  var targetbulan8_hcholera = parseInt(data_hcholera[7].Target);
  var realisasibulan8_hcholera = parseInt(data_hcholera[7].Realisasi);
  var targetbulan9_hcholera = parseInt(data_hcholera[8].Target);
  var realisasibulan9_hcholera = parseInt(data_hcholera[8].Realisasi);
  var targetbulan10_hcholera = parseInt(data_hcholera[9].Target);
  var realisasibulan10_hcholera = parseInt(data_hcholera[9].Realisasi);
  var targetbulan11_hcholera = parseInt(data_hcholera[10].Target);
  var realisasibulan11_hcholera = parseInt(data_hcholera[10].Realisasi);
  var targetbulan12_hcholera = parseInt(data_hcholera[11].Target);
  var realisasibulan12_hcholera = parseInt(data_hcholera[11].Realisasi);


//  PENYAKIT ASF
var data_asf = {!! json_encode($data_asf -> toArray())!!};
var total_Target_Asf= 0;
var total_Realisasi_Asf= 0;
for (let index = 0; index < data_asf.length; index++) {
var Target_Asf= parseInt(data_asf[index].Target);
var Realisasi_Asf= parseInt(data_asf[index].Realisasi);
total_Target_Asf+= Target_Asf;
total_Realisasi_Asf+= Realisasi_Asf;
}

var rata_totalTarget_Asf = total_Target_Asf/12;
var tampil_totalTarget_Asf= String(rata_totalTarget_Asf);
var tampil_totalRealisasi_Asf= String(total_Realisasi_Asf);
// console.log(tampil_totalTarget_Asf, tampil_totalRealisasi_Asf)
var tampil_Persentase = (parseInt(total_Realisasi_Asf) / parseInt(rata_totalTarget_Asf)) * 100;
var tampil_PersentaseFix_Asf= tampil_Persentase.toFixed(2) + ' %'

// PENYAKIT ASF PER BULAN 
var targetbulan1_asf = parseInt(data_asf[0].Target);
var realisasibulan1_asf = parseInt(data_asf[0].Realisasi);
var targetbulan2_asf = parseInt(data_asf[1].Target);
var realisasibulan2_asf = parseInt(data_asf[1].Realisasi);
var targetbulan3_asf = parseInt(data_asf[2].Target);
var realisasibulan3_asf = parseInt(data_asf[2].Realisasi);
var targetbulan4_asf = parseInt(data_asf[3].Target);
var realisasibulan4_asf = parseInt(data_asf[3].Realisasi);
var targetbulan5_asf = parseInt(data_asf[4].Target);
var realisasibulan5_asf = parseInt(data_asf[4].Realisasi);
var targetbulan6_asf = parseInt(data_asf[5].Target);
var realisasibulan6_asf = parseInt(data_asf[5].Realisasi);
var targetbulan7_asf = parseInt(data_asf[6].Target);
var realisasibulan7_asf = parseInt(data_asf[6].Realisasi);
var targetbulan8_asf = parseInt(data_asf[7].Target);
var realisasibulan8_asf = parseInt(data_asf[7].Realisasi);
var targetbulan9_asf = parseInt(data_asf[8].Target);
var realisasibulan9_asf = parseInt(data_asf[8].Realisasi);
var targetbulan10_asf = parseInt(data_asf[9].Target);
var realisasibulan10_asf = parseInt(data_asf[9].Realisasi);
var targetbulan11_asf = parseInt(data_asf[10].Target);
var realisasibulan11_asf = parseInt(data_asf[10].Realisasi);
var targetbulan12_asf = parseInt(data_asf[11].Target);
var realisasibulan12_asf = parseInt(data_asf[11].Realisasi);


    //  PENYAKIT PENYAKIT VIRAL
  var data_penyakitviral = {!! json_encode($data_penyakitviral -> toArray())!!};
  var total_Target_Penyakitviral = 0;
  var total_Realisasi_Penyakitviral = 0;
  for (let index = 0; index < data_penyakitviral.length; index++) {
    var Target_Penyakitviral = parseInt(data_penyakitviral[index].Target);
    var Realisasi_Penyakitviral = parseInt(data_penyakitviral[index].Realisasi);
    total_Target_Penyakitviral += Target_Penyakitviral;
    total_Realisasi_Penyakitviral += Realisasi_Penyakitviral;
  }

  var rata_totalTarget_Penyakitviral  = total_Target_Penyakitviral /12;
  var tampil_totalTarget_Penyakitviral = String(rata_totalTarget_Penyakitviral);
  var tampil_totalRealisasi_Penyakitviral = String(total_Realisasi_Penyakitviral);
  // console.log(tampil_totalTarget_Penyakitviral, tampil_totalRealisasi_Penyakitviral)
  var tampil_Persentase = (parseInt(total_Realisasi_Penyakitviral) / parseInt(rata_totalTarget_Penyakitviral)) * 100;
  var tampil_PersentaseFix_Penyakitviral = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT PENYAKIT VIRAL PER BULAN 
  var targetbulan1_penyakitviral = parseInt(data_penyakitviral[0].Target);
  var realisasibulan1_penyakitviral = parseInt(data_penyakitviral[0].Realisasi);
  var targetbulan2_penyakitviral = parseInt(data_penyakitviral[1].Target);
  var realisasibulan2_penyakitviral = parseInt(data_penyakitviral[1].Realisasi);
  var targetbulan3_penyakitviral = parseInt(data_penyakitviral[2].Target);
  var realisasibulan3_penyakitviral = parseInt(data_penyakitviral[2].Realisasi);
  var targetbulan4_penyakitviral = parseInt(data_penyakitviral[3].Target);
  var realisasibulan4_penyakitviral = parseInt(data_penyakitviral[3].Realisasi);
  var targetbulan5_penyakitviral = parseInt(data_penyakitviral[4].Target);
  var realisasibulan5_penyakitviral = parseInt(data_penyakitviral[4].Realisasi);
  var targetbulan6_penyakitviral = parseInt(data_penyakitviral[5].Target);
  var realisasibulan6_penyakitviral = parseInt(data_penyakitviral[5].Realisasi);
  var targetbulan7_penyakitviral = parseInt(data_penyakitviral[6].Target);
  var realisasibulan7_penyakitviral = parseInt(data_penyakitviral[6].Realisasi);
  var targetbulan8_penyakitviral = parseInt(data_penyakitviral[7].Target);
  var realisasibulan8_penyakitviral = parseInt(data_penyakitviral[7].Realisasi);
  var targetbulan9_penyakitviral = parseInt(data_penyakitviral[8].Target);
  var realisasibulan9_penyakitviral = parseInt(data_penyakitviral[8].Realisasi);
  var targetbulan10_penyakitviral = parseInt(data_penyakitviral[9].Target);
  var realisasibulan10_penyakitviral = parseInt(data_penyakitviral[9].Realisasi);
  var targetbulan11_penyakitviral = parseInt(data_penyakitviral[10].Target);
  var realisasibulan11_penyakitviral = parseInt(data_penyakitviral[10].Realisasi);
  var targetbulan12_penyakitviral = parseInt(data_penyakitviral[11].Target);
  var realisasibulan12_penyakitviral = parseInt(data_penyakitviral[11].Realisasi);

  //  PENYAKIT PARASITER
  var data_parasiter = {!! json_encode($data_parasiter-> toArray())!!};
  var total_Target_Parasiter = 0;
  var total_Realisasi_Parasiter = 0;
  for (let index = 0; index < data_parasiter.length; index++) {
    var Target_Parasiter = parseInt(data_parasiter[index].Target);
    var Realisasi_Parasiter = parseInt(data_parasiter[index].Realisasi);
    total_Target_Parasiter += Target_Parasiter;
    total_Realisasi_Parasiter += Realisasi_Parasiter;
  }

  var rata_totalTarget_Parasiter  = total_Target_Parasiter /12;
  var tampil_totalTarget_Parasiter = String(rata_totalTarget_Parasiter);
  var tampil_totalRealisasi_Parasiter = String(total_Realisasi_Parasiter);
  // console.log(tampil_totalTarget_Parasiter, tampil_totalRealisasi_Parasiter)
  var tampil_Persentase = (parseInt(total_Realisasi_Parasiter) / parseInt(rata_totalTarget_Parasiter)) * 100;
  var tampil_PersentaseFix_Parasiter = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT PARASITER PER BULAN 
  var targetbulan1_parasiter= parseInt(data_parasiter[0].Target);
  var realisasibulan1_parasiter= parseInt(data_parasiter[0].Realisasi);
  var targetbulan2_parasiter= parseInt(data_parasiter[1].Target);
  var realisasibulan2_parasiter= parseInt(data_parasiter[1].Realisasi);
  var targetbulan3_parasiter= parseInt(data_parasiter[2].Target);
  var realisasibulan3_parasiter= parseInt(data_parasiter[2].Realisasi);
  var targetbulan4_parasiter= parseInt(data_parasiter[3].Target);
  var realisasibulan4_parasiter= parseInt(data_parasiter[3].Realisasi);
  var targetbulan5_parasiter= parseInt(data_parasiter[4].Target);
  var realisasibulan5_parasiter= parseInt(data_parasiter[4].Realisasi);
  var targetbulan6_parasiter= parseInt(data_parasiter[5].Target);
  var realisasibulan6_parasiter= parseInt(data_parasiter[5].Realisasi);
  var targetbulan7_parasiter= parseInt(data_parasiter[6].Target);
  var realisasibulan7_parasiter= parseInt(data_parasiter[6].Realisasi);
  var targetbulan8_parasiter= parseInt(data_parasiter[7].Target);
  var realisasibulan8_parasiter= parseInt(data_parasiter[7].Realisasi);
  var targetbulan9_parasiter= parseInt(data_parasiter[8].Target);
  var realisasibulan9_parasiter= parseInt(data_parasiter[8].Realisasi);
  var targetbulan10_parasiter= parseInt(data_parasiter[9].Target);
  var realisasibulan10_parasiter= parseInt(data_parasiter[9].Realisasi);
  var targetbulan11_parasiter= parseInt(data_parasiter[10].Target);
  var realisasibulan11_parasiter= parseInt(data_parasiter[10].Realisasi);
  var targetbulan12_parasiter= parseInt(data_parasiter[11].Target);
  var realisasibulan12_parasiter= parseInt(data_parasiter[11].Realisasi);


  //  PENYAKIT LSD
  var data_lsd = {!! json_encode($data_lsd -> toArray())!!};
  var total_Target_Lsd = 0;
  var total_Realisasi_Lsd = 0;
  for (let index = 0; index < data_lsd.length; index++) {
    var Target_Lsd = parseInt(data_lsd[index].Target);
    var Realisasi_Lsd = parseInt(data_lsd[index].Realisasi);
    total_Target_Lsd += Target_Lsd;
    total_Realisasi_Lsd += Realisasi_Lsd;
  }

  var rata_totalTarget_Lsd  = total_Target_Lsd /12;
  var tampil_totalTarget_Lsd = String(rata_totalTarget_Lsd);
  var tampil_totalRealisasi_Lsd = String(total_Realisasi_Lsd);
  // console.log(tampil_totalTarget_Lsd, tampil_totalRealisasi_Lsd)
  var tampil_Persentase = (parseInt(total_Realisasi_Lsd) / parseInt(rata_totalTarget_Lsd)) * 100;
  var tampil_PersentaseFix_Lsd = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT LSD PER BULAN 
  var targetbulan1_lsd = parseInt(data_lsd[0].Target);
  var realisasibulan1_lsd = parseInt(data_lsd[0].Realisasi);
  var targetbulan2_lsd = parseInt(data_lsd[1].Target);
  var realisasibulan2_lsd = parseInt(data_lsd[1].Realisasi);
  var targetbulan3_lsd = parseInt(data_lsd[2].Target);
  var realisasibulan3_lsd = parseInt(data_lsd[2].Realisasi);
  var targetbulan4_lsd = parseInt(data_lsd[3].Target);
  var realisasibulan4_lsd = parseInt(data_lsd[3].Realisasi);
  var targetbulan5_lsd = parseInt(data_lsd[4].Target);
  var realisasibulan5_lsd = parseInt(data_lsd[4].Realisasi);
  var targetbulan6_lsd = parseInt(data_lsd[5].Target);
  var realisasibulan6_lsd = parseInt(data_lsd[5].Realisasi);
  var targetbulan7_lsd = parseInt(data_lsd[6].Target);
  var realisasibulan7_lsd = parseInt(data_lsd[6].Realisasi);
  var targetbulan8_lsd = parseInt(data_lsd[7].Target);
  var realisasibulan8_lsd = parseInt(data_lsd[7].Realisasi);
  var targetbulan9_lsd = parseInt(data_lsd[8].Target);
  var realisasibulan9_lsd = parseInt(data_lsd[8].Realisasi);
  var targetbulan10_lsd = parseInt(data_lsd[9].Target);
  var realisasibulan10_lsd = parseInt(data_lsd[9].Realisasi);
  var targetbulan11_lsd = parseInt(data_lsd[10].Target);
  var realisasibulan11_lsd = parseInt(data_lsd[10].Realisasi);
  var targetbulan12_lsd = parseInt(data_lsd[11].Target);
  var realisasibulan12_lsd = parseInt(data_lsd[11].Realisasi);

  //  PENYAKIT INVESTIGAS WABAH
  var data_inveswabah = {!! json_encode($data_inveswabah -> toArray())!!};
  var total_Target_Inveswabah = 0;
  var total_Realisasi_Inveswabah = 0;
  for (let index = 0; index < data_inveswabah.length; index++) {
    var Target_Inveswabah = parseInt(data_inveswabah[index].Target);
    var Realisasi_Inveswabah = parseInt(data_inveswabah[index].Realisasi);
    total_Target_Inveswabah += Target_Inveswabah;
    total_Realisasi_Inveswabah += Realisasi_Inveswabah;
  }

  var rata_totalTarget_Inveswabah  = total_Target_Inveswabah /12;
  var tampil_totalTarget_Inveswabah = String(rata_totalTarget_Inveswabah);
  var tampil_totalRealisasi_Inveswabah = String(total_Realisasi_Inveswabah);
  // console.log(tampil_totalTarget_Inveswabah, tampil_totalRealisasi_Inveswabah)
  var tampil_Persentase = (parseInt(total_Realisasi_Inveswabah) / parseInt(rata_totalTarget_Inveswabah)) * 100;
  var tampil_PersentaseFix_Inveswabah = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT INVESTIGAS WABAH PER BULAN 
  var targetbulan1_inveswabah = parseInt(data_inveswabah[0].Target);
  var realisasibulan1_inveswabah = parseInt(data_inveswabah[0].Realisasi);
  var targetbulan2_inveswabah = parseInt(data_inveswabah[1].Target);
  var realisasibulan2_inveswabah = parseInt(data_inveswabah[1].Realisasi);
  var targetbulan3_inveswabah = parseInt(data_inveswabah[2].Target);
  var realisasibulan3_inveswabah = parseInt(data_inveswabah[2].Realisasi);
  var targetbulan4_inveswabah = parseInt(data_inveswabah[3].Target);
  var realisasibulan4_inveswabah = parseInt(data_inveswabah[3].Realisasi);
  var targetbulan5_inveswabah = parseInt(data_inveswabah[4].Target);
  var realisasibulan5_inveswabah = parseInt(data_inveswabah[4].Realisasi);
  var targetbulan6_inveswabah = parseInt(data_inveswabah[5].Target);
  var realisasibulan6_inveswabah = parseInt(data_inveswabah[5].Realisasi);
  var targetbulan7_inveswabah = parseInt(data_inveswabah[6].Target);
  var realisasibulan7_inveswabah = parseInt(data_inveswabah[6].Realisasi);
  var targetbulan8_inveswabah = parseInt(data_inveswabah[7].Target);
  var realisasibulan8_inveswabah = parseInt(data_inveswabah[7].Realisasi);
  var targetbulan9_inveswabah = parseInt(data_inveswabah[8].Target);
  var realisasibulan9_inveswabah = parseInt(data_inveswabah[8].Realisasi);
  var targetbulan10_inveswabah = parseInt(data_inveswabah[9].Target);
  var realisasibulan10_inveswabah = parseInt(data_inveswabah[9].Realisasi);
  var targetbulan11_inveswabah = parseInt(data_inveswabah[10].Target);
  var realisasibulan11_inveswabah = parseInt(data_inveswabah[10].Realisasi);
  var targetbulan12_inveswabah = parseInt(data_inveswabah[11].Target);
  var realisasibulan12_inveswabah = parseInt(data_inveswabah[11].Realisasi);

   //  PENYAKIT Penyakit bakterial
  var data_penyakitbakterial = {!! json_encode($data_penyakitbakterial -> toArray())!!};
  var total_Target_Penyakitbakterial = 0;
  var total_Realisasi_Penyakitbakterial = 0;
  for (let index = 0; index < data_penyakitbakterial.length; index++) {
    var Target_Penyakitbakterial = parseInt(data_penyakitbakterial[index].Target);
    var Realisasi_Penyakitbakterial = parseInt(data_penyakitbakterial[index].Realisasi);
    total_Target_Penyakitbakterial += Target_Penyakitbakterial;
    total_Realisasi_Penyakitbakterial += Realisasi_Penyakitbakterial;
  }

  var rata_totalTarget_Penyakitbakterial  = total_Target_Penyakitbakterial /12;
  var tampil_totalTarget_Penyakitbakterial = String(rata_totalTarget_Penyakitbakterial);
  var tampil_totalRealisasi_Penyakitbakterial = String(total_Realisasi_Penyakitbakterial);
  // console.log(tampil_totalTarget_Penyakitbakterial, tampil_totalRealisasi_Penyakitbakterial)
  var tampil_Persentase = (parseInt(total_Realisasi_Penyakitbakterial) / parseInt(rata_totalTarget_Penyakitbakterial)) * 100;
  var tampil_PersentaseFix_Penyakitbakterial = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT Penyakit bakterial PER BULAN 
  var targetbulan1_penyakitbakterial = parseInt(data_penyakitbakterial[0].Target);
  var realisasibulan1_penyakitbakterial = parseInt(data_penyakitbakterial[0].Realisasi);
  var targetbulan2_penyakitbakterial = parseInt(data_penyakitbakterial[1].Target);
  var realisasibulan2_penyakitbakterial = parseInt(data_penyakitbakterial[1].Realisasi);
  var targetbulan3_penyakitbakterial = parseInt(data_penyakitbakterial[2].Target);
  var realisasibulan3_penyakitbakterial = parseInt(data_penyakitbakterial[2].Realisasi);
  var targetbulan4_penyakitbakterial = parseInt(data_penyakitbakterial[3].Target);
  var realisasibulan4_penyakitbakterial = parseInt(data_penyakitbakterial[3].Realisasi);
  var targetbulan5_penyakitbakterial = parseInt(data_penyakitbakterial[4].Target);
  var realisasibulan5_penyakitbakterial = parseInt(data_penyakitbakterial[4].Realisasi);
  var targetbulan6_penyakitbakterial = parseInt(data_penyakitbakterial[5].Target);
  var realisasibulan6_penyakitbakterial = parseInt(data_penyakitbakterial[5].Realisasi);
  var targetbulan7_penyakitbakterial = parseInt(data_penyakitbakterial[6].Target);
  var realisasibulan7_penyakitbakterial = parseInt(data_penyakitbakterial[6].Realisasi);
  var targetbulan8_penyakitbakterial = parseInt(data_penyakitbakterial[7].Target);
  var realisasibulan8_penyakitbakterial = parseInt(data_penyakitbakterial[7].Realisasi);
  var targetbulan9_penyakitbakterial = parseInt(data_penyakitbakterial[8].Target);
  var realisasibulan9_penyakitbakterial = parseInt(data_penyakitbakterial[8].Realisasi);
  var targetbulan10_penyakitbakterial = parseInt(data_penyakitbakterial[9].Target);
  var realisasibulan10_penyakitbakterial = parseInt(data_penyakitbakterial[9].Realisasi);
  var targetbulan11_penyakitbakterial = parseInt(data_penyakitbakterial[10].Target);
  var realisasibulan11_penyakitbakterial = parseInt(data_penyakitbakterial[10].Realisasi);
  var targetbulan12_penyakitbakterial = parseInt(data_penyakitbakterial[11].Target);
  var realisasibulan12_penyakitbakterial = parseInt(data_penyakitbakterial[11].Realisasi);



  // TOTAL PERBULAN 
  var totalTarget_januari = targetbulan1_rabies + targetbulan1_avian + targetbulan1_brucellosis + targetbulan1_anthrax + targetbulan1_hcholera + targetbulan1_asf + targetbulan1_penyakitviral +targetbulan1_penyakitbakterial + targetbulan1_pmk + targetbulan1_lsd + targetbulan1_parasiter + targetbulan1_inveswabah;
  var rataTarget_januari = totalTarget_januari/12;
  var totalTargetFix_januari = rataTarget_januari.toFixed(2);
  var totalRealisasi_januari = realisasibulan1_rabies + realisasibulan1_avian + realisasibulan1_brucellosis + realisasibulan1_anthrax + realisasibulan1_hcholera + realisasibulan1_asf + realisasibulan1_penyakitviral +realisasibulan1_penyakitbakterial + realisasibulan1_pmk + realisasibulan1_lsd + realisasibulan1_parasiter + realisasibulan1_inveswabah;

  var totalTarget_februari = targetbulan2_rabies + targetbulan2_avian + targetbulan2_brucellosis + targetbulan2_anthrax + targetbulan2_hcholera +  targetbulan2_asf + targetbulan2_penyakitviral +targetbulan2_penyakitbakterial + targetbulan2_pmk + targetbulan2_lsd + targetbulan2_parasiter + targetbulan2_inveswabah;
  var rataTarget_februari = totalTarget_februari/12;
  var totalTargetFix_februari = rataTarget_februari.toFixed(2);
  var totalRealisasi_februari = realisasibulan2_rabies + realisasibulan2_avian + realisasibulan2_brucellosis + realisasibulan2_anthrax + realisasibulan2_hcholera +  realisasibulan2_asf + realisasibulan2_penyakitviral +realisasibulan2_penyakitbakterial + realisasibulan2_pmk + realisasibulan2_lsd + realisasibulan2_parasiter + realisasibulan2_inveswabah;

  var totalTarget_maret = targetbulan3_rabies + targetbulan3_avian + targetbulan3_brucellosis + targetbulan3_anthrax + targetbulan3_hcholera +  targetbulan3_asf + targetbulan3_penyakitviral +targetbulan3_penyakitbakterial + targetbulan3_pmk + targetbulan3_lsd + targetbulan3_parasiter + targetbulan3_inveswabah;
  var rataTarget_maret = totalTarget_maret/12;
  var totalTargetFix_maret = rataTarget_maret.toFixed(2);
  var totalRealisasi_maret = realisasibulan3_rabies + realisasibulan3_avian + realisasibulan3_brucellosis + realisasibulan3_anthrax + realisasibulan3_hcholera +  realisasibulan3_asf + realisasibulan3_penyakitviral +realisasibulan3_penyakitbakterial + realisasibulan3_pmk + realisasibulan3_lsd + realisasibulan3_parasiter + realisasibulan3_inveswabah;

  var totalTarget_april = targetbulan4_rabies + targetbulan4_avian + targetbulan4_brucellosis + targetbulan4_anthrax + targetbulan4_hcholera +  targetbulan4_asf + targetbulan4_penyakitviral +targetbulan4_penyakitbakterial + targetbulan4_pmk + targetbulan4_lsd + targetbulan4_parasiter + targetbulan4_inveswabah;
  var rataTarget_april = totalTarget_april/12;
  var totalTargetFix_april = rataTarget_april.toFixed(2);
  var totalRealisasi_april = realisasibulan4_rabies + realisasibulan4_avian + realisasibulan4_brucellosis + realisasibulan4_anthrax + realisasibulan4_hcholera +  realisasibulan4_asf + realisasibulan4_penyakitviral +realisasibulan4_penyakitbakterial + realisasibulan4_pmk + realisasibulan4_lsd + realisasibulan4_parasiter + realisasibulan4_inveswabah;
  
  var totalTarget_mei = targetbulan5_rabies + targetbulan5_avian + targetbulan5_brucellosis + targetbulan5_anthrax + targetbulan5_hcholera +  targetbulan5_asf + targetbulan5_penyakitviral +targetbulan5_penyakitbakterial + targetbulan5_pmk + targetbulan5_lsd + targetbulan5_parasiter + targetbulan5_inveswabah;
  var rataTarget_mei = totalTarget_mei/12;
  var totalTargetFix_mei = rataTarget_mei.toFixed(2);
  var totalRealisasi_mei = realisasibulan5_rabies + realisasibulan5_avian + realisasibulan5_brucellosis + realisasibulan5_anthrax + realisasibulan5_hcholera +  realisasibulan5_asf + realisasibulan5_penyakitviral +realisasibulan5_penyakitbakterial + realisasibulan5_pmk + realisasibulan5_lsd + realisasibulan5_parasiter + realisasibulan5_inveswabah;
  
  var totalTarget_juni = targetbulan6_rabies + targetbulan6_avian + targetbulan6_brucellosis + targetbulan6_anthrax + targetbulan6_hcholera +  targetbulan6_asf + targetbulan6_penyakitviral +targetbulan6_penyakitbakterial + targetbulan6_pmk + targetbulan6_lsd + targetbulan6_parasiter + targetbulan6_inveswabah;
  var rataTarget_juni = totalTarget_juni/12;
  var totalTargetFix_juni = rataTarget_juni.toFixed(2);
  var totalRealisasi_juni = realisasibulan6_rabies + realisasibulan6_avian + realisasibulan6_brucellosis + realisasibulan6_anthrax + realisasibulan6_hcholera +  realisasibulan6_asf + realisasibulan6_penyakitviral +realisasibulan6_penyakitbakterial + realisasibulan6_pmk + realisasibulan6_lsd + realisasibulan6_parasiter + realisasibulan6_inveswabah;

  var totalTarget_juli = targetbulan7_rabies + targetbulan7_avian + targetbulan7_brucellosis + targetbulan7_anthrax + targetbulan7_hcholera +  targetbulan7_asf + targetbulan7_penyakitviral +targetbulan7_penyakitbakterial + targetbulan7_pmk + targetbulan7_lsd + targetbulan7_parasiter + targetbulan7_inveswabah;
  var rataTarget_juli = totalTarget_juli/12;
  var totalTargetFix_juli = rataTarget_juli.toFixed(2);
  var totalRealisasi_juli = realisasibulan7_rabies + realisasibulan7_avian + realisasibulan7_brucellosis + realisasibulan7_anthrax + realisasibulan7_hcholera +  realisasibulan7_asf + realisasibulan7_penyakitviral +realisasibulan7_penyakitbakterial + realisasibulan7_pmk + realisasibulan7_lsd + realisasibulan7_parasiter + realisasibulan7_inveswabah;

  var totalTarget_agustus = targetbulan8_rabies + targetbulan8_avian + targetbulan8_brucellosis + targetbulan8_anthrax + targetbulan8_hcholera +  targetbulan8_asf + targetbulan8_penyakitviral +targetbulan8_penyakitbakterial + targetbulan8_pmk + targetbulan8_lsd + targetbulan8_parasiter + targetbulan8_inveswabah;
  var rataTarget_agustus = totalTarget_agustus/12;
  var totalTargetFix_agustus = rataTarget_agustus.toFixed(2);
  var totalRealisasi_agustus = realisasibulan8_rabies + realisasibulan8_avian + realisasibulan8_brucellosis + realisasibulan8_anthrax + realisasibulan8_hcholera +  realisasibulan8_asf + realisasibulan8_penyakitviral +realisasibulan8_penyakitbakterial + realisasibulan8_pmk + realisasibulan8_lsd + realisasibulan8_parasiter + realisasibulan8_inveswabah;

  var totalTarget_september = targetbulan9_rabies + targetbulan9_avian + targetbulan9_brucellosis + targetbulan9_anthrax + targetbulan9_hcholera +  targetbulan9_asf + targetbulan9_penyakitviral +targetbulan9_penyakitbakterial + targetbulan9_pmk + targetbulan9_lsd + targetbulan9_parasiter + targetbulan9_inveswabah;
  var rataTarget_september = totalTarget_september/12;
  var totalTargetFix_september = rataTarget_september.toFixed(2);
  var totalRealisasi_september = realisasibulan9_rabies + realisasibulan9_avian + realisasibulan9_brucellosis + realisasibulan9_anthrax + realisasibulan9_hcholera +  realisasibulan9_asf + realisasibulan9_penyakitviral +realisasibulan9_penyakitbakterial + realisasibulan9_pmk + realisasibulan9_lsd + realisasibulan9_parasiter + realisasibulan9_inveswabah;

  var totalTarget_oktober = targetbulan10_rabies + targetbulan10_avian + targetbulan10_brucellosis + targetbulan10_anthrax + targetbulan10_hcholera +  targetbulan10_asf + targetbulan10_penyakitviral +targetbulan10_penyakitbakterial + targetbulan10_pmk + targetbulan10_lsd + targetbulan10_parasiter + targetbulan10_inveswabah;
  var rataTarget_oktober = totalTarget_oktober/12;
  var totalTargetFix_oktober = rataTarget_oktober.toFixed(2);
  var totalRealisasi_oktober = realisasibulan10_rabies + realisasibulan10_avian + realisasibulan10_brucellosis + realisasibulan10_anthrax + realisasibulan10_hcholera +  realisasibulan10_asf + realisasibulan10_penyakitviral +realisasibulan10_penyakitbakterial + realisasibulan10_pmk + realisasibulan10_lsd + realisasibulan10_parasiter + realisasibulan10_inveswabah;

  var totalTarget_november = targetbulan11_rabies + targetbulan11_avian + targetbulan11_brucellosis + targetbulan11_anthrax + targetbulan11_hcholera +  targetbulan11_asf + targetbulan11_penyakitviral +targetbulan11_penyakitbakterial + targetbulan11_pmk + targetbulan11_lsd + targetbulan11_parasiter + targetbulan11_inveswabah;
  var rataTarget_november = totalTarget_november/12;
  var totalTargetFix_november = rataTarget_november.toFixed(2);
  var totalRealisasi_november = realisasibulan11_rabies + realisasibulan11_avian + realisasibulan11_brucellosis + realisasibulan11_anthrax + realisasibulan11_hcholera +  realisasibulan11_asf + realisasibulan11_penyakitviral +realisasibulan11_penyakitbakterial + realisasibulan11_pmk + realisasibulan11_lsd + realisasibulan11_parasiter + realisasibulan11_inveswabah;

  var totalTarget_desember = targetbulan12_rabies + targetbulan12_avian + targetbulan12_brucellosis + targetbulan12_anthrax + targetbulan12_hcholera +  targetbulan12_asf + targetbulan12_penyakitviral +targetbulan12_penyakitbakterial + targetbulan12_pmk + targetbulan12_lsd + targetbulan12_parasiter + targetbulan12_inveswabah;
  var rataTarget_desember = totalTarget_desember/12;
  var totalTargetFix_desember = rataTarget_desember.toFixed(2);
  var totalRealisasi_desember = realisasibulan12_rabies + realisasibulan12_avian + realisasibulan12_brucellosis + realisasibulan12_anthrax + realisasibulan12_hcholera +  realisasibulan12_asf + realisasibulan12_penyakitviral +realisasibulan12_penyakitbakterial + realisasibulan12_pmk + realisasibulan12_lsd + realisasibulan12_parasiter + realisasibulan12_inveswabah;


  var totalTarget_tampil = parseFloat(totalTargetFix_januari) + parseFloat(totalTargetFix_februari) + parseFloat(totalTargetFix_maret) + parseFloat(totalTargetFix_april) + parseFloat(totalTargetFix_mei) + parseFloat(totalTargetFix_juni) + parseFloat(totalTargetFix_juli) + parseFloat(totalTargetFix_agustus) + parseFloat(totalTargetFix_september) + parseFloat(totalTargetFix_oktober) + parseFloat(totalTargetFix_november) + parseFloat(totalTargetFix_desember);
  
  var totalTarget_tampil_piphewan= parseInt(totalTarget_tampil);
  // parseFloat(totalTargetFix_januari) + parseFloat(totalTargetFix_februari) + parseFloat(totalTargetFix_maret) + parseFloat(totalTargetFix_april) + parseFloat(totalTargetFix_mei) + parseFloat(totalTargetFix_juni) + parseFloat(totalTargetFix_juli) + parseFloat(totalTargetFix_agustus) + parseFloat(totalTargetFix_september) + parseFloat(totalTargetFix_oktober) + parseFloat(totalTargetFix_november) + parseFloat(totalTargetFix_desember);  // console.log(tampil_totalTarget_Rabies)

  var totalRealisasi_tampil_piphewan = totalRealisasi_januari + totalRealisasi_februari + totalRealisasi_maret + totalRealisasi_april + totalRealisasi_mei + totalRealisasi_juni + totalRealisasi_juli + totalRealisasi_agustus + totalRealisasi_september + totalRealisasi_oktober + totalRealisasi_november + totalRealisasi_desember;
  var persentase_awal = (parseInt(totalRealisasi_tampil_piphewan) / parseInt(totalTarget_tampil_piphewan)) * 100;
  var persentase_tampil_piphewan = persentase_awal.toFixed(2) + '%'

  // SARANA BIDANG 
  var data_sbkhewan = {!!json_encode($data_sbkhewan -> toArray()) !!};
  var total_Target_Sbkhewan = 0;
  var total_Realisasi_Sbkhewan = 0;
  for (let index = 0; index < data_sbkhewan.length; index++) {
    var Target_Sbkhewan = parseInt(data_sbkhewan[index].Target);
    var Realisasi_Sbkhewan = parseInt(data_sbkhewan[index].Realisasi);
    total_Target_Sbkhewan += Target_Sbkhewan;
    total_Realisasi_Sbkhewan += Realisasi_Sbkhewan;
  }

  var rata_totalTarget_Sbkhewan = total_Target_Sbkhewan / 12;
  var tampil_totalTarget_Sbkhewan = String(rata_totalTarget_Sbkhewan);
  var tampil_totalRealisasi_Sbkhewan = String(total_Realisasi_Sbkhewan);
  console.log(tampil_totalTarget_Sbkhewan, tampil_totalRealisasi_Sbkhewan)
  var tampil_Persentase = (parseInt(total_Realisasi_Sbkhewan) / parseInt(rata_totalTarget_Sbkhewan)) * 100;
  var tampil_PersentaseFix_Sbkhewan = tampil_Persentase.toFixed(2) + ' %'


  // TERNAK RUMINANSIA POTONG

  var data_ternakpotong = {!!json_encode($data_ternakpotong -> toArray()) !!};
  var total_Target_Ternakpotong = 0;
  var total_Realisasi_Ternakpotong = 0;
  for (let index = 0; index < data_ternakpotong.length; index++) {
    var Target_Ternakpotong = parseInt(data_ternakpotong[index].Target);
    var Realisasi_Ternakpotong = parseInt(data_ternakpotong[index].Realisasi);
    total_Target_Ternakpotong += Target_Ternakpotong;
    total_Realisasi_Ternakpotong += Realisasi_Ternakpotong;
  }

  var rata_totalTarget_Ternakpotong = total_Target_Ternakpotong / 12;
  var tampil_totalTarget_Ternakpotong = String(rata_totalTarget_Ternakpotong);
  var tampil_totalRealisasi_Ternakpotong = String(total_Realisasi_Ternakpotong);
  console.log(tampil_totalTarget_Ternakpotong, tampil_totalRealisasi_Ternakpotong)
  var tampil_Persentase = (parseInt(total_Realisasi_Ternakpotong) / parseInt(rata_totalTarget_Ternakpotong)) * 100;
  var tampil_PersentaseFix_Ternakpotong = tampil_Persentase.toFixed(2) + ' %'

  // TERNAK UNGGAS

  var data_ternakunggas = {!!json_encode($data_ternakunggas -> toArray()) !!};
  var total_Target_Ternakunggas = 0;
  var total_Realisasi_Ternakunggas = 0;
  for (let index = 0; index < data_ternakunggas.length; index++) {
    var Target_Ternakunggas = parseInt(data_ternakunggas[index].Target);
    var Realisasi_Ternakunggas = parseInt(data_ternakunggas[index].Realisasi);
    total_Target_Ternakunggas += Target_Ternakunggas;
    total_Realisasi_Ternakunggas += Realisasi_Ternakunggas;
  }

  var rata_totalTarget_Ternakunggas = total_Target_Ternakunggas / 12;
  var tampil_totalTarget_Ternakunggas = String(rata_totalTarget_Ternakunggas);
  var tampil_totalRealisasi_Ternakunggas = String(total_Realisasi_Ternakunggas);
  // console.log(tampil_totalTarget_Ternakunggas, tampil_totalRealisasi_Ternakunggas)
  var tampil_Persentase = (parseInt(total_Realisasi_Ternakunggas) / parseInt(rata_totalTarget_Ternakunggas)) * 100;
  var tampil_PersentaseFix_Ternakunggas = tampil_Persentase.toFixed(2) + ' %'


  // KEAMANAN PRODUK

  var data_keamananproduk = {!!json_encode($data_keamananproduk -> toArray()) !!};
  var total_Target_Keamananproduk = 0;
  var total_Realisasi_Keamananproduk = 0;
  for (let index = 0; index < data_keamananproduk.length; index++) {
    var Target_Keamananproduk = parseInt(data_keamananproduk[index].Target);
    var Realisasi_Keamananproduk = parseInt(data_keamananproduk[index].Realisasi);
    total_Target_Keamananproduk += Target_Keamananproduk;
    total_Realisasi_Keamananproduk += Realisasi_Keamananproduk;
  }

  var rata_totalTarget_Keamananproduk = total_Target_Keamananproduk / 12;
  var tampil_totalTarget_Keamananproduk = String(rata_totalTarget_Keamananproduk);
  var tampil_totalRealisasi_Keamananproduk = String(total_Realisasi_Keamananproduk);
  // console.log(tampil_totalTarget_Keamananproduk, tampil_totalRealisasi_Keamananproduk)
  var tampil_Persentase = (parseInt(total_Realisasi_Keamananproduk) / parseInt(rata_totalTarget_Keamananproduk)) * 100;
  var tampil_PersentaseFix_Keamananproduk = tampil_Persentase.toFixed(2) + ' %'


  // LAYANAN
  var data_layanan = {!!json_encode($data_layanan -> toArray()) !!};
  var total_Target_Layanan = 0;
  var total_Realisasi_Layanan = 0;
  for (let index = 0; index < data_layanan.length; index++) {
    var Target_Layanan = parseInt(data_layanan[index].Target);
    var Realisasi_Layanan = parseInt(data_layanan[index].Realisasi);
    total_Target_Layanan += Target_Layanan;
    total_Realisasi_Layanan += Realisasi_Layanan;
  }

  var rata_totalTarget_Layanan = total_Target_Layanan / 12;
  var tampil_totalTarget_Layanan = String(rata_totalTarget_Layanan);
  var tampil_totalRealisasi_Layanan = String(total_Realisasi_Layanan);
  console.log(tampil_totalTarget_Layanan, tampil_totalRealisasi_Layanan)
  var tampil_Persentase = (parseInt(total_Realisasi_Layanan) / parseInt(rata_totalTarget_Layanan)) * 100;
  var tampil_PersentaseFix_Layanan = tampil_Persentase.toFixed(2) + ' %'


  // LAYANAN KINERJA
var data_layanankinerja = {!!json_encode($data_layanankinerja -> toArray()) !!};
var total_Target_Layanankinerja = 0;
var total_Realisasi_Layanankinerja = 0;
for (let index = 0; index < data_layanankinerja.length; index++) {
  var Target_Layanankinerja = parseInt(data_layanankinerja[index].Target);
  var Realisasi_Layanankinerja = parseInt(data_layanankinerja[index].Realisasi);
  total_Target_Layanankinerja += Target_Layanankinerja;
  total_Realisasi_Layanankinerja += Realisasi_Layanankinerja;
}

var rata_totalTarget_Layanankinerja = total_Target_Layanankinerja / 12;
var tampil_totalTarget_Layanankinerja = String(rata_totalTarget_Layanankinerja);
var tampil_totalRealisasi_Layanankinerja = String(total_Realisasi_Layanankinerja);
console.log(tampil_totalTarget_Layanankinerja, tampil_totalRealisasi_Layanankinerja)
var tampil_Persentase = (parseInt(total_Realisasi_Layanankinerja) / parseInt(rata_totalTarget_Layanankinerja)) * 100;
var tampil_PersentaseFix_Layanankinerja = tampil_Persentase.toFixed(2) + ' %'


  // KEAMANAN PRODUK BARU

  //  PENYAKIT AMR NASIONAL
var data_amrnasional24 = {!! json_encode($data_amrnasional -> toArray())!!};
var total_Target_Amrnasional24 = 0;
var total_Realisasi_Amrnasional24 = 0;
for (let index = 0; index < data_amrnasional24.length; index++) {
  var Target_Amrnasional24 = parseInt(data_amrnasional24[index].Target);
  var Realisasi_Amrnasional24 = parseInt(data_amrnasional24[index].Realisasi);
  total_Target_Amrnasional24 += Target_Amrnasional24;
  total_Realisasi_Amrnasional24 += Realisasi_Amrnasional24;
}

var rata_totalTarget_Amrnasional24  = total_Target_Amrnasional24 /12;
var tampil_totalTarget_Amrnasional24 = String(rata_totalTarget_Amrnasional24);
var tampil_totalRealisasi_Amrnasional24 = String(total_Realisasi_Amrnasional24);
// console.log(tampil_totalTarget_Amrnasional24, tampil_totalRealisasi_Amrnasional24)
var tampil_Persentase = (parseInt(total_Realisasi_Amrnasional24) / parseInt(rata_totalTarget_Amrnasional24)) * 100;
var tampil_PersentaseFix_Amrnasional24 = tampil_Persentase.toFixed(2) + ' %'

// PENYAKIT AMR NASIONAL PER BULAN 
var targetbulan1_amrnasional24 = parseInt(data_amrnasional24[0].Target);
var realisasibulan1_amrnasional24 = parseInt(data_amrnasional24[0].Realisasi);
var targetbulan2_amrnasional24 = parseInt(data_amrnasional24[1].Target);
var realisasibulan2_amrnasional24 = parseInt(data_amrnasional24[1].Realisasi);
var targetbulan3_amrnasional24 = parseInt(data_amrnasional24[2].Target);
var realisasibulan3_amrnasional24 = parseInt(data_amrnasional24[2].Realisasi);
var targetbulan4_amrnasional24 = parseInt(data_amrnasional24[3].Target);
var realisasibulan4_amrnasional24 = parseInt(data_amrnasional24[3].Realisasi);
var targetbulan5_amrnasional24 = parseInt(data_amrnasional24[4].Target);
var realisasibulan5_amrnasional24 = parseInt(data_amrnasional24[4].Realisasi);
var targetbulan6_amrnasional24 = parseInt(data_amrnasional24[5].Target);
var realisasibulan6_amrnasional24 = parseInt(data_amrnasional24[5].Realisasi);
var targetbulan7_amrnasional24 = parseInt(data_amrnasional24[6].Target);
var realisasibulan7_amrnasional24 = parseInt(data_amrnasional24[6].Realisasi);
var targetbulan8_amrnasional24 = parseInt(data_amrnasional24[7].Target);
var realisasibulan8_amrnasional24 = parseInt(data_amrnasional24[7].Realisasi);
var targetbulan9_amrnasional24 = parseInt(data_amrnasional24[8].Target);
var realisasibulan9_amrnasional24 = parseInt(data_amrnasional24[8].Realisasi);
var targetbulan10_amrnasional24 = parseInt(data_amrnasional24[9].Target);
var realisasibulan10_amrnasional24 = parseInt(data_amrnasional24[9].Realisasi);
var targetbulan11_amrnasional24 = parseInt(data_amrnasional24[10].Target);
var realisasibulan11_amrnasional24 = parseInt(data_amrnasional24[10].Realisasi);
var targetbulan12_amrnasional24 = parseInt(data_amrnasional24[11].Target);
var realisasibulan12_amrnasional24 = parseInt(data_amrnasional24[11].Realisasi);

//  PENYAKIT KEAMANAN PRODUK HEWAN
var data_keamananprodukhewan24 = {!! json_encode($data_keamananprodukhewan -> toArray())!!};
var total_Target_Keamananprodukhewan24 = 0;
var total_Realisasi_Keamananprodukhewan24 = 0;
for (let index = 0; index < data_keamananprodukhewan24.length; index++) {
  var Target_Keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[index].Target);
  var Realisasi_Keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[index].Realisasi);
  total_Target_Keamananprodukhewan24 += Target_Keamananprodukhewan24;
  total_Realisasi_Keamananprodukhewan24 += Realisasi_Keamananprodukhewan24;
}

var rata_totalTarget_Keamananprodukhewan24  = total_Target_Keamananprodukhewan24 /12;
var tampil_totalTarget_Keamananprodukhewan24 = String(rata_totalTarget_Keamananprodukhewan24);
var tampil_totalRealisasi_Keamananprodukhewan24 = String(total_Realisasi_Keamananprodukhewan24);
// console.log(tampil_totalTarget_Keamananprodukhewan24, tampil_totalRealisasi_Keamananprodukhewan24)
var tampil_Persentase = (parseInt(total_Realisasi_Keamananprodukhewan24) / parseInt(rata_totalTarget_Keamananprodukhewan24)) * 100;
var tampil_PersentaseFix_Keamananprodukhewan24 = tampil_Persentase.toFixed(2) + ' %'

// PENYAKIT KEAMANAN PRODUK HEWAN PER BULAN 
var targetbulan1_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[0].Target);
var realisasibulan1_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[0].Realisasi);
var targetbulan2_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[1].Target);
var realisasibulan2_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[1].Realisasi);
var targetbulan3_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[2].Target);
var realisasibulan3_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[2].Realisasi);
var targetbulan4_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[3].Target);
var realisasibulan4_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[3].Realisasi);
var targetbulan5_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[4].Target);
var realisasibulan5_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[4].Realisasi);
var targetbulan6_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[5].Target);
var realisasibulan6_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[5].Realisasi);
var targetbulan7_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[6].Target);
var realisasibulan7_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[6].Realisasi);
var targetbulan8_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[7].Target);
var realisasibulan8_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[7].Realisasi);
var targetbulan9_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[8].Target);
var realisasibulan9_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[8].Realisasi);
var targetbulan10_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[9].Target);
var realisasibulan10_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[9].Realisasi);
var targetbulan11_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[10].Target);
var realisasibulan11_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[10].Realisasi);
var targetbulan12_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[11].Target);
var realisasibulan12_keamananprodukhewan24 = parseInt(data_keamananprodukhewan24[11].Realisasi);


// TOTAL PERBULAN 
   var totalTarget_januari1 = targetbulan1_amrnasional24 + targetbulan1_keamananprodukhewan24;
   var rataTarget_januari1 = totalTarget_januari/2;
   var totalTargetFix_januari1 = rataTarget_januari.toFixed(2);
   var totalRealisasi_januari1 = realisasibulan1_amrnasional24 + realisasibulan1_keamananprodukhewan24;

   var totalTarget_februari1 = targetbulan2_amrnasional24 + targetbulan2_keamananprodukhewan24;
   var rataTarget_februari1 = totalTarget_februari/2;
   var totalTargetFix_februari1 = rataTarget_februari.toFixed(2);
   var totalRealisasi_februari1 = realisasibulan2_amrnasional24 + realisasibulan2_keamananprodukhewan24;

   var totalTarget_maret1 = targetbulan3_amrnasional24 + targetbulan3_keamananprodukhewan24;
   var rataTarget_maret1 = totalTarget_maret/2;
   var totalTargetFix_maret1 = rataTarget_maret.toFixed(2);
   var totalRealisasi_maret1 = realisasibulan3_amrnasional24 + realisasibulan3_keamananprodukhewan24;

   var totalTarget_april1 = targetbulan4_amrnasional24 + targetbulan4_keamananprodukhewan24;
   var rataTarget_april1 = totalTarget_april/2;
   var totalTargetFix_april1 = rataTarget_april.toFixed(2);
   var totalRealisasi_april1 = realisasibulan4_amrnasional24 + realisasibulan4_keamananprodukhewan24;
   
   var totalTarget_mei1 = targetbulan5_amrnasional24 + targetbulan5_keamananprodukhewan24;
   var rataTarget_mei1 = totalTarget_mei/2;
   var totalTargetFix_mei1 = rataTarget_mei.toFixed(2);
   var totalRealisasi_mei1 = realisasibulan5_amrnasional24 + realisasibulan5_keamananprodukhewan24;
   
   var totalTarget_juni1 = targetbulan6_amrnasional24 + targetbulan6_keamananprodukhewan24;
   var rataTarget_juni1 = totalTarget_juni/2;
   var totalTargetFix_juni1 = rataTarget_juni.toFixed(2);
   var totalRealisasi_juni1 = realisasibulan6_amrnasional24 + realisasibulan6_keamananprodukhewan24;

   var totalTarget_juli1 = targetbulan7_amrnasional24 + targetbulan7_keamananprodukhewan24;
   var rataTarget_juli1 = totalTarget_juli/2;
   var totalTargetFix_juli1 = rataTarget_juli.toFixed(2);
   var totalRealisasi_juli1 = realisasibulan7_amrnasional24 + realisasibulan7_keamananprodukhewan24;

   var totalTarget_agustus1 = targetbulan8_amrnasional24 + targetbulan8_keamananprodukhewan24;
   var rataTarget_agustus1 = totalTarget_agustus/2;
   var totalTargetFix_agustus1 = rataTarget_agustus.toFixed(2);
   var totalRealisasi_agustus1 = realisasibulan8_amrnasional24 + realisasibulan8_keamananprodukhewan24;

   var totalTarget_september1 = targetbulan9_amrnasional24 + targetbulan9_keamananprodukhewan24;
   var rataTarget_september1 = totalTarget_september/2;
   var totalTargetFix_september1 = rataTarget_september.toFixed(2);
   var totalRealisasi_september1 = realisasibulan9_amrnasional24 + realisasibulan9_keamananprodukhewan24;

   var totalTarget_oktober1 = targetbulan10_amrnasional24 + targetbulan10_keamananprodukhewan24;
   var rataTarget_oktober1 = totalTarget_oktober/2;
   var totalTargetFix_oktober1 = rataTarget_oktober.toFixed(2);
   var totalRealisasi_oktober1 = realisasibulan10_amrnasional24 + realisasibulan10_keamananprodukhewan24;

   var totalTarget_november1 = targetbulan11_amrnasional24 + targetbulan11_keamananprodukhewan24;
   var rataTarget_november1 = totalTarget_november/2;
   var totalTargetFix_november1 = rataTarget_november.toFixed(2);
   var totalRealisasi_november1 = realisasibulan11_amrnasional24 + realisasibulan11_keamananprodukhewan24;

   var totalTarget_desember1 = targetbulan12_amrnasional24 + targetbulan12_keamananprodukhewan24;
   var rataTarget_desember1 = totalTarget_desember/2;
   var totalTargetFix_desember1 = rataTarget_desember.toFixed(2);
   var totalRealisasi_desember1 = realisasibulan12_amrnasional24 + realisasibulan12_keamananprodukhewan24;


   var totalTarget_tampil_keamananproduk = parseFloat(totalTargetFix_januari1) + parseFloat(totalTargetFix_februari1) + parseFloat(totalTargetFix_maret1) + parseFloat(totalTargetFix_april1) + parseFloat(totalTargetFix_mei1) + parseFloat(totalTargetFix_juni1) + parseFloat(totalTargetFix_juli1) + parseFloat(totalTargetFix_agustus1) + parseFloat(totalTargetFix_september1) + parseFloat(totalTargetFix_oktober1) + parseFloat(totalTargetFix_november1) + parseFloat(totalTargetFix_desember1);
   
   var totalTarget_tampil_keamananprodukFix = parseInt(tampil_totalTarget_Amrnasional24) + parseInt(tampil_totalTarget_Keamananprodukhewan24);

   var totalRealisasi_tampil_kemananproduk = totalRealisasi_januari1 + totalRealisasi_februari1 + totalRealisasi_maret1 + totalRealisasi_april1 + totalRealisasi_mei1 + totalRealisasi_juni1 + totalRealisasi_juli1 + totalRealisasi_agustus1 + totalRealisasi_september1 + totalRealisasi_oktober1 + totalRealisasi_november1 + totalRealisasi_desember1;
   var persentase_awal_kemananproduk  = (parseInt(totalRealisasi_tampil_kemananproduk) / parseInt(totalTarget_tampil_keamananprodukFix)) * 100;
   var persentase_tampil_kemananproduk  = persentase_awal_kemananproduk.toFixed(2) + '%'



</script>


{{-- SCRIPT AGGARAN --}}
<script>
  var data_pengendalianpenyakit = {!!json_encode($data_pengendalianpenyakit -> toArray()) !!};
  var data_penyediaanbenih = {!!json_encode($data_penyediaanbenih -> toArray()) !!};
  var data_kesehatanventeriner = {!!json_encode($data_kesehatanventeriner -> toArray()) !!};
  var data_dukunganmanajemen = {!!json_encode($data_dukunganmanajemen -> toArray()) !!};

  console.log(data_pengendalianpenyakit);

  var total_Target_Pengendalianpenyakit = 0;
  var total_Akrual_Pengendalianpenyakit = 0;
  var total_Sp2d_Pengendalianpenyakit = 0;

  var total_Target_Penyediaanbenih = 0;
  var total_Akrual_Penyediaanbenih = 0;
  var total_Sp2d_Penyediaanbenih = 0;

  var total_Target_Kesehatanventeriner = 0;
  var total_Akrual_Kesehatanventeriner = 0;
  var total_Sp2d_Kesehatanventeriner = 0;

  var total_Target_Dukunganmanajemen = 0;
  var total_Akrual_Dukunganmanajemen = 0
  var total_Sp2d_Dukunganmanajemen = 0
  

  for (let index = 0; index < data_pengendalianpenyakit.length; index++) {
    var Target_Pengendalianpenyakit = parseInt(data_pengendalianpenyakit[index].Target);
    var Akrual_Pengendalianpenyakit = parseInt(data_pengendalianpenyakit[index].akrual);
    var Sp2d_Pengendalianpenyakit = parseInt(data_pengendalianpenyakit[index].sp2d);
    total_Target_Pengendalianpenyakit += Target_Pengendalianpenyakit;
    total_Akrual_Pengendalianpenyakit += Akrual_Pengendalianpenyakit;
    total_Sp2d_Pengendalianpenyakit += Sp2d_Pengendalianpenyakit;
  }

  for (let index = 0; index < data_penyediaanbenih.length; index++) {
    var Target_Penyediaanbenih = parseInt(data_penyediaanbenih[index].Target);
    var Akrual_Penyediaanbenih = parseInt(data_penyediaanbenih[index].akrual);
    var Sp2d_Penyediaanbenih = parseInt(data_penyediaanbenih[index].sp2d);
    total_Target_Penyediaanbenih += Target_Penyediaanbenih;
    total_Akrual_Penyediaanbenih += Akrual_Penyediaanbenih;
    total_Sp2d_Penyediaanbenih += Sp2d_Penyediaanbenih;
  }

  for (let index = 0; index < data_kesehatanventeriner.length; index++) {
    var Target_Kesehatanventeriner = parseInt(data_kesehatanventeriner[index].Target);
    var Akrual_Kesehatanventeriner  = parseInt(data_kesehatanventeriner[index].akrual);
    var Sp2d_Kesehatanventeriner = parseInt(data_kesehatanventeriner[index].sp2d);
    total_Target_Kesehatanventeriner  += Target_Kesehatanventeriner ;
    total_Akrual_Kesehatanventeriner  += Akrual_Kesehatanventeriner ;
    total_Sp2d_Kesehatanventeriner  += Sp2d_Kesehatanventeriner ;
  }


  for (let index = 0; index < data_dukunganmanajemen.length; index++) {
    var Target_Dukunganmanajemen = parseInt(data_dukunganmanajemen[index].Target);
    var Akrual_Dukunganmanajemen = parseInt(data_dukunganmanajemen[index].akrual);
    var Sp2d_Dukunganmanajemen = parseInt(data_dukunganmanajemen[index].sp2d);
    total_Target_Dukunganmanajemen += Target_Dukunganmanajemen;
    total_Akrual_Dukunganmanajemen += Akrual_Dukunganmanajemen;
    total_Sp2d_Dukunganmanajemen += Sp2d_Dukunganmanajemen;
  }

  function formatRupiah(nilai) {
    var number_string = nilai.toString(),
      sisa = number_string.length % 3,
      rupiah = number_string.substr(0, sisa),
      ribuan = number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    return rupiah;
  }


  var rata_totalTarget_Pengendalianpenyakit = total_Target_Pengendalianpenyakit / 12;
  var rata_totalTarget_Penyediaanbenih = total_Target_Penyediaanbenih / 12;
  var rata_totalTarget_Kesehatanventeriner = total_Target_Kesehatanventeriner / 12;
  var rata_totalTarget_Dukunganmanajemen = total_Target_Dukunganmanajemen / 12;


  var tampil_totalTarget_Pengendalianpenyakit = formatRupiah(rata_totalTarget_Pengendalianpenyakit);
  var tampil_totalAkrual_Pengendalianpenyakit = formatRupiah(total_Akrual_Pengendalianpenyakit);
  var tampil_totalSp2d_Pengendalianpenyakit = formatRupiah(total_Sp2d_Pengendalianpenyakit);
  var tampil_Persentase_Akrual_Pengendalianpenyakit = (parseInt(total_Akrual_Pengendalianpenyakit) / parseInt(rata_totalTarget_Pengendalianpenyakit)) * 100;
  var tampil_PersentaseFix_AkrualPengendalianpenyakit = tampil_Persentase_Akrual_Pengendalianpenyakit.toFixed(2) + ' %';
  var tampil_Persentase_Sp2d_Pengendalianpenyakit = (parseInt(total_Sp2d_Pengendalianpenyakit) / parseInt(rata_totalTarget_Pengendalianpenyakit)) * 100;
  var tampil_PersentaseFix_Sp2dPengendalianpenyakit = tampil_Persentase_Sp2d_Pengendalianpenyakit.toFixed(2) + ' %';

  var tampil_totalTarget_Penyediaanbenih = formatRupiah(rata_totalTarget_Penyediaanbenih);
  var tampil_totalAkrual_Penyediaanbenih = formatRupiah(total_Akrual_Penyediaanbenih);
  var tampil_totalSp2d_Penyediaanbenih = formatRupiah(total_Sp2d_Penyediaanbenih);
  var tampil_Persentase_Akrual_Penyediaanbenih = (parseInt(total_Akrual_Penyediaanbenih) / parseInt(rata_totalTarget_Penyediaanbenih)) * 100;
  var tampil_PersentaseFix_AkrualPenyediaanbenih = tampil_Persentase_Akrual_Penyediaanbenih.toFixed(2) + ' %';
  var tampil_Persentase_Sp2d_Penyediaanbenih = (parseInt(total_Sp2d_Penyediaanbenih) / parseInt(rata_totalTarget_Penyediaanbenih)) * 100;
  var tampil_PersentaseFix_Sp2dPenyediaanbenih = tampil_Persentase_Sp2d_Penyediaanbenih.toFixed(2) + ' %';

  var tampil_totalTarget_Kesehatanventeriner = formatRupiah(rata_totalTarget_Kesehatanventeriner);
  var tampil_totalAkrual_Kesehatanventeriner = formatRupiah(total_Akrual_Kesehatanventeriner);
  var tampil_totalSp2d_Kesehatanventeriner = formatRupiah(total_Sp2d_Kesehatanventeriner);
  var tampil_Persentase_Akrual_Kesehatanventeriner = (parseInt(total_Akrual_Kesehatanventeriner) / parseInt(rata_totalTarget_Kesehatanventeriner)) * 100;
  var tampil_PersentaseFix_AkrualKesehatanventeriner = tampil_Persentase_Akrual_Kesehatanventeriner.toFixed(2) + ' %';
  var tampil_Persentase_Sp2d_Kesehatanventeriner = (parseInt(total_Sp2d_Kesehatanventeriner) / parseInt(rata_totalTarget_Kesehatanventeriner)) * 100;
  var tampil_PersentaseFix_Sp2dKesehatanventeriner = tampil_Persentase_Sp2d_Kesehatanventeriner.toFixed(2) + ' %';

  var tampil_totalTarget_Dukunganmanajemen = formatRupiah(rata_totalTarget_Dukunganmanajemen);
  var tampil_totalAkrual_Dukunganmanajemen = formatRupiah(total_Akrual_Dukunganmanajemen);
  var tampil_totalSp2d_Dukunganmanajemen = formatRupiah(total_Sp2d_Dukunganmanajemen);
  var tampil_Persentase_Akrual_Dukunganmanajemen = (parseInt(total_Akrual_Dukunganmanajemen) / parseInt(rata_totalTarget_Dukunganmanajemen)) * 100;
  var tampil_PersentaseFix_AkrualDukunganmanajemen = tampil_Persentase_Akrual_Dukunganmanajemen.toFixed(2) + ' %';
  var tampil_Persentase_Sp2d_Dukunganmanajemen = (parseInt(total_Sp2d_Dukunganmanajemen) / parseInt(rata_totalTarget_Dukunganmanajemen)) * 100;
  var tampil_PersentaseFix_Sp2dDukunganmanajemen = tampil_Persentase_Sp2d_Dukunganmanajemen.toFixed(2) + ' %';


  // var JumlahTarget_Total = total_Target_Pengendalianpenyakit + total_Target_Penyediaanbenih + total_Target_Kesehatanventeriner + total_Target_Dukunganmanajemen;
  var JumlahTarget_Total = rata_totalTarget_Pengendalianpenyakit + rata_totalTarget_Penyediaanbenih + rata_totalTarget_Kesehatanventeriner + rata_totalTarget_Dukunganmanajemen;
  var JumlahAkrual_Total = total_Akrual_Pengendalianpenyakit + total_Akrual_Penyediaanbenih + total_Akrual_Kesehatanventeriner + total_Akrual_Dukunganmanajemen;
  var JumlahSp2d_Total = total_Sp2d_Pengendalianpenyakit + total_Sp2d_Penyediaanbenih + total_Sp2d_Kesehatanventeriner + total_Sp2d_Dukunganmanajemen;
  var tampil_JumlahTarget_Total = formatRupiah(JumlahTarget_Total);
  var tampil_JumlahAkrual_Total = formatRupiah(JumlahAkrual_Total);
  var tampil_JumlahSp2d_Total = formatRupiah(JumlahSp2d_Total);
  var tampil_Persentase_TotalAkrual = (parseInt(JumlahAkrual_Total) / parseInt(JumlahTarget_Total)) * 100;
  var tampil_PersentaseFix_TotalAkrual = tampil_Persentase_TotalAkrual.toFixed(2) + ' %';
  var tampil_Persentase_TotalSp2d = (parseInt(JumlahSp2d_Total) / parseInt(JumlahTarget_Total)) * 100;
  var tampil_PersentaseFix_TotalSp2d = tampil_Persentase_TotalSp2d.toFixed(2) + ' %';

  // console.log(JumlahTarget_Total, JumlahRealisasi_Total);
</script>

{{-- DATA SDM FILTERING --}}
{{-- --}}
<script>
  var data_sdm = {!!json_encode($data_sdm -> toArray()) !!};
  var total_Pegawai = data_sdm.length;
  var total_Jenis_PNS = 0;
  var total_Jenis_PPPK = 0;
  var total_Jenis_THL = 0;
  var total_Jenis_OUTSOURCING = 0;

  var total_Sebaran_BagianUmum = 0;
  var total_Sebaran_KelompokSubstansi = 0;
  var total_Sebaran_KelompokJafung = 0;


  var total_Pendidikan_S3 = 0;
  var total_Pendidikan_S2 = 0;
  var total_Pendidikan_S1 = 0;
  var total_Pendidikan_D4 = 0;
  var total_Pendidikan_D3 = 0;
  var total_Pendidikan_SMA = 0;
  var total_Pendidikan_SMP = 0;
  var total_Pendidikan_SD = 0;


  for (let index = 0; index < data_sdm.length; index++) {
    // BERDASARKAN JENIS
    if (data_sdm[index].Jenis == 'PNS') {
      total_Jenis_PNS += 1;
    } else if (data_sdm[index].Jenis == 'PPPK') {
      total_Jenis_PPPK += 1;
    } else if (data_sdm[index].Jenis == 'THL') {
      total_Jenis_THL += 1;
    } else if (data_sdm[index].Jenis == 'OUTSOURCING') {
      total_Jenis_OUTSOURCING += 1;
    }
  }

  for (let index = 0; index < data_sdm.length; index++) {
    // console.log(data_sdm[index].Sebaran);
    // BERDASARKAN SEBARAN
    if (data_sdm[index].Sebaran == 'Bagian Umum') {
      total_Sebaran_BagianUmum += 1;
    } else if (data_sdm[index].Sebaran == 'Kelompok Substansi') {
      total_Sebaran_KelompokSubstansi += 1;
    } else if (data_sdm[index].Sebaran == 'Kelompok JAFUNG MEDIK PARAMEDIK') {
      total_Sebaran_KelompokJafung += 1;
    }
  }

  for (let index = 0; index < data_sdm.length; index++) {
    console.log(data_sdm[index].Pendidikan);
    // BERDASARKAN PENDIDIKAN
    if (data_sdm[index].Pendidikan == 'S3') {
      total_Pendidikan_S3 += 1;
    } else if (data_sdm[index].Pendidikan == 'S2') {
      total_Pendidikan_S2 += 1;
    } else if (data_sdm[index].Pendidikan == 'S1') {
      total_Pendidikan_S1 += 1;
    } else if (data_sdm[index].Pendidikan == 'D4') {
      total_Pendidikan_D4 += 1;
    } else if (data_sdm[index].Pendidikan == 'D3') {
      total_Pendidikan_D3 += 1;
    } else if (data_sdm[index].Pendidikan == 'SLTA/SMK') {
      total_Pendidikan_SMA += 1;
    } else if (data_sdm[index].Pendidikan == 'SLTP') {
      total_Pendidikan_SMP += 1;
    } else if (data_sdm[index].Pendidikan == 'SD') {
      total_Pendidikan_SD += 1;
    }
  }
</script>

{{-- SEARCHING --}}
<script>
  function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("TabelPengnyakit5Year");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>