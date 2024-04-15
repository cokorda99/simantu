@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA MASUKAN KEPALA BALAI SIMANTU TAHUN
      <?php echo $tahun ?>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Masukan</h3><br><br>
            @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'kepalabbvetdenpasar@gmail.com')
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah">
              Tambah
            </button>
            @endif
            <br>
            <br>
            <div class="input-icons" style="width: 20%;float: left;" >
              <select class="form-control" id="pilihBulanFilter" onchange="BulanselectFilter()">
                <option value="-">Pilih Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value='Agustus'>Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="TabelMasukan" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Judul</th>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'kepalabbvetdenpasar@gmail.com')
                  <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                <p hidden> {{ $i = 1 }}</p>
                @foreach ($data_masukan as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Tanggal}}</td>
                  <td>{{ $value-> Bulan}}</td>
                  <td>{{ $value-> Tahun}}</td>
                  <td>{{ $value-> Judul}}</td>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'kepalabbvetdenpasar@gmail.com')
                  <td>
                    <a title="Edit" class="updateData btn bg-warning text-light"
                        onclick="updateData({{$value->id}});" data-bs-toggle="modal" data-bs-target="#modal_edit"><i
                          class="fa fa-edit"></i></a>
                    <a title="Hapus" class="hapusData btn bg-danger text-light"  onclick="hapusData({{$value->id}});" data-bs-toggle="modal"
                      data-bs-target="#modal_hapus"><i class="fa fa-trash"></i></a>

                  </td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>


<!--modal tambah -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Masukan Kepala Balai
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/v23/masukanBalai') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tanggal<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <input type="date" name="FilterTanggal" class="form-control" onchange="filter()" id="filterId">
            </div>
          </div>
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tanggal<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <input type="text" name="Tanggal" class="form-control" id="TanggalInput">
            </div>
          </div>
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <input type="text" name="Tahun" class="form-control" id="TahunInput">
            </div>
          </div>

          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Judul<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <input type="text" name="Judul" class="form-control" id="JudulInput">
            </div>
          </div>
          
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan Berjalan<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Bulan" id="SelectBulanInput">
                <option value="-">Pilih Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
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
            <label for="inputEmail3" class="col-xl-2 col-form-label">Koreksi Kepala Balai<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <!-- <input type="text" name="Nama" class="form-control"> -->
              <textarea name="Isi_Masukan" id="" cols="70" rows="5" class="form-control"></textarea>
            </div>
          </div>
          
          <button type="submit" class="btn btn-success float-end">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--modal edit -->
<div class="modal fade" id="modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Lihat Data
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/v23/masukanBalai') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">ID</label>
            <div class="col-xl-10">
              <input type="text" name="id" class="form-control" id="IdEdit" readonly>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Judul</label>
            <div class="col-xl-10">
              <input type="text" name="Judul" class="form-control" id="JudulEdit" readonly>
            </div>
          </div>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Koreksi Kepala Balai</label>
            <div class="col-xl-10">
              <!-- <input type="text" name="Nama" class="form-control"> -->
              <textarea name="Isi_Masukan" id="IsiEdit" cols="70" rows="5" class="form-control" readonly></textarea>
            </div>
          </div>
          {{-- <button type="submit" class="btn btn-success float-end">Update</button> --}}
        </form>
      </div>
      {{-- <div class="modal-footer border-0">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div> --}}
    </div>
  </div>
</div>


<!--modal Hapus -->
<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Hapus Data Masukan Kepala Balai
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <h6 style="text-align: justify;">Apakah Anda yakin ingin menghapus data ini ?. Data yang sudah dihapus tidak dapat dikembalikan lagi  </h6>
        </center>
        <form action="{{ url('/v23/masukanBalai') }}" method="POST" id="DeleteForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="DELETE">
          <div class="modal-footer border-0">
          <input type="text" name="id" class="form-control" id="IdDelete" readonly hidden>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger float-end">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


{{-- MODAL EDIT --}}
<script>
  var data_masukan = {!! json_encode($data_masukan -> toArray())!!};
  function updateData(id) {
    var result = data_masukan.filter(obj => obj.id === id)[0];
    document.getElementById("IdEdit").value = result.id;
    document.getElementById("JudulEdit").value = result.Judul;
    document.getElementById("IsiEdit").value = result.Isi_Masukan;

    $('#editForm').attr('action', '/v23/masukanBalai')
  }
</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_masukan = {!! json_encode($data_masukan -> toArray())!!};
  function hapusData(id) {
    var result = data_masukan.filter(obj => obj.id === id)[0];
    document.getElementById("IdDelete").value = result.id;
    console.log(result);
    NamaPegawai = String(result.Nama);
    console.log(NamaPegawai);

    $('#DeleteForm').attr('action', '/v23/masukanBalai/')
  }
</script>

<script>
  function filter() {
    input = document.getElementById("filterId").value;
    var date = input.split("-");
   
    var tahun = date[0];
    var bulan = date[1];
    var tanggal = date[2];

    document.getElementById("TahunInput").value = tahun;
    document.getElementById("TanggalInput").value = tanggal;
    document.getElementById("JudulInput").value = 'Masukan Kepala Balai ' +tanggal+'-'+bulan+'-'+tahun ;

    if (bulan == '01') {
      document.getElementById("SelectBulanInput").value = 'Januari';
    } else if (bulan == '02') {
      document.getElementById("SelectBulanInput").value = 'Februari';
    } else if (bulan == '03') {
      document.getElementById("SelectBulanInput").value = 'Maret';
    } else if (bulan == '04') {
      document.getElementById("SelectBulanInput").value = 'April';
    } else if (bulan == '05') {
      document.getElementById("SelectBulanInput").value = 'Mei';
    } else if (bulan == '06') {
      document.getElementById("SelectBulanInput").value = 'Juni';
    } else if (bulan == '07') {
      document.getElementById("SelectBulanInput").value = 'Juli';
    } else if (bulan == '08') {
      document.getElementById("SelectBulanInput").value = 'Agustus';
    } else if (bulan == '09') {
      document.getElementById("SelectBulanInput").value = 'September';
    } else if (bulan == '10') {
      document.getElementById("SelectBulanInput").value = 'Oktober';
    } else if (bulan == '11') {
      document.getElementById("SelectBulanInput").value = 'November';
    } else if (bulan == '12') {
      document.getElementById("SelectBulanInput").value = 'Desember';
    }

    console.log();
  }


  function BulanselectFilter() {
    var input = document.getElementById("pilihBulanFilter").value;
    filter = input.toUpperCase();;
    console.log(filter);
    table = document.getElementById("TabelMasukan");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2];
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

