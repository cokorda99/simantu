@extends('admin/th22/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA DETAIL PENYAKIT HEWAN 
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Detail Penyakit Hewan</h3><br><br>
            @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah">
              Tambah
            </button>
            @endif
            <div class="input-icons" style="width: 20%; float:right">
              <span><i class="fa fa-search"> </i></span>
              <input style="text-align: center;" class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Pencarian" title="Type in a name">
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Penyakit</th>
                  <th>Bulan</th>
                  <th>Jumlah Target</th>
                  <th>Jumlah Realisasi</th>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                  <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @if ($data_penyakitall->count() == 0)
                <tr>
                    <td colspan="5">Belum Ada Data Detail Penyakit Hewan</td>
                </tr>
                @endif
                <p hidden> {{ $i = 1 }}</p>
                @foreach ($data_penyakitall as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Penyakit}}</td>
                  <td>{{ $value-> Bulan}}</td>
                  <td>{{ $value-> Target}}</td>
                  <td>{{ $value-> Realisasi}}</td>
                  <td>
                    @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                    <a title="Edit" class="updateData btn bg-warning text-light"
                    onclick="updateData({{$value->id}});" data-bs-toggle="modal" data-bs-target="#modal_edit"><i
                      class="fa fa-edit"></i></a>
                    <a title="Hapus" class="hapusData btn bg-danger text-light"  onclick="hapusData({{$value->id}});" data-bs-toggle="modal"
                    data-bs-target="#modal_hapus"><i class="fa fa-trash"></i></a>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div style="margin-top:2%;">
              {{ $data_penyakitall->links('pagination::bootstrap-4') }}
              <p>Menampilkan {{$data_penyakitall->count()}} dari {{ $data_penyakitall->total() }} data penyakit.</p>
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data Detail Penyakit Hewan
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('DetailPenyakitHewan') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Penyakit</label>
            <div class="col-xl-10">
                <select class="form-select" name="id_penyakit" id="penyakit_id" onchange="autoPenyakit()">
                    <option value="">Pilih Jenis Penyakit</option>
                    @foreach($data_penyakit as $key=>$value)
                    <option value="{{ $value-> id}}">{{ $value-> Penyakit}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Penyakit</label>
            <div class="col-xl-10">
                <select class="form-select" name="Penyakit" id="penyakit_nama">
                    <option value="">Pilih Jenis Penyakit</option>
                    @foreach($data_penyakit as $key=>$value)
                    <option value="{{ $value-> Penyakit}}">{{ $value-> Penyakit}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
                <select class="form-select" name="id_bulan" id="bulan_id" onchange="autoBulan()">
                    <option value="">Pilih Bulan</option>
                    @foreach($data_bulan as $key=>$value)
                    <option value="{{ $value-> id}}">{{ $value-> Bulan}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
                <select class="form-select" name="Bulan" id="bulan_nama">
                    <option value="">Pilih Bulan</option>
                    @foreach($data_bulan as $key=>$value)
                    <option value="{{ $value-> Bulan}}">{{ $value-> Bulan}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Target</label>
            <div class="col-xl-10">
              <input type="text" name="Target" class="form-control">
            </div>
          </div>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Realisasi</label>
            <div class="col-xl-10">
              <input type="text" name="Realisasi" class="form-control">
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
        <form action="{{ url('DetailPenyakitHewan') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Penyakit</label>
            <div class="col-xl-10">
                <select class="form-select" name="id_penyakit" id="penyakit_idEdit" onchange="autoPenyakitEdit()">
                    <option value="">Pilih Jenis Penyakit</option>
                    @foreach($data_penyakit as $key=>$value)
                    <option value="{{ $value-> id}}">{{ $value-> Penyakit}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Penyakit</label>
            <div class="col-xl-10">
                <select class="form-select" name="Penyakit" id="penyakit_namaEdit">
                    <option value="">Pilih Jenis Penyakit</option>
                    @foreach($data_penyakit as $key=>$value)
                    <option value="{{ $value-> Penyakit}}">{{ $value-> Penyakit}}</option>
                    @endforeach
                  </select>
            </div>
          </div>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
                <select class="form-select" name="id_bulan" id="bulan_idEdit" onchange="autoBulanEdit()">
                    <option value="">Pilih Bulan</option>
                    @foreach($data_bulan as $key=>$value)
                    <option value="{{ $value-> id}}">{{ $value-> Bulan}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="form-group row mb-3" hidden>
            <label for="inputEmail3" class="col-xl-2 col-form-label">Bulan</label>
            <div class="col-xl-10">
                <select class="form-select" name="Bulan" id="bulan_namaEdit">
                    <option value="">Pilih Bulan</option>
                    @foreach($data_bulan as $key=>$value)
                    <option value="{{ $value-> Bulan}}">{{ $value-> Bulan}}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Target</label>
            <div class="col-xl-10">
              <input type="text" name="Target" class="form-control" id="TargetEdit">
            </div>
          </div>

          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Realisasi</label>
            <div class="col-xl-10">
              <input type="text" name="Realisasi" class="form-control" id="RealisasiEdit">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Hapus Data Detail Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <h6 style="text-align: justify;">Apakah Anda yakin ingin menghapus data Detail Penyakit ?               <?php
            echo "<script>document.writeln(NamaPegawai);</script>";
            ?><br> Data yang sudah dihapus tidak dapat dikembalikan lagi  </h6>
        </center>
        <form action="{{ url('DetailPenyakitHewan') }}" method="POST" id="DeleteForm">
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
</script>

{{-- ONCHANGE --}}
<script>
var getnamaPenyakit = {!! json_encode($data_penyakit -> toArray())!!};
var getnamaBulan = {!! json_encode($data_bulan -> toArray())!!};
function autoPenyakit() {
    var idPenyakit = parseInt(document.getElementById("penyakit_id").value);
    var result = getnamaPenyakit.filter(obj => obj.id === idPenyakit)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("penyakit_nama").value = result.Penyakit;
}

function autoBulan() {
    var idBulan = parseInt(document.getElementById("bulan_id").value);
    var result = getnamaBulan.filter(obj => obj.id === idBulan)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("bulan_nama").value = result.Bulan;
}

function autoPenyakitEdit() {
    var idPenyakit = parseInt(document.getElementById("penyakit_idEdit").value);
    var result = getnamaPenyakit.filter(obj => obj.id === idPenyakit)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("penyakit_namaEdit").value = result.Penyakit;
}

function autoBulanEdit() {
    var idBulan = parseInt(document.getElementById("bulan_idEdit").value);
    var result = getnamaBulan.filter(obj => obj.id === idBulan)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("bulan_namaEdit").value = result.Bulan;
}

</script>
{{-- MODAL EDIT --}}
<script>
  var data_sdm = {!! json_encode($data_penyakitallAll -> toArray())!!};

  var getnamaPenyakit = {!! json_encode($data_penyakit -> toArray())!!};
  var getnamaBulan = {!! json_encode($data_bulan -> toArray())!!};

  function updateData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    document.getElementById("penyakit_idEdit").value = result.id_penyakit;
    document.getElementById("bulan_idEdit").value = result.id_bulan;
    document.getElementById("TargetEdit").value = result.Target;
    document.getElementById("RealisasiEdit").value = result.Realisasi;


    var idBulan = parseInt(document.getElementById("bulan_idEdit").value);
    var result = getnamaBulan.filter(obj => obj.id === idBulan)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("bulan_namaEdit").value = result.Bulan;


    var idPenyakit = parseInt(document.getElementById("penyakit_idEdit").value);
    var result = getnamaPenyakit.filter(obj => obj.id === idPenyakit)[0];
    // console.log(idPenyakit,result);
    // console.log(getnamaPenyakit)
    document.getElementById("penyakit_namaEdit").value = result.Penyakit;

    $('#editForm').attr('action', '/DetailPenyakitHewan/' + id)
  }
</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_sdm = {!! json_encode($data_penyakitallAll -> toArray())!!};
  function hapusData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    console.log(result);
    NamaPegawai = String(result.Nama);
    console.log(NamaPegawai);

    $('#DeleteForm').attr('action', '/DetailPenyakitHewan/' + id)
  }
</script>