@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PENGATURAN JENIS PILIHAN PENYAKIT
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Jenis Pilihan Penyakit</h3><br><br>
            @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah"  hidden>
              Tambah
            </button>
            @endif
            {{-- <div class="input-icons" style="width: 20%; float:right">
              <span><i class="fa fa-search"> </i></span>
              <input style="text-align: center;" class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Pencarian" title="Type in a name">
            </div> --}}
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Penyakit</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <p hidden> {{ $i = 1 }}</p>
                @foreach ($data_jenispenyakit as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Nama_Penyakit}}</td>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data Nama Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('data_Pilihan_Penyakit23') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama Penyakit</label>
            <div class="col-xl-10">
              <input type="text" name="Nama_Penyakit" class="form-control">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Data Nama Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('data_Pilihan_Penyakit23') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama Penyakit</label>
            <div class="col-xl-10">
              <input type="text" name="Nama_Penyakit" class="form-control" id="Nama_PenyakitEdit">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Hapus Data Jenis Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <h6 style="text-align: justify;">Apakah Anda yakin ingin menghapus data Penyakit?. Data yang sudah dihapus tidak dapat dikembalikan lagi  </h6>
        </center>
        <form action="{{ url('data_Pilihan_Penyakit23') }}" method="POST" id="DeleteForm">
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


{{-- MODAL EDIT --}}
<script>
  var data_penyakit5year= {!! json_encode($data_jenispenyakit -> toArray())!!};
  function updateData(id) {
    var result = data_penyakit5year.filter(obj => obj.id === id)[0];
    document.getElementById("Nama_PenyakitEdit").value = result.Nama_Penyakit;

    $('#editForm').attr('action', '/data_Pilihan_Penyakit23/' + id)
  }

</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_penyakit5year= {!! json_encode($data_jenispenyakit -> toArray())!!};
  function hapusData(id) {
    var result = data_penyakit5year.filter(obj => obj.id === id)[0];
    $('#DeleteForm').attr('action', '/data_Pilihan_Penyakit23/' + id)
  }
</script>