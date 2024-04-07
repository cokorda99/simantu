@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header mb-5">
    <h1 class="text-uppercase">
      Realisasi Serapan Anggaran <br>
      Penyediaan Benih dan Bibit Serta Peningkatanan Produksi Ternak
      <?php ?>
    </h1>
    <p>Update at :
      <?php echo $tgl=date('l, d-m-Y');;?>
    </p>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
    <div class="row">
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h5>Rp
              <?php
              echo "<script>document.writeln(tampil_totalTarget);</script>";
              ?>
            </h5>
            <p>TOTAL PAGU</p>
            <hr>
            {{--
            <hr>
            <br>
            <br> --}}
          </div>
          <div class="icon">
            <i class="ion ion-bookmark"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h5>Rp
              <?php
              echo "<script>document.writeln(tampil_totalAkrual);</script>";
              ?>
            </h5>
            <p>SERAPAN AKRUAL</p>
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
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h5>Rp
              <?php
              echo "<script>document.writeln(tampil_totalSp2d);</script>";
              ?>
            </h5>
            <p>SERAPAN SP2D</p>
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
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h5>
              <?php
              echo "<script>document.writeln(tampil_PersentaseFix);</script>";
              ?>
            </h5>
            <p>PERSENTASE CAPAIAN</p>
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
                <h5>Data Realisasi Serapan Anggaran </h5>
              </div>
              <div class="col-lg-6">
                <div class="float-end">
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'adminkeuangan@gmail.com')
                  <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edittarget">
                    Edit Pagu
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
            <?php 
              	function convert_to_rupiah($angka)
	{
		return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
	}
              ?>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Akrual</th>
                    <th>SP2D</th>
                    @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'adminkeuangan@gmail.com')
                    <th>Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  <p hidden> {{ $i = 1 }}</p>
                  @foreach ($data_penyediaanbenih23 as $key=>$value)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $value-> Bulan}}</td>
                    <td>{{ convert_to_rupiah( $value-> akrual)}}</td>
                    <td>{{ convert_to_rupiah( $value-> sp2d)}}</td>
                    @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'adminkeuangan@gmail.com')
                    <td> <a title="Edit" class="updateData btn bg-warning text-light"
                      onclick="updateData({{$value->id}});" data-bs-toggle="modal" data-bs-target="#modal_edit"><i
                        class="fa fa-edit"></i></a></td>
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
          <h5>Grafik Serapan Anggaran</h5>
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
        <form action="{{ url('anggaran_PenyedianBenih23') }}" method="POST">
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
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Pagu</label>
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Jumlah Pagu
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('anggaran_PenyedianBenih23/1') }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Pagu</label>
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
        <form action="{{ url('anggaran_PenyedianBenih23') }}" method="POST" id="editForm">
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
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Pagu</label>
            <div class="col-xl-10">
              <input type="text" name="Target" class="form-control" id="TargetEdit" value="" readonly>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah Akrual</label>
            <div class="col-xl-10">
              <input type="text" name="akrual" class="form-control" id="akrualEdit" value="">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jumlah SP2D</label>
            <div class="col-xl-10">
              <input type="text" name="sp2d" class="form-control" id="sp2dEdit" value="">
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
  var data_ikm = {!! json_encode($data_penyediaanbenih23 -> toArray())!!};
  function updateData(id) {
    var result = data_ikm.filter(obj => obj.id === id)[0];
    console.log(result.Bulan);
    document.getElementById("BulanEdit").value = result.Bulan;
    document.getElementById("TargetEdit").value = result.Target;
    document.getElementById("akrualEdit").value = result.akrual;
    document.getElementById("sp2dEdit").value = result.sp2d;

    $('#editForm').attr('action', '/anggaran_PenyedianBenih23/' + id)
  }
</script>


{{-- SCRIPT BAGIAN ATAS --}}
<script>
  var data_ikm = {!! json_encode($data_penyediaanbenih23 -> toArray())!!};
  //  console.log('TES', data_ikm);
  var total_Target = 0;
  var total_akrual = 0;
  var total_sp2d = 0;

  for (let index = 0; index < data_ikm.length; index++) {
    var Target = parseInt(data_ikm[index].Target);
    var Akrual = parseInt(data_ikm[index].akrual);
    var Sp2d = parseInt(data_ikm[index].sp2d);

    total_Target += Target;
    total_akrual += Akrual;
    total_sp2d += Sp2d;
  }
  function formatRupiah(nilai){
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

  var rata_totalTarget = total_Target/12;
  var tampil_totalTarget = formatRupiah(rata_totalTarget);
  var tampil_totalAkrual = formatRupiah(total_akrual);
  var tampil_totalSp2d = formatRupiah(total_sp2d);
  // console.log(tampil_totalTarget, tampil_totalRealisasi)
  var tampil_Persentase = (parseInt(total_sp2d) / parseInt(rata_totalTarget)) * 100;
  var tampil_PersentaseFix = tampil_Persentase.toFixed(2) + ' %'
  //  console.log(tampil_Persentase.toFixed(2)+' %'

</script>


{{-- SCRIPT GRAFIK --}}
<script>
  var data_ikm = {!! json_encode($data_penyediaanbenih23 -> toArray())!!};
  // console.log('TES', data_ikm);
  document.addEventListener("DOMContentLoaded", function (event) {
    var Januari = parseInt(data_ikm[0].akrual);
    var Febuari = Januari + parseInt(data_ikm[1].akrual);
    var Maret = Febuari + parseInt(data_ikm[2].akrual);
    var April = Maret + parseInt(data_ikm[3].akrual);
    var Mei = April + parseInt(data_ikm[4].akrual);
    var Juni = Mei + parseInt(data_ikm[5].akrual);
    var Juli = Juni + parseInt(data_ikm[6].akrual);
    var Agustus = Juli + parseInt(data_ikm[7].akrual);
    var September = Agustus + parseInt(data_ikm[8].akrual);
    var Oktober = September + parseInt(data_ikm[9].akrual);
    var November = Oktober + parseInt(data_ikm[10].akrual);
    var Desember = November + parseInt(data_ikm[11].akrual);

    var Januari2 = parseInt(data_ikm[0].sp2d);
    var Febuari2 = Januari2 + parseInt(data_ikm[1].sp2d);
    var Maret2 = Febuari2 + parseInt(data_ikm[2].sp2d);
    var April2 = Maret2 + parseInt(data_ikm[3].sp2d);
    var Mei2 = April2 + parseInt(data_ikm[4].sp2d);
    var Juni2 = Mei2 + parseInt(data_ikm[5].sp2d);
    var Juli2 = Juni2 + parseInt(data_ikm[6].sp2d);
    var Agustus2 = Juli2 + parseInt(data_ikm[7].sp2d);
    var September2 = Agustus2 + parseInt(data_ikm[8].sp2d);
    var Oktober2 = September2 + parseInt(data_ikm[9].sp2d);
    var November2 = Oktober2 + parseInt(data_ikm[10].sp2d);
    var Desember2 = November2 + parseInt(data_ikm[11].sp2d);

    var ctx = document.getElementById('myChart').getContext('2d');
    // var ctx2 = document.getElementById('myChart2').getContext('2d');

    var chart_jalur = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Januari',' ', 'Febuari',' ', 'Maret',' ', 'April',' ', 'Mei',' ', 'Juni',' ', 'Juli',' ', 'Agustus',' ', 'September',' ', 'Oktober',' ', 'November',' ', 'Desember',' ',],
        
        datasets: [{
          label: '',
          data: [Januari, Januari2, Febuari,Febuari2, Maret,Maret2, April,April2, Mei,Mei2, Juni,Juni2, Juli,Juli2, Agustus,Agustus2, September,September2, Oktober,Oktober2, November,November2, Desember,Desember2],
          backgroundColor: [
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
          ],
          borderColor: [
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
            'rgba(0, 158, 96, 1)',
            'rgba(13,110,253, 1)',
          ],
          borderWidth: 1,
          width: '10px',
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
            // style:"background-color:transparent;";
          },
          legend: {
            display: false
          }
        },
      }
    });
  });
</script>