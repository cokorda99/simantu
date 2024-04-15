@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA SDM SIMANTU
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Pegawai</h3><br><br>
            @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'admikepegawaian@gmail.com')
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah"  hidden>
              Tambah
            </button>
            @endif
            <div class="input-icons" style="width: 25%; float:right">
              <form action="{{ url('sdm_sdm23') }}" method="GET" id="Pencarian">
                <div style="float:left">
                  <span><i class="fa fa-search"> </i></span>
                  <input style="text-align: center;" name="cari" class="form-control" type="text" id="myInput" placeholder="Pencarian" title="Type in a name">
                </div>
                <input type="submit" value="CARI" class="btn btn-primary btn-sm" style="float:right; width:100px; height:40px">

              </form>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="myTable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Jenis Pegawai</th>
                  <th>Sebaran</th>
                  <th>Pendidikan</th>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'admikepegawaian@gmail.com')
                  <th>Aksi</th>
                  @endif
                  
                </tr>
              </thead>
              <tbody>
                @if ($data_sdm23->count() == 0)
                <tr>
                    <td colspan="5">Belum Ada Data Pegawai</td>
                </tr>
                @endif
                <p hidden> {{ $i = 1 }}</p>
                @foreach ($data_sdm23 as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Nama}}</td>
                  <td>{{ $value-> Nip}}</td>
                  <td>{{ $value-> Jenis}}</td>
                  <td>{{ $value-> Sebaran}}</td>
                  <td>{{ $value-> Pendidikan}}</td>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com' || auth::user()->email == 'admikepegawaian@gmail.com')
                  <td>
                    <a title="Tambah Dinas Luar" class="dinasLuar btn bg-success text-light"
                    onclick="dinasLuar({{$value->id}});" data-bs-toggle="modal" data-bs-target="#modal_dinasluar"><i
                      class="fa fa-plus"></i></a>
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
              {{ $data_sdm23->links('pagination::bootstrap-4') }}
              <p>Menampilkan {{$data_sdm23->count()}} dari {{ $data_sdm23->total() }} orang pegawai.</p>
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
        <form action="{{ url('sdm_sdm23') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              <input type="text" name="Nama" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Pegawai<small><span style="color: red">*</span></small></label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Jenis">
                <option value="-">Pilih Jenis Pegawai</option>
                <option value="PNS">PNS</option>
                <option value="PPPK">PPPK</option>
                <option value="THL">THL</option>
                <option value="OUTSOURCING">OUTSOURCING</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">NIP</label>
            <div class="col-xl-10">
              <input type="text" name="Nip" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Jabatan</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Jabatan" id="pilihjenisjabatan" onchange="jenisjabatan()">
                <option value="-">Pilih Jenis Jabatan</option>
                <option value="Struktural">Struktural</option>
                <option value="Fungsional Khusus">Fungsional Khusus</option>
                <option value="Fungsional Umum">Fungsional Umum</option>
              </select>
              <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small>
            </div>
            
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jabatan Fungsional</label>
            <div class="col-xl-10">
              <select class="form-control" name="Fungsional" id="course">
                <option value="-">Pilih Jabatan Fungsional</option>
              </select>
              <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small>
            </div>
            
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Sebaran</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Sebaran">
                <option value="-">Pilih Sebaran</option>
                <option value="Bagian Umum">Bagian Umum</option>
                <option value="Kelompok Substansi">Kelompok Substansi</option>
                <option value="Kelompok JAFUNG MEDIK PARAMEDIK">Kelompok JAFUNG MEDIK PARAMEDIK</option>
              </select>
              <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Pendidikan</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Pendidikan">
                <option value="-">Pilih Pendidikan</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="D4">D4</option>
                <option value="D3">D3</option>
                <option value="SLTA/SMK">STLA/SMK</option>
                <option value="SLTP">SLTP</option>
                <option value="SD">SD</option>
              </select>
              <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small>
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
        <form action="{{ url('sdm_sdm23') }}" method="POST" id="editForm">
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
            <label for="inputEmail3" class="col-xl-2 col-form-label">NIP</label>
            <div class="col-xl-10">
              <input type="text" name="Nip" class="form-control" id="NipEdit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Pegawai</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Jenis" id="JenisEdit">
                <option value="">Pilih Jenis Pegawai</option>
                <option value="PNS">PNS</option>
                <option value="PPPK">PPPK</option>
                <option value="THL">THL</option>
                <option value="OUTSOURCING">OUTSOURCING</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Jabatan</label>
            <div class="col-xl-10">
              <input type="text" name="Jabatan" class="form-control" id="pilihjenisjabatanEdit" readonly>
              {{-- <select class="form-select" name="Jabatan" id="pilihjenisjabatanEdit" onchange="jenisjabatan()" readonly>
                <option value="-">Pilih Jenis Jabatan</option>
                <option value="Struktural">Struktural</option>
                <option value="Fungsional Khusus">Fungsional Khusus</option>
                <option value="Fungsional Umum">Fungsional Umum</option>
              </select> --}}
              {{-- <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small> --}}
            </div>
            
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jabatan Fungsional</label>
            <div class="col-xl-10">
              <input type="text" name="Fungsional" class="form-control" id="FungsionalEdit" readonly>
              {{-- <small><span style="color: red">Bersifat optional ( tidak wajib diisi )</span></small> --}}
            </div>
            
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Sebaran</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Sebaran" id="SebaranEdit">
                <option value="">Pilih Sebaran</option>
                <option value="Bagian Umum">Bagian Umum</option>
                <option value="Kelompok Substansi">Kelompok Substansi</option>
                <option value="Kelompok JAFUNG MEDIK PARAMEDIK">Kelompok JAFUNG MEDIK PARAMEDIK</option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Pendidikan</label>
            <div class="col-xl-10">
              {{-- <input type="text" name="Bulan" class="form-control"> --}}
              <select class="form-select" name="Pendidikan" id="PendidikanEdit">
                <option value="">Pilih Pendidikan</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="D4">D4</option>
                <option value="D3">D3</option>
                <option value="SLTA/SMK">STLA/SMK</option>
                <option value="SLTP">SLTP</option>
                <option value="SD">SD</option>
              </select>
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
        <form action="{{ url('sdm_sdm23') }}" method="POST" id="DeleteForm">
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

<!--modal tambah dinas Luar-->
<div class="modal fade" id="modal_dinasluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data Dinas Luar
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('sdm_dinasluar23') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Nama</label>
            <div class="col-xl-10">
              <input type="text" name="Nama" class="form-control" id="NamaDinasLuar">
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
@endsection
{{-- SEARCHING --}}
<script>

function Pencarian() {
  $('#Pencarian').attr('action', '/sdm_sdm23/cari')
}
//   function myFunction() {
//   var input, filter, table, tr, td, i, txtValue;
//   input = document.getElementById("myInput");
//   filter = input.value.toUpperCase();
//   table = document.getElementById("myTable");
//   tr = table.getElementsByTagName("tr");
//   for (i = 0; i < tr.length; i++) {
//     td = tr[i].getElementsByTagName("td")[1];
//     if (td) {
//       txtValue = td.textContent || td.innerText;
//       if (txtValue.toUpperCase().indexOf(filter) > -1) {
//         tr[i].style.display = "";
//       } else {
//         tr[i].style.display = "none";
//       }
//     }       
//   }
// }
</script>
{{-- PILIHAN MODAL --}}
<script>
  function jenisjabatan() {
    var pilihjenisjabatan = document.getElementById("pilihjenisjabatan").value;
    console.log(pilihjenisjabatan);
    if (pilihjenisjabatan == 'Struktural') {
      $('select[name="Fungsional"]').append('<option id="optstruktural1" value="Kepala Balai">Kepala Balai</option>\
      <option id="optstruktural2" value="Kepala Bagian Umum">Kepala Bagian Umum</option>\
      <option id="optstruktural3" value="Koordinator Substansi Program dan Evaluasi">Koordinator Substansi Program dan Evaluasi</option>\
      <option id="optstruktural4" value="Koordinator Substansi Pelayanan Veteriner">Koordinator Substansi Pelayanan Veteriner</option>\
      <option id="optstruktural5" value="Subkoordinator Substansi Kepegawain dan TU">Subkoordinator Substansi Kepegawain dan TU</option>\
      <option id="optstruktural6" value="Subkoordinator Substansi Keuangan">Subkoordinator Substansi Keuangan</option>\
      <option id="optstruktural7" value="Subkoordinator Substansi Rumah Tangga & Perlengkapan">Subkoordinator Substansi Rumah Tangga & Perlengkapan</option>\
      <option id="optstruktural8" value="Subkoordinator Substansi Program">Subkoordinator Substansi Program</option>\
      <option id="optstruktural9" value="Subkoordinator Substansi Evaluasi dan Pelaporan">Subkoordinator Substansi Evaluasi dan Pelaporan</option>\
      <option id="optstruktural10" value="Subkoordinator Pelayanan Teknis">Subkoordinator Pelayanan Teknis</option>\
      <option id="optstruktural11" value="Subkoordinator Informasi Veteriner">Subkoordinator Informasi Veteriner</option>\
      ');

      $('#optkhusus1').remove();
      $('#optkhusus2').remove(); 
      $('#optkhusus3').remove(); 
      $('#optkhusus4').remove(); 
      $('#optkhusus5').remove(); 
      $('#optkhusus6').remove(); 
      $('#optkhusus7').remove(); 
      $('#optkhusus8').remove(); 
      $('#optkhusus9').remove(); 
      $('#optkhusus10').remove();
      $('#optkhusus11').remove();
      $('#optkhusus12').remove();
      $('#optkhusus13').remove();
      $('#optkhusus14').remove();
      $('#optkhusus15').remove();

      $('#optkumum1').remove();
      $('#optkumum2').remove(); 
      $('#optkumum3').remove(); 
      $('#optkumum4').remove(); 
      $('#optkumum5').remove(); 
      $('#optkumum6').remove(); 
      $('#optkumum7').remove(); 
      $('#optkumum8').remove(); 
      $('#optkumum9').remove(); 
      $('#optkumum10').remove();
      $('#optkumum11').remove();
      $('#optkumum12').remove();
      $('#optkumum13').remove();


      // document.getElementById("struktural").innerHTML = "<option value="IV e">IV e</option>"
    } else if(pilihjenisjabatan == 'Fungsional Khusus'){
      $('select[name="Fungsional"]').append('<option id="optkhusus1" value="Medik Veteriner Madya">Medik Veteriner Madya</option>\
      <option id="optkhusus2" value="Medik Veteriner Muda">Medik Veteriner Muda</option>\
      <option id="optkhusus3" value="Medik Veteriner Pertama">Medik Veteriner Pertama</option>\
      <option id="optkhusus4" value="Paramedik Veteriner Penyelia">Paramedik Veteriner Penyelia</option>\
      <option id="optkhusus5" value="Paramedik Veteriner Pelaksana Lanjutan">Paramedik Veteriner Pelaksana Lanjutan</option>\
      <option id="optkhusus6" value="Paramedik Veteriner Terampil">Paramedik Veteriner Terampil</option>\
      <option id="optkhusus7" value="Paramedik Veteriner Pelaksana Pemula">Paramedik Veteriner Pelaksana Pemula</option>\
      <option id="optkhusus8" value="Perencana Ahli Madya">Perencana Ahli Madya</option>\
      <option id="optkhusus9" value="Perencana Ahli Muda">Perencana Ahli Muda</option>\
      <option id="optkhusus10" value="Laboran">Laboran</option>\
      <option id="optkhusus11" value="Analis Kepegawaian Ahli Muda">Analis Kepegawaian Ahli Muda</option>\
      <option id="optkhusus12" value="Arsiparis Terampil">Arsiparis Terampil</option>\
      <option id="optkhusus13" value="Analis Pengelolaan Keuangan APBN Ahli Muda">Analis Pengelolaan Keuangan APBN Ahli Muda</option>\
      <option id="optkhusus14" value="Bendahara Penerimaan">Bendahara Penerimaan</option>\
      <option id="optkhusus15" value="Pranata Keuangan APBN Terampil">Pranata Keuangan APBN Terampil</option>\
      ');
      $('#optstruktural1').remove();
      $('#optstruktural2').remove(); 
      $('#optstruktural3').remove(); 
      $('#optstruktural4').remove(); 
      $('#optstruktural5').remove(); 
      $('#optstruktural6').remove(); 
      $('#optstruktural7').remove(); 
      $('#optstruktural8').remove(); 
      $('#optstruktural9').remove(); 
      $('#optstruktural10').remove();
      $('#optstruktural11').remove();


      $('#optkumum1').remove();
      $('#optkumum2').remove(); 
      $('#optkumum3').remove(); 
      $('#optkumum4').remove(); 
      $('#optkumum5').remove(); 
      $('#optkumum6').remove(); 
      $('#optkumum7').remove(); 
      $('#optkumum8').remove(); 
      $('#optkumum9').remove(); 
      $('#optkumum10').remove();
      $('#optkumum11').remove();
      $('#optkumum12').remove();
      $('#optkumum13').remove();

    } 
    else if(pilihjenisjabatan == 'Fungsional Umum'){
      $('select[name="Fungsional"]').append('<option id="optkumum1" value="Penyusun Laporan">Penyusun Laporan</option>\
      <option id="optkumum2" value="Petugas Sarana dan Prasarana">Petugas Sarana dan Prasarana</option>\
      <option id="optkumum3" value="Pengadministrasi Keuangan">Pengadministrasi Keuangan</option>\
      <option id="optkumum4" value="Pengadministrasi Umum">Pengadministrasi Umum</option>\
      <option id="optkumum5" value="Penyusun Rencana Kegiatan dan Anggaran">Penyusun Rencana Kegiatan dan Anggaran</option>\
      <option id="optkumum6" value="Analis Kimia">Analis Kimia</option>\
      <option id="optkumum7" value="Calon Analis Kepegawaian Pertama">Calon Analis Kepegawaian Pertama</option>\
      <option id="optkumum8" value="Calon Analis Perencanaan">Calon Analis Perencanaan</option>\
      <option id="optkumum9" value="Caraka">Caraka</option>\
      <option id="optkumum10" value="Teknisi, Peralatan, Listrik & Elektronika">Teknisi, Peralatan, Listrik & Elektronika</option>\
      <option id="optkumum11" value="Pengemudi">Pengemudi</option>\
      <option id="optkumum12" value="Komandan Regu Satpam">Komandan Regu Satpam</option>\
      <option id="optkumum13" value="Petugas Perpustakaan">Petugas Perpustakaan</option>\
      ');


      $('#optstruktural1').remove();
      $('#optstruktural2').remove(); 
      $('#optstruktural3').remove(); 
      $('#optstruktural4').remove(); 
      $('#optstruktural5').remove(); 
      $('#optstruktural6').remove(); 
      $('#optstruktural7').remove(); 
      $('#optstruktural8').remove(); 
      $('#optstruktural9').remove(); 
      $('#optstruktural10').remove();
      $('#optstruktural11').remove(); 


      
      $('#optkhusus1').remove();
      $('#optkhusus2').remove(); 
      $('#optkhusus3').remove(); 
      $('#optkhusus4').remove(); 
      $('#optkhusus5').remove(); 
      $('#optkhusus6').remove(); 
      $('#optkhusus7').remove(); 
      $('#optkhusus8').remove(); 
      $('#optkhusus9').remove(); 
      $('#optkhusus10').remove();
      $('#optkhusus11').remove();
      $('#optkhusus12').remove();
      $('#optkhusus13').remove();
      $('#optkhusus14').remove();
      $('#optkhusus15').remove();

    }
}
</script>
{{-- MODAL EDIT --}}
<script>
  var data_sdm = {!! json_encode($data_sdmAll23 -> toArray())!!};
  function updateData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    document.getElementById("NamaEdit").value = result.Nama;
    document.getElementById("NipEdit").value = result.Nip;
    document.getElementById("JenisEdit").value = result.Jenis;
    document.getElementById("SebaranEdit").value = result.Sebaran;
    document.getElementById("PendidikanEdit").value = result.Pendidikan;
    document.getElementById("pilihjenisjabatanEdit").value = result.Jabatan;
    document.getElementById("FungsionalEdit").value = result.Fungsional;

    $('#editForm').attr('action', '/sdm_sdm23/' + id)
  }


  function jenisjabatanEdit() {
    var pilihjenisjabatan = document.getElementById("pilihjenisjabatanEdit").value;
    console.log(pilihjenisjabatan);
    if (pilihjenisjabatan == 'Struktural') {
      $('select[name="Fungsional"]').append('<option id="optstruktural1" value="Kepala Balai">Kepala Balai</option>\
      <option id="optstruktural2" value="Kepala Bagian Umum">Kepala Bagian Umum</option>\
      <option id="optstruktural3" value="Koordinator Substansi Program dan Evaluasi">Koordinator Substansi Program dan Evaluasi</option>\
      <option id="optstruktural4" value="Koordinator Substansi Pelayanan Veteriner">Koordinator Substansi Pelayanan Veteriner</option>\
      <option id="optstruktural5" value="Subkoordinator Substansi Kepegawain dan TU">Subkoordinator Substansi Kepegawain dan TU</option>\
      <option id="optstruktural6" value="Subkoordinator Substansi Keuangan">Subkoordinator Substansi Keuangan</option>\
      <option id="optstruktural7" value="Subkoordinator Substansi Rumah Tangga & Perlengkapan">Subkoordinator Substansi Rumah Tangga & Perlengkapan</option>\
      <option id="optstruktural8" value="Subkoordinator Substansi Program">Subkoordinator Substansi Program</option>\
      <option id="optstruktural9" value="Subkoordinator Substansi Evaluasi dan Pelaporan">Subkoordinator Substansi Evaluasi dan Pelaporan</option>\
      <option id="optstruktural10" value="Subkoordinator Pelayanan Teknis">Subkoordinator Pelayanan Teknis</option>\
      <option id="optstruktural11" value="Subkoordinator Informasi Veteriner">Subkoordinator Informasi Veteriner</option>\
      ');

      $('#optkhusus1').remove();
      $('#optkhusus2').remove(); 
      $('#optkhusus3').remove(); 
      $('#optkhusus4').remove(); 
      $('#optkhusus5').remove(); 
      $('#optkhusus6').remove(); 
      $('#optkhusus7').remove(); 
      $('#optkhusus8').remove(); 
      $('#optkhusus9').remove(); 
      $('#optkhusus10').remove();
      $('#optkhusus11').remove();
      $('#optkhusus12').remove();
      $('#optkhusus13').remove();
      $('#optkhusus14').remove();
      $('#optkhusus15').remove();

      $('#optkumum1').remove();
      $('#optkumum2').remove(); 
      $('#optkumum3').remove(); 
      $('#optkumum4').remove(); 
      $('#optkumum5').remove(); 
      $('#optkumum6').remove(); 
      $('#optkumum7').remove(); 
      $('#optkumum8').remove(); 
      $('#optkumum9').remove(); 
      $('#optkumum10').remove();
      $('#optkumum11').remove();
      $('#optkumum12').remove();
      $('#optkumum13').remove();


      // document.getElementById("struktural").innerHTML = "<option value="IV e">IV e</option>"
    } else if(pilihjenisjabatan == 'Fungsional Khusus'){
      $('select[name="Fungsional"]').append('<option id="optkhusus1" value="Medik Veteriner Madya">Medik Veteriner Madya</option>\
      <option id="optkhusus2" value="Medik Veteriner Muda">Medik Veteriner Muda</option>\
      <option id="optkhusus3" value="Medik Veteriner Pertama">Medik Veteriner Pertama</option>\
      <option id="optkhusus4" value="Paramedik Veteriner Penyelia">Paramedik Veteriner Penyelia</option>\
      <option id="optkhusus5" value="Paramedik Veteriner Pelaksana Lanjutan">Paramedik Veteriner Pelaksana Lanjutan</option>\
      <option id="optkhusus6" value="Paramedik Veteriner Terampil">Paramedik Veteriner Terampil</option>\
      <option id="optkhusus7" value="Paramedik Veteriner Pelaksana Pemula">Paramedik Veteriner Pelaksana Pemula</option>\
      <option id="optkhusus8" value="Perencana Ahli Madya">Perencana Ahli Madya</option>\
      <option id="optkhusus9" value="Perencana Ahli Muda">Perencana Ahli Muda</option>\
      <option id="optkhusus10" value="Laboran">Laboran</option>\
      <option id="optkhusus11" value="Analis Kepegawaian Ahli Muda">Analis Kepegawaian Ahli Muda</option>\
      <option id="optkhusus12" value="Arsiparis Terampil">Arsiparis Terampil</option>\
      <option id="optkhusus13" value="Analis Pengelolaan Keuangan APBN Ahli Muda">Analis Pengelolaan Keuangan APBN Ahli Muda</option>\
      <option id="optkhusus14" value="Bendahara Penerimaan">Bendahara Penerimaan</option>\
      <option id="optkhusus15" value="Pranata Keuangan APBN Terampil">Pranata Keuangan APBN Terampil</option>\
      ');
      $('#optstruktural1').remove();
      $('#optstruktural2').remove(); 
      $('#optstruktural3').remove(); 
      $('#optstruktural4').remove(); 
      $('#optstruktural5').remove(); 
      $('#optstruktural6').remove(); 
      $('#optstruktural7').remove(); 
      $('#optstruktural8').remove(); 
      $('#optstruktural9').remove(); 
      $('#optstruktural10').remove();
      $('#optstruktural11').remove();


      $('#optkumum1').remove();
      $('#optkumum2').remove(); 
      $('#optkumum3').remove(); 
      $('#optkumum4').remove(); 
      $('#optkumum5').remove(); 
      $('#optkumum6').remove(); 
      $('#optkumum7').remove(); 
      $('#optkumum8').remove(); 
      $('#optkumum9').remove(); 
      $('#optkumum10').remove();
      $('#optkumum11').remove();
      $('#optkumum12').remove();
      $('#optkumum13').remove();

    } 
    else if(pilihjenisjabatan == 'Fungsional Umum'){
      $('select[name="Fungsional"]').append('<option id="optkumum1" value="Penyusun Laporan">Penyusun Laporan</option>\
      <option id="optkumum2" value="Petugas Sarana dan Prasarana">Petugas Sarana dan Prasarana</option>\
      <option id="optkumum3" value="Pengadministrasi Keuangan">Pengadministrasi Keuangan</option>\
      <option id="optkumum4" value="Pengadministrasi Umum">Pengadministrasi Umum</option>\
      <option id="optkumum5" value="Penyusun Rencana Kegiatan dan Anggaran">Penyusun Rencana Kegiatan dan Anggaran</option>\
      <option id="optkumum6" value="Analis Kimia">Analis Kimia</option>\
      <option id="optkumum7" value="Calon Analis Kepegawaian Pertama">Calon Analis Kepegawaian Pertama</option>\
      <option id="optkumum8" value="Calon Analis Perencanaan">Calon Analis Perencanaan</option>\
      <option id="optkumum9" value="Caraka">Caraka</option>\
      <option id="optkumum10" value="Teknisi, Peralatan, Listrik & Elektronika">Teknisi, Peralatan, Listrik & Elektronika</option>\
      <option id="optkumum11" value="Pengemudi">Pengemudi</option>\
      <option id="optkumum12" value="Komandan Regu Satpam">Komandan Regu Satpam</option>\
      <option id="optkumum13" value="Petugas Perpustakaan">Petugas Perpustakaan</option>\
      ');


      $('#optstruktural1').remove();
      $('#optstruktural2').remove(); 
      $('#optstruktural3').remove(); 
      $('#optstruktural4').remove(); 
      $('#optstruktural5').remove(); 
      $('#optstruktural6').remove(); 
      $('#optstruktural7').remove(); 
      $('#optstruktural8').remove(); 
      $('#optstruktural9').remove(); 
      $('#optstruktural10').remove();
      $('#optstruktural11').remove(); 


      
      $('#optkhusus1').remove();
      $('#optkhusus2').remove(); 
      $('#optkhusus3').remove(); 
      $('#optkhusus4').remove(); 
      $('#optkhusus5').remove(); 
      $('#optkhusus6').remove(); 
      $('#optkhusus7').remove(); 
      $('#optkhusus8').remove(); 
      $('#optkhusus9').remove(); 
      $('#optkhusus10').remove();
      $('#optkhusus11').remove();
      $('#optkhusus12').remove();
      $('#optkhusus13').remove();
      $('#optkhusus14').remove();
      $('#optkhusus15').remove();

    }
}
</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_sdm = {!! json_encode($data_sdmAll23 -> toArray())!!};
  function hapusData(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    console.log(result);
    NamaPegawai = String(result.Nama);
    console.log(NamaPegawai);

    $('#DeleteForm').attr('action', '/sdm_sdm23/' + id)
  }
</script>

<script>
  var data_sdm = {!! json_encode($data_sdmAll23 -> toArray())!!};
  function dinasLuar(id) {
    var result = data_sdm.filter(obj => obj.id === id)[0];
    document.getElementById("NamaDinasLuar").value = result.Nama;
  }
</script>

