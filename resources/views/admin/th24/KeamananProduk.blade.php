@extends('admin/th24/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header mb-5">
    <h1 class="text-uppercase">
      Keamanan Produk dan Mutu Produk Hewan tahun
      <?php echo $tahun?>
    </h1>
    <p>Update at :
      <?php echo $tgl=date('l, d-m-Y');;?>
    </p>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h5>
              <?php
              echo "<script>document.writeln(totalTarget_tampilFix);</script>";
              ?>
            </h5>
            <p>TARGET TAHUNAN</p>
            <hr>
            {{-- <hr>
            <br>
            <br> --}}
          </div>
          <div class="icon">
            <i class="ion ion-pin"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h5>
              <?php
              echo "<script>document.writeln(totalRealisasi_tampil);</script>";
              ?>
            </h5>
            <p>REALISASI KEAMANAN PRODUK & MUTU PRODUK</p>
            <hr>
            {{-- <h5>Rp. 13.832.000.000</h5>
            <p>PIUTANG PNBP PENJUALAN</p>
            <hr>
            <h5>Rp. 13.832.000.000</h5>
            <p>TOTAL PNBP PENJUALAN</p> --}}
          </div>
          <div class="icon">
            <i class="ion ion-checkmark"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h5>
              <?php
              echo "<script>document.writeln(persentase_tampil);</script>";
              ?>
            </h5>
            <p>PERSENTASE REALISASI</p>
            <hr>
            {{-- <h5>12,91 %</h5>
            <p>PERSENTASE PIUTANG</p>
            <hr>
            <h5>12,91 %</h5>
            <p>PERSENTASE TOTAL</p> --}}
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-6">
                  <h5>Data Keamanan Produk &  Mutu Produk Hewan Per Bulan</h5>
              </div>
              <div class="col-lg-6">
                <div class="float-end">
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'adminepi@gmail.com')
                  <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edittarget">
                    Edit Target
                  </button>
                  @endif
                  {{-- <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah"  hidden>
                    Tambah
                  </button> --}}
                </div>
              </div>
              <div class="col-lg-6">
                {{-- <div class="d-grid">
                  <button class="btn btn-warning text-light">
                    Edit
                  </button>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <!--<th>Target</th>-->
                    <th>Realisasi</th>
                    {{-- <th>Aksi</th> --}}
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Januari</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_januari);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_januari);</script>";?></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Febuari</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_februari);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_februari);</script>";?></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Maret</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_maret);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_maret);</script>";?></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>April</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_april);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_april);</script>";?></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Mei</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_mei);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_mei);</script>";?></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Juni</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_juni);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_juni);</script>";?></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Juli</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_juli);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_juli);</script>";?></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Agustus</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_agustus);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_agustus);</script>";?></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>September</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_september);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_september);</script>";?></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Oktober</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_oktober);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_oktober);</script>";?></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>November</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_november);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_november);</script>";?></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Desember</td>
                    <!--<td><?php echo "<script>document.writeln(totalTargetFix_desember);</script>";?></td>-->
                    <td><?php echo "<script>document.writeln(totalRealisasi_desember);</script>";?></td>
                  </tr>
            </div>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header">
          <h5>Grafik Realisasi Keamanan Produk &  Mutu Produk Hewan</h5>
        </div>
        <div class="card-body">
          <canvas id="myChart" width="100" height="50"></canvas>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6">
              <h5>Jenis Keamanan Produk dan Mutu Produk Hewan </h5>
            </div>
            {{-- <div class="col-lg-6">
              <div class="float-end">
                <a href="/DetailPenyakitHewan">
                  <button class="btn btn-success btn-sm">
                    Detail
                  </button>
                </a>
              </div>
            </div> --}}
            <div class="col-lg-6">
              {{-- <div class="d-grid">
                <button class="btn btn-warning text-light">
                  Edit
                </button>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Target</th>
                  <th>Realisasi</th>
                  <th>Persentase</th>
                  {{-- <th>Aksi</th> --}}
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="Keamanan_ProdukHewan">Keamanan Produk Hewan</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Keamananprodukhewan23);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Keamananprodukhewan23);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Keamananprodukhewan23);</script>";?></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="AMR_Nasional">AMR Nasional</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Amrnasional23);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Amrnasional23);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Amrnasional23);</script>";?></td>
                </tr>
          </div>
          </tbody>
          </table>
        </div>
      </div>
    </div>
</div>


<!--modal tambah -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('KeamananProduk23') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Bulan">
                <option value="">Pilih Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Febuari">Febuari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>

              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Target</label>
            <div class="col-xl-10">
              <input type="text" name="Target" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Realisasi</label>
            <div class="col-xl-10">
              <input type="text" name="Realisasi" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-success float-end">Simpan</button>
        </form>
      </div>
      {{-- <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div> --}}
    </div>
  </div>
</div>

<!--modal edit jumlah target -->
<div class="modal fade" id="modal_edittarget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Jumlah Target
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('KeamananProduk23/1') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Target</label>
            <div class="col-xl-10">
              <input hidden type="text" name="forUpdateAll" class="form-control" value="forUpdateAllValue">
              <input type="text" name="valueUpdateAll" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-success float-end">Simpan</button>
        </form>
      </div>
      {{-- <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div> --}}
    </div>
  </div>
</div>

<!--modal edit -->
<div class="modal fade" id="modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Data
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('KeamananProduk23') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
              <input type="text" name="Bulan" class="form-control" id="BulanEdit" value="" readonly>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Target</label>
            <div class="col-xl-10">
              <input type="text" name="Target" class="form-control" id="TargetEdit" value="" readonly>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Realisasi</label>
            <div class="col-xl-10">
              <input type="text" name="Realisasi" class="form-control" id="RealisasiEdit" value="">
            </div>
          </div>
          <button type="submit" class="btn btn-success float-end">Update</button>
        </form>
      </div>
      {{-- <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div> --}}
    </div>
  </div>
</div>

</section>
<!-- /.content -->
</div>

@endsection


{{-- MODAL EDIT --}}

<script>
  //  PENYAKIT AMR NASIONAL
  var data_amrnasional23 = {!! json_encode($data_amrnasional -> toArray())!!};
  var total_Target_Amrnasional23 = 0;
  var total_Realisasi_Amrnasional23 = 0;
  for (let index = 0; index < data_amrnasional23.length; index++) {
    var Target_Amrnasional23 = parseInt(data_amrnasional23[index].Target);
    var Realisasi_Amrnasional23 = parseInt(data_amrnasional23[index].Realisasi);
    total_Target_Amrnasional23 += Target_Amrnasional23;
    total_Realisasi_Amrnasional23 += Realisasi_Amrnasional23;
  }

  var rata_totalTarget_Amrnasional23  = total_Target_Amrnasional23 /12;
  var tampil_totalTarget_Amrnasional23 = String(rata_totalTarget_Amrnasional23);
  var tampil_totalRealisasi_Amrnasional23 = String(total_Realisasi_Amrnasional23);
  // console.log(tampil_totalTarget_Amrnasional23, tampil_totalRealisasi_Amrnasional23)
  var tampil_Persentase = (parseInt(total_Realisasi_Amrnasional23) / parseInt(rata_totalTarget_Amrnasional23)) * 100;
  var tampil_PersentaseFix_Amrnasional23 = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT AMR NASIONAL PER BULAN 
  var targetbulan1_amrnasional23 = parseInt(data_amrnasional23[0].Target);
  var realisasibulan1_amrnasional23 = parseInt(data_amrnasional23[0].Realisasi);
  var targetbulan2_amrnasional23 = parseInt(data_amrnasional23[1].Target);
  var realisasibulan2_amrnasional23 = parseInt(data_amrnasional23[1].Realisasi);
  var targetbulan3_amrnasional23 = parseInt(data_amrnasional23[2].Target);
  var realisasibulan3_amrnasional23 = parseInt(data_amrnasional23[2].Realisasi);
  var targetbulan4_amrnasional23 = parseInt(data_amrnasional23[3].Target);
  var realisasibulan4_amrnasional23 = parseInt(data_amrnasional23[3].Realisasi);
  var targetbulan5_amrnasional23 = parseInt(data_amrnasional23[4].Target);
  var realisasibulan5_amrnasional23 = parseInt(data_amrnasional23[4].Realisasi);
  var targetbulan6_amrnasional23 = parseInt(data_amrnasional23[5].Target);
  var realisasibulan6_amrnasional23 = parseInt(data_amrnasional23[5].Realisasi);
  var targetbulan7_amrnasional23 = parseInt(data_amrnasional23[6].Target);
  var realisasibulan7_amrnasional23 = parseInt(data_amrnasional23[6].Realisasi);
  var targetbulan8_amrnasional23 = parseInt(data_amrnasional23[7].Target);
  var realisasibulan8_amrnasional23 = parseInt(data_amrnasional23[7].Realisasi);
  var targetbulan9_amrnasional23 = parseInt(data_amrnasional23[8].Target);
  var realisasibulan9_amrnasional23 = parseInt(data_amrnasional23[8].Realisasi);
  var targetbulan10_amrnasional23 = parseInt(data_amrnasional23[9].Target);
  var realisasibulan10_amrnasional23 = parseInt(data_amrnasional23[9].Realisasi);
  var targetbulan11_amrnasional23 = parseInt(data_amrnasional23[10].Target);
  var realisasibulan11_amrnasional23 = parseInt(data_amrnasional23[10].Realisasi);
  var targetbulan12_amrnasional23 = parseInt(data_amrnasional23[11].Target);
  var realisasibulan12_amrnasional23 = parseInt(data_amrnasional23[11].Realisasi);

  //  PENYAKIT KEAMANAN PRODUK HEWAN
  var data_keamananprodukhewan23 = {!! json_encode($data_keamananprodukhewan -> toArray())!!};
  var total_Target_Keamananprodukhewan23 = 0;
  var total_Realisasi_Keamananprodukhewan23 = 0;
  for (let index = 0; index < data_keamananprodukhewan23.length; index++) {
    var Target_Keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[index].Target);
    var Realisasi_Keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[index].Realisasi);
    total_Target_Keamananprodukhewan23 += Target_Keamananprodukhewan23;
    total_Realisasi_Keamananprodukhewan23 += Realisasi_Keamananprodukhewan23;
  }

  var rata_totalTarget_Keamananprodukhewan23  = total_Target_Keamananprodukhewan23 /12;
  var tampil_totalTarget_Keamananprodukhewan23 = String(rata_totalTarget_Keamananprodukhewan23);
  var tampil_totalRealisasi_Keamananprodukhewan23 = String(total_Realisasi_Keamananprodukhewan23);
  // console.log(tampil_totalTarget_Keamananprodukhewan23, tampil_totalRealisasi_Keamananprodukhewan23)
  var tampil_Persentase = (parseInt(total_Realisasi_Keamananprodukhewan23) / parseInt(rata_totalTarget_Keamananprodukhewan23)) * 100;
  var tampil_PersentaseFix_Keamananprodukhewan23 = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT KEAMANAN PRODUK HEWAN PER BULAN 
  var targetbulan1_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[0].Target);
  var realisasibulan1_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[0].Realisasi);
  var targetbulan2_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[1].Target);
  var realisasibulan2_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[1].Realisasi);
  var targetbulan3_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[2].Target);
  var realisasibulan3_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[2].Realisasi);
  var targetbulan4_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[3].Target);
  var realisasibulan4_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[3].Realisasi);
  var targetbulan5_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[4].Target);
  var realisasibulan5_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[4].Realisasi);
  var targetbulan6_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[5].Target);
  var realisasibulan6_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[5].Realisasi);
  var targetbulan7_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[6].Target);
  var realisasibulan7_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[6].Realisasi);
  var targetbulan8_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[7].Target);
  var realisasibulan8_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[7].Realisasi);
  var targetbulan9_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[8].Target);
  var realisasibulan9_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[8].Realisasi);
  var targetbulan10_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[9].Target);
  var realisasibulan10_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[9].Realisasi);
  var targetbulan11_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[10].Target);
  var realisasibulan11_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[10].Realisasi);
  var targetbulan12_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[11].Target);
  var realisasibulan12_keamananprodukhewan23 = parseInt(data_keamananprodukhewan23[11].Realisasi);


  // TOTAL PERBULAN 
     var totalTarget_januari = targetbulan1_amrnasional23 + targetbulan1_keamananprodukhewan23;
     var rataTarget_januari = totalTarget_januari/2;
     var totalTargetFix_januari = rataTarget_januari.toFixed(2);
     var totalRealisasi_januari = realisasibulan1_amrnasional23 + realisasibulan1_keamananprodukhewan23;
 
     var totalTarget_februari = targetbulan2_amrnasional23 + targetbulan2_keamananprodukhewan23;
     var rataTarget_februari = totalTarget_februari/2;
     var totalTargetFix_februari = rataTarget_februari.toFixed(2);
     var totalRealisasi_februari = realisasibulan2_amrnasional23 + realisasibulan2_keamananprodukhewan23;
 
     var totalTarget_maret = targetbulan3_amrnasional23 + targetbulan3_keamananprodukhewan23;
     var rataTarget_maret = totalTarget_maret/2;
     var totalTargetFix_maret = rataTarget_maret.toFixed(2);
     var totalRealisasi_maret = realisasibulan3_amrnasional23 + realisasibulan3_keamananprodukhewan23;
 
     var totalTarget_april = targetbulan4_amrnasional23 + targetbulan4_keamananprodukhewan23;
     var rataTarget_april = totalTarget_april/2;
     var totalTargetFix_april = rataTarget_april.toFixed(2);
     var totalRealisasi_april = realisasibulan4_amrnasional23 + realisasibulan4_keamananprodukhewan23;
     
     var totalTarget_mei = targetbulan5_amrnasional23 + targetbulan5_keamananprodukhewan23;
     var rataTarget_mei = totalTarget_mei/2;
     var totalTargetFix_mei = rataTarget_mei.toFixed(2);
     var totalRealisasi_mei = realisasibulan5_amrnasional23 + realisasibulan5_keamananprodukhewan23;
     
     var totalTarget_juni = targetbulan6_amrnasional23 + targetbulan6_keamananprodukhewan23;
     var rataTarget_juni = totalTarget_juni/2;
     var totalTargetFix_juni = rataTarget_juni.toFixed(2);
     var totalRealisasi_juni = realisasibulan6_amrnasional23 + realisasibulan6_keamananprodukhewan23;
 
     var totalTarget_juli = targetbulan7_amrnasional23 + targetbulan7_keamananprodukhewan23;
     var rataTarget_juli = totalTarget_juli/2;
     var totalTargetFix_juli = rataTarget_juli.toFixed(2);
     var totalRealisasi_juli = realisasibulan7_amrnasional23 + realisasibulan7_keamananprodukhewan23;
 
     var totalTarget_agustus = targetbulan8_amrnasional23 + targetbulan8_keamananprodukhewan23;
     var rataTarget_agustus = totalTarget_agustus/2;
     var totalTargetFix_agustus = rataTarget_agustus.toFixed(2);
     var totalRealisasi_agustus = realisasibulan8_amrnasional23 + realisasibulan8_keamananprodukhewan23;
 
     var totalTarget_september = targetbulan9_amrnasional23 + targetbulan9_keamananprodukhewan23;
     var rataTarget_september = totalTarget_september/2;
     var totalTargetFix_september = rataTarget_september.toFixed(2);
     var totalRealisasi_september = realisasibulan9_amrnasional23 + realisasibulan9_keamananprodukhewan23;
 
     var totalTarget_oktober = targetbulan10_amrnasional23 + targetbulan10_keamananprodukhewan23;
     var rataTarget_oktober = totalTarget_oktober/2;
     var totalTargetFix_oktober = rataTarget_oktober.toFixed(2);
     var totalRealisasi_oktober = realisasibulan10_amrnasional23 + realisasibulan10_keamananprodukhewan23;
 
     var totalTarget_november = targetbulan11_amrnasional23 + targetbulan11_keamananprodukhewan23;
     var rataTarget_november = totalTarget_november/2;
     var totalTargetFix_november = rataTarget_november.toFixed(2);
     var totalRealisasi_november = realisasibulan11_amrnasional23 + realisasibulan11_keamananprodukhewan23;
 
     var totalTarget_desember = targetbulan12_amrnasional23 + targetbulan12_keamananprodukhewan23;
     var rataTarget_desember = totalTarget_desember/2;
     var totalTargetFix_desember = rataTarget_desember.toFixed(2);
     var totalRealisasi_desember =realisasibulan12_amrnasional23 + realisasibulan12_keamananprodukhewan23;
 
 
     var totalTarget_tampil = parseFloat(totalTargetFix_januari) + parseFloat(totalTargetFix_februari) + parseFloat(totalTargetFix_maret) + parseFloat(totalTargetFix_april) + parseFloat(totalTargetFix_mei) + parseFloat(totalTargetFix_juni) + parseFloat(totalTargetFix_juli) + parseFloat(totalTargetFix_agustus) + parseFloat(totalTargetFix_september) + parseFloat(totalTargetFix_oktober) + parseFloat(totalTargetFix_november) + parseFloat(totalTargetFix_desember);
     
     // var totalTarget_tampilFix = totalTarget_tampil.toFixed(2);
     var totalTarget_tampilFix = parseInt(tampil_totalTarget_Amrnasional23) + parseInt(tampil_totalTarget_Keamananprodukhewan23);
 
     var totalRealisasi_tampil = totalRealisasi_januari + totalRealisasi_februari + totalRealisasi_maret + totalRealisasi_april + totalRealisasi_mei + totalRealisasi_juni + totalRealisasi_juli + totalRealisasi_agustus + totalRealisasi_september + totalRealisasi_oktober + totalRealisasi_november + totalRealisasi_desember;
     var persentase_awal = (parseInt(totalRealisasi_tampil) / parseInt(totalTarget_tampilFix)) * 100;
     var persentase_tampil = persentase_awal.toFixed(2) + '%'




     document.addEventListener("DOMContentLoaded", function (event) {
       var Januari = parseInt(totalRealisasi_januari);
       var Febuari = Januari + parseInt(totalRealisasi_februari);
       var Maret = Febuari + parseInt(totalRealisasi_maret);
       var April = Maret + parseInt(totalRealisasi_april);
       var Mei = April + parseInt(totalRealisasi_mei);
       var Juni = Mei + parseInt(totalRealisasi_juni);
       var Juli = Juni + parseInt(totalRealisasi_juli);
       var Agustus = Juli + parseInt(totalRealisasi_agustus);
       var September = Agustus + parseInt(totalRealisasi_september);
       var Oktober = September + parseInt(totalRealisasi_oktober);
       var November = Oktober + parseInt(totalRealisasi_november);
       var Desember = November + parseInt(totalRealisasi_desember);
 
       var ctx = document.getElementById('myChart').getContext('2d');
       var chart_jalur = new Chart(ctx, {
         type: 'bar',
         data: {
           labels: ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
           datasets: [{
             label: '',
             data: [Januari, Febuari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember],
             backgroundColor: [
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
             ],
             borderColor: [
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
               'rgba(13,110,253, 1)',
             ],
             borderWidth: 1,
           }]
         },
         plugins: [ChartDataLabels],
         options: {
           scales: {
             y: {
               beginAtZero: true
             }
           },
           plugins: {
             datalabels: {
               color: '#ffff'
             },
             legend: {
               display: false
             }
           },
         }
       });
     });
</script>

