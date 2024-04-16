@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header mb-5">
    <h1 class="text-uppercase">
      Ternak Ruminansia Potong TAHUN
      <?php echo $tahun ?>
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
              echo "<script>document.writeln(tampil_totalTarget);</script>";
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
              echo "<script>document.writeln(tampil_totalRealisasi);</script>";
              ?>
            </h5>
            <p>REALISASI Ternak Ruminansia Potong</p>
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
              echo "<script>document.writeln(tampil_PersentaseFix);</script>";
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
                  <h5>Data Ternak Ruminansia Potong</h5>
              </div>
              <div class="col-lg-6">
                <div class="float-end">
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                  <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edittarget">
                    Edit Target
                  </button> 
                  @endif
                  <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah" hidden>
                    Tambah
                  </button>
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
                    {{-- <th>Target</th> --}}
                    <th>Realisasi</th>
                    @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  <p hidden> {{ $i = 1 }}</p>
                  @foreach ($data_ternakpotong as $key=>$value)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $value-> Bulan}}</td>
                    {{-- <td>{{ $value-> Target}}</td> --}}
                    <td>{{ $value-> Realisasi}}</td>
                    @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                    <td> <a title="Edit" class="updateData btn bg-warning text-light" onclick="updateData({{$value->id}});"
                      data-bs-toggle="modal" data-bs-target="#modal_edit"><i class="fa fa-edit"></i></a></td>  
                    @endif
                  </tr>
            </div>
            @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7">
      <div class="card">
        <div class="card-header">
          <h5>Grafik Realisasi Ternak Ruminansia Potong</h5>
        </div>
        <div class="card-body">
          <canvas id="myChart" width="100" height="50"></canvas>
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
        <form action="{{ url('v23/TernakRuminansia') }}" method="POST">
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
        <form action="{{ url('v23/TernakRuminansia') }}" method="POST">
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
        <form action="{{ url('v23/TernakRuminansia') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
              <input type="text" name="id" class="form-control" id="idEdit" value="" readonly>
            </div>
          </div>
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
  var data_ternakpotong = {!! json_encode($data_ternakpotong -> toArray())!!};
        function updateData(id)
        {
          var result = data_ternakpotong.filter( obj => obj.id === id)[0];
          console.log(result.Bulan);
          document.getElementById("idEdit").value = result.id;
          document.getElementById("BulanEdit").value = result.Bulan;
          document.getElementById("TargetEdit").value = result.Target;
          document.getElementById("RealisasiEdit").value = result.Realisasi;

          $('#editForm').attr('action', 'TernakRuminansia')
        }
</script>


{{-- SCRIPT BAGIAN ATAS --}}
<script>
   var data_ternakpotong = {!! json_encode($data_ternakpotong -> toArray())!!};
  //  console.log('TES', data_ternakpotong);
  var total_Target = 0;
  var total_Realisasi = 0 ;
   for (let index = 0; index < data_ternakpotong.length; index++) {
    var Target = parseInt(data_ternakpotong[index].Target);
    var Realisasi = parseInt(data_ternakpotong[index].Realisasi);
    // console.log(Realisasi);
    total_Target += Target;
    total_Realisasi += Realisasi;
   }
   var rata_totalTarget = total_Target/12;
   var tampil_totalTarget = String(rata_totalTarget );
   var tampil_totalRealisasi = String(total_Realisasi);
   console.log( tampil_totalTarget  , tampil_totalRealisasi)
   var tampil_Persentase = (parseInt(total_Realisasi) / parseInt(rata_totalTarget)) * 100;
   var tampil_PersentaseFix = tampil_Persentase.toFixed(2)+' %'
  //  console.log(tampil_Persentase.toFixed(2)+' %')
   

</script>


{{-- SCRIPT GRAFIK --}}
<script>
  var data_ternakpotong = {!! json_encode($data_ternakpotong -> toArray())!!};
  // console.log('TES', data_ternakpotong);
  document.addEventListener("DOMContentLoaded", function (event) {
    var Januari = parseInt(data_ternakpotong[0].Realisasi);
    var Febuari = Januari + parseInt(data_ternakpotong[1].Realisasi);
    var Maret = Febuari + parseInt(data_ternakpotong[2].Realisasi);
    var April = Maret + parseInt(data_ternakpotong[3].Realisasi);
    var Mei = April + parseInt(data_ternakpotong[4].Realisasi);
    var Juni = Mei + parseInt(data_ternakpotong[5].Realisasi);
    var Juli = Juni + parseInt(data_ternakpotong[6].Realisasi);
    var Agustus = Juli + parseInt(data_ternakpotong[7].Realisasi);
    var September = Agustus + parseInt(data_ternakpotong[8].Realisasi);
    var Oktober = September + parseInt(data_ternakpotong[9].Realisasi);
    var November = Oktober + parseInt(data_ternakpotong[10].Realisasi);
    var Desember = November + parseInt(data_ternakpotong[11].Realisasi);

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