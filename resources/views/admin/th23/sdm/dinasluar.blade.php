@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA DINAS LUAR SIMANTU
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Dinas Luar</h3><br><br>
            {{-- <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah"  hidden>
              Tambah
            </button> --}}
            <div class="input-icons" style="width: 25%; float:right">
              <form action="{{ url('sdm_dinasluar23') }}" method="GET" id="Pencarian">
                <div style="float:left">
                  <span><i class="fa fa-search"> </i></span>
                  <input style="text-align: center;" name="cari" class="form-control" type="text" id="myInput" placeholder="Pencarian" title="Type in a name">
                </div>
                <input type="submit" value="CARI" class="btn btn-primary btn-sm" style="float:right; width:100px; height:40px">

              </form>
            </div>
            <div style="width: 29%; margin-top: 10px">
                <input type="date" name="FilterTanggal" class="form-control" onchange="filter()" id="filterId">
                
                {{-- <select class="form-select" name="FilterTanggal" onchange="filter()" id="filterId">
                    <option value="">Pilih Tanggal</option>
                    @foreach($data_dinasluar23 as $key=>$value)
                    <option value="{{ $value-> Tanggal}}">{{ $value-> Tanggal}}</option>
                    @endforeach
                  </select> --}}
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tujuan</th>
                  <th hidden>Tanggal</th>
                  <th>Nama Kegiatan</th>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'admikepegawaian@gmail.com')
                  <th>Aksi</th>   
                  @endif
                </tr>
              </thead>
              <tbody>
                @if ($data_dinasluar23->count() == 0)
                <tr>
                    <td colspan="5">Belum Ada Data Dinas Luar</td>
                </tr>
                @endif
                <p hidden> {{ $i = 1 }}</p>
                @foreach ($data_dinasluar23 as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Nama}}</td>
                  <td>{{ $value-> Tujuan}}</td>
                  <td hidden>{{ $value-> Tanggal}}</td>
                  <td>{{ $value-> Kegiatan}}</td>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'admikepegawaian@gmail.com')
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
            <div style="margin-top:2%;">
              {{ $data_dinasluar23->links('pagination::bootstrap-4') }}
              {{-- <p>Menampilkan {{$data_dinasluar23->count()}} dari {{ $data_dinasluar23->total() }} orang pegawai.</p> --}}
              <p>Jumlah pegawai dinas luar : {{ $data_dinasluar23->total() }} orang pegawai.</p>
            </div>
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data SDM
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('sdm_dinasluar23') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama</label>
            <div class="col-xl-10">
              <input type="text" name="Nama" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tanggal</label>
            <div class="col-xl-10">
              <input type="date" name="Tanggal" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tujuan</label>
            <div class="col-xl-10">
              <input type="text" name="Tujuan" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Kegiatan</label>
            <div class="col-xl-10">
              <input type="text" name="Kegiatan" class="form-control">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Data
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('sdm_dinasluar23') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama</label>
            <div class="col-xl-10">
              <input type="text" name="Nama" class="form-control" id="NamaEdit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tanggal</label>
            <div class="col-xl-10">
              <input type="date" name="Tanggal" class="form-control" id="TanggalEdit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tujuan</label>
            <div class="col-xl-10">
              <input type="text" name="Tujuan" class="form-control" id="TujuanEdit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Kegiatan</label>
            <div class="col-xl-10">
              <input type="text" name="Kegiatan" class="form-control" id="KegiatanEdit">
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


<!--modal Hapus -->
<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Hapus Data SDM
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <h6 style="text-align: justify;">Apakah Anda yakin ingin menghapus data Pegawai ?               <?php
            echo "<script>document.writeln(NamaPegawai);</script>";
            ?><br> Data yang sudah dihapus tidak dapat dikembalikan lagi  </h6>
        </center>
        <form action="{{ url('sdm_dinasluar23') }}" method="POST" id="DeleteForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="DELETE">
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger float-end">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
{{-- SEARCHING --}}
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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

function filter() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filterId");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
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

{{-- MODAL EDIT --}}
<script>
  var data_sdm = {!! json_encode($data_dinasluar23All -> toArray())!!};
  function updateData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    document.getElementById("NamaEdit").value = result.Nama;
    document.getElementById("TanggalEdit").value = result.Tanggal;
    document.getElementById("TujuanEdit").value = result.Tujuan;
    document.getElementById("KegiatanEdit").value = result.Kegiatan;
    $('#editForm').attr('action', '/sdm_dinasluar23/' + id)
  }
</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_sdm = {!! json_encode($data_dinasluar23All -> toArray())!!};
  function hapusData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    console.log(result);
    NamaPegawai = String(result.Nama);
    console.log(NamaPegawai);

    $('#DeleteForm').attr('action', '/sdm_dinasluar23/' + id)
  }
</script>