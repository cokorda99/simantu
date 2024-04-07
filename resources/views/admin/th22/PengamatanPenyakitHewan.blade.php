@extends('admin/th22/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header mb-5">
    <h1 class="text-uppercase">
      PENGAMATAN DAN IDENTIFIKASI PENYAKIT HEWAN TAHUN
      <?php ?>
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
            {{--
            <hr>
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
            <p>REALISASI PENGAMATAN & IDENTIFIKASI PENYAKIT</p>
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
              <div class="col-lg-12">
                <h5>Data Pengamatan & Identifikasi Penyakit Hewan </h5>
              </div>
              <div class="col-lg-6">
                <div class="float-end">
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
          <h5>Grafik Realisasi Pengamatan & Identifikasi Penyakit Hewan</h5>
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
              <h5>Data Pengamatan & Identifikasi Penyakit Hewan </h5>
            </div>
            {{-- <div class="col-lg-6">
              <div class="float-end">
                <a href="DetailPenyakitHewan">
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
                  <td><a href="Penyakit_Pmk">PMK</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Pmk);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Pmk);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Pmk);</script>";?></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="Penyakit_Rabies">Rabies</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Rabies);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Rabies);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Rabies);</script>";?></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="Penyakit_Avian">Avian Influenza</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Avian);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Avian);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Avian);</script>";?></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><a href="Penyakit_Brucellosis">Brucellosis</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Brucellosis);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Brucellosis);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Brucellosis);</script>";?></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><a href="Penyakit_Anthraxs">Anthrax</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Anthrax);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Anthrax);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Anthrax);</script>";?></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><a href="Penyakit_HogCholera">Hog Cholera</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Hcholera);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Hcholera);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Hcholera);</script>";?></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><a href="Penyakit_HewanLaninnya">Penyakit Hewan Lainnya</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Penyakitlain);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Penyakitlain);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Penyakitlain);</script>";?></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><a href="Penyakit_Asf">ASF</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Asf);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Asf);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Asf);</script>";?></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><a href="Penyakit_Viral">Penyakit Viral Lainnya</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Penyakitviral);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Penyakitviral);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Penyakitviral);</script>";?></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><a href="Penyakit_Bakterial">Penyakit Bakterial Lainnya</a></td>
                  <td><?php echo "<script>document.writeln(tampil_totalTarget_Penyakitbakterial);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_totalRealisasi_Penyakitbakterial);</script>";?></td>
                  <td><?php echo "<script>document.writeln(tampil_PersentaseFix_Penyakitbakterial);</script>";?></td>
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
        <form action="{{ url('PengamatanPenyakitHewan') }}" method="POST">
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
        <form action="{{ url('PengamatanPenyakitHewan') }}" method="POST" id="editForm">
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
              <input type="text" name="Target" class="form-control" id="TargetEdit" value="">
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
  var data_piphewan = {!! json_encode($data_piphewan -> toArray())!!};
  function updateData(id) {
    var result = data_piphewan.filter(obj => obj.id === id)[0];
    console.log(result.Bulan);
    document.getElementById("BulanEdit").value = result.Bulan;
    document.getElementById("TargetEdit").value = result.Target;
    document.getElementById("RealisasiEdit").value = result.Realisasi;

    $('#editForm').attr('action', '/PengamatanPenyakitHewan/' + id)
  }
</script>


{{-- SCRIPT BAGIAN ATAS --}}
<script>
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


    //  PENYAKIT _PENYAKIT LAIN
    var data_penyakitlain = {!! json_encode($data_penyakitlain -> toArray())!!};
  var total_Target_Penyakitlain = 0;
  var total_Realisasi_Penyakitlain = 0;
  for (let index = 0; index < data_penyakitlain.length; index++) {
    var Target_Penyakitlain = parseInt(data_penyakitlain[index].Target);
    var Realisasi_Penyakitlain = parseInt(data_penyakitlain[index].Realisasi);
    total_Target_Penyakitlain += Target_Penyakitlain;
    total_Realisasi_Penyakitlain += Realisasi_Penyakitlain;
  }

  var rata_totalTarget_Penyakitlain  = total_Target_Penyakitlain /12;
  var tampil_totalTarget_Penyakitlain = String(rata_totalTarget_Penyakitlain);
  var tampil_totalRealisasi_Penyakitlain = String(total_Realisasi_Penyakitlain);
  // console.log(tampil_totalTarget_Penyakitlain, tampil_totalRealisasi_Penyakitlain)
  var tampil_Persentase = (parseInt(total_Realisasi_Penyakitlain) / parseInt(rata_totalTarget_Penyakitlain)) * 100;
  var tampil_PersentaseFix_Penyakitlain = tampil_Persentase.toFixed(2) + ' %'

  // PENYAKIT _PENYAKIT LAIN PER BULAN 
  var targetbulan1_penyakitlain = parseInt(data_penyakitlain[0].Target);
  var realisasibulan1_penyakitlain = parseInt(data_penyakitlain[0].Realisasi);
  var targetbulan2_penyakitlain = parseInt(data_penyakitlain[1].Target);
  var realisasibulan2_penyakitlain = parseInt(data_penyakitlain[1].Realisasi);
  var targetbulan3_penyakitlain = parseInt(data_penyakitlain[2].Target);
  var realisasibulan3_penyakitlain = parseInt(data_penyakitlain[2].Realisasi);
  var targetbulan4_penyakitlain = parseInt(data_penyakitlain[3].Target);
  var realisasibulan4_penyakitlain = parseInt(data_penyakitlain[3].Realisasi);
  var targetbulan5_penyakitlain = parseInt(data_penyakitlain[4].Target);
  var realisasibulan5_penyakitlain = parseInt(data_penyakitlain[4].Realisasi);
  var targetbulan6_penyakitlain = parseInt(data_penyakitlain[5].Target);
  var realisasibulan6_penyakitlain = parseInt(data_penyakitlain[5].Realisasi);
  var targetbulan7_penyakitlain = parseInt(data_penyakitlain[6].Target);
  var realisasibulan7_penyakitlain = parseInt(data_penyakitlain[6].Realisasi);
  var targetbulan8_penyakitlain = parseInt(data_penyakitlain[7].Target);
  var realisasibulan8_penyakitlain = parseInt(data_penyakitlain[7].Realisasi);
  var targetbulan9_penyakitlain = parseInt(data_penyakitlain[8].Target);
  var realisasibulan9_penyakitlain = parseInt(data_penyakitlain[8].Realisasi);
  var targetbulan10_penyakitlain = parseInt(data_penyakitlain[9].Target);
  var realisasibulan10_penyakitlain = parseInt(data_penyakitlain[9].Realisasi);
  var targetbulan11_penyakitlain = parseInt(data_penyakitlain[10].Target);
  var realisasibulan11_penyakitlain = parseInt(data_penyakitlain[10].Realisasi);
  var targetbulan12_penyakitlain = parseInt(data_penyakitlain[11].Target);
  var realisasibulan12_penyakitlain = parseInt(data_penyakitlain[11].Realisasi);

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
  var totalTarget_januari = targetbulan1_rabies + targetbulan1_avian + targetbulan1_brucellosis + targetbulan1_anthrax + targetbulan1_hcholera + targetbulan1_penyakitlain + targetbulan1_asf + targetbulan1_penyakitviral +targetbulan1_penyakitbakterial + targetbulan1_pmk;
  var rataTarget_januari = totalTarget_januari/10;
  var totalTargetFix_januari = rataTarget_januari.toFixed(2);
  var totalRealisasi_januari = realisasibulan1_rabies + realisasibulan1_avian + realisasibulan1_brucellosis + realisasibulan1_anthrax + realisasibulan1_hcholera + realisasibulan1_penyakitlain + realisasibulan1_asf + realisasibulan1_penyakitviral +realisasibulan1_penyakitbakterial + realisasibulan1_pmk;

  var totalTarget_februari = targetbulan2_rabies + targetbulan2_avian + targetbulan2_brucellosis + targetbulan2_anthrax + targetbulan2_hcholera + targetbulan2_penyakitlain + targetbulan2_asf + targetbulan2_penyakitviral +targetbulan2_penyakitbakterial + targetbulan2_pmk;
  var rataTarget_februari = totalTarget_februari/10;
  var totalTargetFix_februari = rataTarget_februari.toFixed(2);
  var totalRealisasi_februari = realisasibulan2_rabies + realisasibulan2_avian + realisasibulan2_brucellosis + realisasibulan2_anthrax + realisasibulan2_hcholera + realisasibulan2_penyakitlain + realisasibulan2_asf + realisasibulan2_penyakitviral +realisasibulan2_penyakitbakterial + realisasibulan2_pmk;

  var totalTarget_maret = targetbulan3_rabies + targetbulan3_avian + targetbulan3_brucellosis + targetbulan3_anthrax + targetbulan3_hcholera + targetbulan3_penyakitlain + targetbulan3_asf + targetbulan3_penyakitviral +targetbulan3_penyakitbakterial + targetbulan3_pmk;
  var rataTarget_maret = totalTarget_maret/10;
  var totalTargetFix_maret = rataTarget_maret.toFixed(2);
  var totalRealisasi_maret = realisasibulan3_rabies + realisasibulan3_avian + realisasibulan3_brucellosis + realisasibulan3_anthrax + realisasibulan3_hcholera + realisasibulan3_penyakitlain + realisasibulan3_asf + realisasibulan3_penyakitviral +realisasibulan3_penyakitbakterial + realisasibulan3_pmk;

  var totalTarget_april = targetbulan4_rabies + targetbulan4_avian + targetbulan4_brucellosis + targetbulan4_anthrax + targetbulan4_hcholera + targetbulan4_penyakitlain + targetbulan4_asf + targetbulan4_penyakitviral +targetbulan4_penyakitbakterial + targetbulan4_pmk;
  var rataTarget_april = totalTarget_april/10;
  var totalTargetFix_april = rataTarget_april.toFixed(2);
  var totalRealisasi_april = realisasibulan4_rabies + realisasibulan4_avian + realisasibulan4_brucellosis + realisasibulan4_anthrax + realisasibulan4_hcholera + realisasibulan4_penyakitlain + realisasibulan4_asf + realisasibulan4_penyakitviral +realisasibulan4_penyakitbakterial + realisasibulan4_pmk;
  
  var totalTarget_mei = targetbulan5_rabies + targetbulan5_avian + targetbulan5_brucellosis + targetbulan5_anthrax + targetbulan5_hcholera + targetbulan5_penyakitlain + targetbulan5_asf + targetbulan5_penyakitviral +targetbulan5_penyakitbakterial + targetbulan5_pmk;
  var rataTarget_mei = totalTarget_mei/10;
  var totalTargetFix_mei = rataTarget_mei.toFixed(2);
  var totalRealisasi_mei = realisasibulan5_rabies + realisasibulan5_avian + realisasibulan5_brucellosis + realisasibulan5_anthrax + realisasibulan5_hcholera + realisasibulan5_penyakitlain + realisasibulan5_asf + realisasibulan5_penyakitviral +realisasibulan5_penyakitbakterial + realisasibulan5_pmk;
  
  var totalTarget_juni = targetbulan6_rabies + targetbulan6_avian + targetbulan6_brucellosis + targetbulan6_anthrax + targetbulan6_hcholera + targetbulan6_penyakitlain + targetbulan6_asf + targetbulan6_penyakitviral +targetbulan6_penyakitbakterial + targetbulan6_pmk;
  var rataTarget_juni = totalTarget_juni/10;
  var totalTargetFix_juni = rataTarget_juni.toFixed(2);
  var totalRealisasi_juni = realisasibulan6_rabies + realisasibulan6_avian + realisasibulan6_brucellosis + realisasibulan6_anthrax + realisasibulan6_hcholera + realisasibulan6_penyakitlain + realisasibulan6_asf + realisasibulan6_penyakitviral +realisasibulan6_penyakitbakterial + realisasibulan6_pmk;

  var totalTarget_juli = targetbulan7_rabies + targetbulan7_avian + targetbulan7_brucellosis + targetbulan7_anthrax + targetbulan7_hcholera + targetbulan7_penyakitlain + targetbulan7_asf + targetbulan7_penyakitviral +targetbulan7_penyakitbakterial + targetbulan7_pmk;
  var rataTarget_juli = totalTarget_juli/10;
  var totalTargetFix_juli = rataTarget_juli.toFixed(2);
  var totalRealisasi_juli = realisasibulan7_rabies + realisasibulan7_avian + realisasibulan7_brucellosis + realisasibulan7_anthrax + realisasibulan7_hcholera + realisasibulan7_penyakitlain + realisasibulan7_asf + realisasibulan7_penyakitviral +realisasibulan7_penyakitbakterial + realisasibulan7_pmk;

  var totalTarget_agustus = targetbulan8_rabies + targetbulan8_avian + targetbulan8_brucellosis + targetbulan8_anthrax + targetbulan8_hcholera + targetbulan8_penyakitlain + targetbulan8_asf + targetbulan8_penyakitviral +targetbulan8_penyakitbakterial + targetbulan8_pmk;
  var rataTarget_agustus = totalTarget_agustus/10;
  var totalTargetFix_agustus = rataTarget_agustus.toFixed(2);
  var totalRealisasi_agustus = realisasibulan8_rabies + realisasibulan8_avian + realisasibulan8_brucellosis + realisasibulan8_anthrax + realisasibulan8_hcholera + realisasibulan8_penyakitlain + realisasibulan8_asf + realisasibulan8_penyakitviral +realisasibulan8_penyakitbakterial + realisasibulan8_pmk;

  var totalTarget_september = targetbulan9_rabies + targetbulan9_avian + targetbulan9_brucellosis + targetbulan9_anthrax + targetbulan9_hcholera + targetbulan9_penyakitlain + targetbulan9_asf + targetbulan9_penyakitviral +targetbulan9_penyakitbakterial + targetbulan9_pmk;
  var rataTarget_september = totalTarget_september/10;
  var totalTargetFix_september = rataTarget_september.toFixed(2);
  var totalRealisasi_september = realisasibulan9_rabies + realisasibulan9_avian + realisasibulan9_brucellosis + realisasibulan9_anthrax + realisasibulan9_hcholera + realisasibulan9_penyakitlain + realisasibulan9_asf + realisasibulan9_penyakitviral +realisasibulan9_penyakitbakterial + realisasibulan9_pmk;

  var totalTarget_oktober = targetbulan10_rabies + targetbulan10_avian + targetbulan10_brucellosis + targetbulan10_anthrax + targetbulan10_hcholera + targetbulan10_penyakitlain + targetbulan10_asf + targetbulan10_penyakitviral +targetbulan10_penyakitbakterial + targetbulan10_pmk;
  var rataTarget_oktober = totalTarget_oktober/10;
  var totalTargetFix_oktober = rataTarget_oktober.toFixed(2);
  var totalRealisasi_oktober = realisasibulan10_rabies + realisasibulan10_avian + realisasibulan10_brucellosis + realisasibulan10_anthrax + realisasibulan10_hcholera + realisasibulan10_penyakitlain + realisasibulan10_asf + realisasibulan10_penyakitviral +realisasibulan10_penyakitbakterial + realisasibulan10_pmk;

  var totalTarget_november = targetbulan11_rabies + targetbulan11_avian + targetbulan11_brucellosis + targetbulan11_anthrax + targetbulan11_hcholera + targetbulan11_penyakitlain + targetbulan11_asf + targetbulan11_penyakitviral +targetbulan11_penyakitbakterial + targetbulan11_pmk;
  var rataTarget_november = totalTarget_november/10;
  var totalTargetFix_november = rataTarget_november.toFixed(2);
  var totalRealisasi_november = realisasibulan11_rabies + realisasibulan11_avian + realisasibulan11_brucellosis + realisasibulan11_anthrax + realisasibulan11_hcholera + realisasibulan11_penyakitlain + realisasibulan11_asf + realisasibulan11_penyakitviral +realisasibulan11_penyakitbakterial + realisasibulan11_pmk;

  var totalTarget_desember = targetbulan12_rabies + targetbulan12_avian + targetbulan12_brucellosis + targetbulan12_anthrax + targetbulan12_hcholera + targetbulan12_penyakitlain + targetbulan12_asf + targetbulan12_penyakitviral +targetbulan12_penyakitbakterial + targetbulan12_pmk;
  var rataTarget_desember = totalTarget_desember/10;
  var totalTargetFix_desember = rataTarget_desember.toFixed(2);
  var totalRealisasi_desember = realisasibulan12_rabies + realisasibulan12_avian + realisasibulan12_brucellosis + realisasibulan12_anthrax + realisasibulan12_hcholera + realisasibulan12_penyakitlain + realisasibulan12_asf + realisasibulan12_penyakitviral +realisasibulan12_penyakitbakterial + realisasibulan12_pmk;


  var totalTarget_tampil = parseFloat(totalTargetFix_januari) + parseFloat(totalTargetFix_februari) + parseFloat(totalTargetFix_maret) + parseFloat(totalTargetFix_april) + parseFloat(totalTargetFix_mei) + parseFloat(totalTargetFix_juni) + parseFloat(totalTargetFix_juli) + parseFloat(totalTargetFix_agustus) + parseFloat(totalTargetFix_september) + parseFloat(totalTargetFix_oktober) + parseFloat(totalTargetFix_november) + parseFloat(totalTargetFix_desember);
  
  // var totalTarget_tampilFix = totalTarget_tampil.toFixed(2);
  var totalTarget_tampilFix = parseInt(tampil_totalTarget_Rabies) + parseInt(tampil_totalTarget_Avian) + parseInt(tampil_totalTarget_Brucellosis) + parseInt(tampil_totalTarget_Anthrax) + parseInt(tampil_totalTarget_Hcholera) + parseInt(tampil_totalTarget_Penyakitlain) +  parseInt(tampil_totalTarget_Asf) + parseInt(tampil_totalTarget_Penyakitviral) + parseInt(tampil_totalTarget_Penyakitbakterial) + parseInt(tampil_totalTarget_Pmk);
  // console.log(tampil_totalTarget_Rabies)

  var totalRealisasi_tampil = totalRealisasi_januari + totalRealisasi_februari + totalRealisasi_maret + totalRealisasi_april + totalRealisasi_mei + totalRealisasi_juni + totalRealisasi_juli + totalRealisasi_agustus + totalRealisasi_september + totalRealisasi_oktober + totalRealisasi_november + totalRealisasi_desember;
  var persentase_awal = (parseInt(totalRealisasi_tampil) / parseInt(totalTarget_tampilFix)) * 100;
  var persentase_tampil = persentase_awal.toFixed(2) + '%'

  // var data_piphewan = {!! json_encode($data_piphewan -> toArray())!!};
  // console.log('TES', data_piphewan);
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


{{-- SCRIPT GRAFIK --}}
<script>

</script>