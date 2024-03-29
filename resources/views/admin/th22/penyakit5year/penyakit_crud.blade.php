@extends('admin/th22/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PENGATURAN PENYAKIT 5 TAHUN TERAKHIR SIMANTU
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Jumlah Penyakit 5 Tahun Terakhir</h3><br><br>
            @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_tambah">
              Tambah
            </button>
            @endif
            <a title="Pengaturan List Penyakit" href="/data_Pilihan_Penyakit"><button class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i>  Pengaturan List Penyakit</button></a>
            <br>
            <br>
            <label style="width: 5%; float: left;">Filter :</label>
            <div class="input-icons" style="width: 10%;float: left;">
              <select id="pilihProvinsiFilter" onchange="provinsiselectFilter()" class="form-control">
                <option value="-">Pilih Provinsi</option>
                <option value="BALI">Bali</option>
                <option value="NTB">NTB</option>
                <option value="NTT">NTT</option>
              </select>
            </div>
            <div style="width: 15%; float: left;">
              <select name="KabupatenFilter" class="form-control" id="pilihKabupatenFilter" onchange="kabupatenselectFilter()">
                <option value="-">Pilih Kabupaten</option>
              </select>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="TabelPenyakit5Year" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kabupaten</th>
                  <th>Jenis Penyakit</th>
                  <th>2018</th>
                  <th>2019</th>
                  <th>2020</th>
                  <th>2021</th>
                  <th>2022</th>
                  @if (auth::user()->email == 'admin@gmail.com' || auth::user()->email == 'adminmonev@gmail.com')
                  <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                <p hidden> {{ $i = 1 }}</p>
                {{-- @php
                    echo $kabupatenPilih
                @endphp --}}
                @foreach ($data_penyakit5year as $key=>$value)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $value-> Kabupaten}}</td>
                  <td>{{ $value-> Penyakit}}</td>
                  <td>{{ $value-> Th2018}}</td>
                  <td>{{ $value-> Th2019}}</td>
                  <td>{{ $value-> Th2020}}</td>
                  <td>{{ $value-> Th2021}}</td>
                  <td>{{ $value-> Th2022}}</td>
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Tambah Data Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('pengaturan_Penyakit_terakhir') }}" method="POST">
          @csrf
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Pilih Provinsi</label>
            <div class="col-xl-10">
                <select class="form-select" id="pilihProvinsi" onchange="provinsiselect()">
                  <option value="-">Pilih Provinsi</option>
                  <option value="BALI">BALI</option>
                  <option value="NTB">NTB</option>
                  <option value="NTT">NTT</option>
                </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Pilih Kabupaten</label>
            <div class="col-xl-10">
                <select class="form-control" name="Kabupaten">
                    <option value="-">Pilih Kabupaten</option>
                  </select>
            </div>

          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Penyakit</label>
            <div class="col-xl-10">
              <select class="form-select" name="Penyakit">
                <option value="-">Pilih Jenis Penyakit</option>
                @foreach ($data_jenispenyakit as $key=>$value)
                <option value="{{ $value-> Nama_Penyakit}}">{{ $value-> Nama_Penyakit}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <center>
            <span style="color:red;">Jumlah Kasus 5 tahun terakhir</span>
          </center>
          <br>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2018</label>
            <div class="col-xl-10">
              <input type="number" name="Th2018" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2019</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2019" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2020</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2020" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2021</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2021" class="form-control">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2022</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2022" class="form-control">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Edit Data Penyakit
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('pengaturan_Penyakit_terakhir') }}" method="POST" id="editForm">
          @csrf
          {{-- {{method_field('PUT')}} --}}
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Pilih Kabupaten</label>
            <div class="col-xl-10">
                <input type="text" id="KabupatenEdit" name="Kabupaten" class="form-control" readonly>
            </div>

          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Jenis Penyakit</label>
            <div class="col-xl-10">
              <input type="text" id="PenyakitEdit" name="Penyakit" class="form-control" readonly>
            </div>
          </div>
          <center>
            <span style="color:red;">Jumlah Kasus 5 tahun terakhir</span>
          </center>
          <br>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2018</label>
            <div class="col-xl-10">
              <input type="number" name="Th2018" class="form-control" id="Th2018Edit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2019</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2019" class="form-control" id="Th2019Edit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2020</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2020" class="form-control" id="Th2020Edit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2021</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2021" class="form-control" id="Th2021Edit">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="inputEmail3" class="col-xl-2 col-form-label">Tahun 2022</label>
            <div class="col-xl-10">
              <input  type="number" name="Th2022" class="form-control" id="Th2022Edit">
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
        <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel">Hapus Data Penyakit 5 Tahun Terakhir
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <h6 style="text-align: justify;">Apakah Anda yakin ingin menghapus data Penyakit 5 Tahun Terakhir ?, Data yang sudah dihapus tidak dapat dikembalikan lagi  </h6>
        </center>
        <form action="{{ url('pengaturan_Penyakit_terakhir') }}" method="POST" id="DeleteForm">
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
{{-- PILIHAN MODAL --}}
<script>
    function provinsiselect() {
      var pilihprovinsi = document.getElementById("pilihProvinsi").value;
      console.log(pilihprovinsi);
      if (pilihprovinsi == 'BALI') {
        $('select[name="Kabupaten"]').append('<option id="kabupatenBali1" value="Badung">Kabupaten Badung</option>\
        <option id="kabupatenBali2" value="Bangli">Kabupaten Bangli</option>\
        <option id="kabupatenBali3" value="Buleleng">Kabupaten Buleleng</option>\
        <option id="kabupatenBali4" value="Gianyar">Kabupaten Gianyar</option>\
        <option id="kabupatenBali5" value="Jembrana">Kabupaten Jembrana</option>\
        <option id="kabupatenBali6" value="Karangasem">Kabupaten Karangasem</option>\
        <option id="kabupatenBali7" value="Klungkung">Kabupaten Klungkung</option>\
        <option id="kabupatenBali8" value="Tabanan">Kabupaten Tabanan</option>\
        <option id="kabupatenBali9" value="Denpasar">Kota Denpasar</option>\
        ');
  
        $('#kabupatenNTB1').remove();
        $('#kabupatenNTB2').remove(); 
        $('#kabupatenNTB3').remove(); 
        $('#kabupatenNTB4').remove(); 
        $('#kabupatenNTB5').remove(); 
        $('#kabupatenNTB6').remove(); 
        $('#kabupatenNTB7').remove(); 
        $('#kabupatenNTB8').remove(); 
        $('#kabupatenNTB9').remove(); 
        $('#kabupatenNTB10').remove();
  
        $('#kabupatenNTT1').remove();
        $('#kabupatenNTT2').remove(); 
        $('#kabupatenNTT3').remove(); 
        $('#kabupatenNTT4').remove(); 
        $('#kabupatenNTT5').remove(); 
        $('#kabupatenNTT6').remove(); 
        $('#kabupatenNTT7').remove(); 
        $('#kabupatenNTT8').remove(); 
        $('#kabupatenNTT9').remove(); 
        $('#kabupatenNTT10').remove();
        $('#kabupatenNTT11').remove();
        $('#kabupatenNTT12').remove();
        $('#kabupatenNTT13').remove();
  
  
        // document.getElementById("struktural").innerHTML = "<option value="IV e">IV e</option>"
      } else if(pilihprovinsi == 'NTB'){
        $('select[name="Kabupaten"]').append('<option id="kabupatenNTB1" value="Bima">Kabupaten Bima</option>\
        <option id="kabupatenNTB2" value="Dompu">Kabupaten Dompu</option>\
        <option id="kabupatenNTB3" value="Lombok Barat">Kabupaten Lombok Barat</option>\
        <option id="kabupatenNTB4" value="Lombok Tengah">Kabupaten Lombok Tengah</option>\
        <option id="kabupatenNTB5" value="Lombok Timur">Kabupaten Lombok Timur</option>\
        <option id="kabupatenNTB6" value="Lombok Utara">Kabupaten Lombok Utara</option>\
        <option id="kabupatenNTB7" value="Sumbawa">Kabupaten Sumbawa</option>\
        <option id="kabupatenNTB8" value="Sumbawa Barat">Kabupaten Sumbawa Barat</option>\
        <option id="kabupatenNTB9" value="Kota Bima">Kota Bima</option>\
        <option id="kabupatenNTB10" value="Kota Mataram">Kota Mataram</option>\
        ');
        $('#kabupatenBali1').remove();
        $('#kabupatenBali2').remove(); 
        $('#kabupatenBali3').remove(); 
        $('#kabupatenBali4').remove(); 
        $('#kabupatenBali5').remove(); 
        $('#kabupatenBali6').remove(); 
        $('#kabupatenBali7').remove(); 
        $('#kabupatenBali8').remove(); 
        $('#kabupatenBali9').remove(); 
  
  
        $('#kabupatenNTT1').remove();
        $('#kabupatenNTT2').remove(); 
        $('#kabupatenNTT3').remove(); 
        $('#kabupatenNTT4').remove(); 
        $('#kabupatenNTT5').remove(); 
        $('#kabupatenNTT6').remove(); 
        $('#kabupatenNTT7').remove(); 
        $('#kabupatenNTT8').remove(); 
        $('#kabupatenNTT9').remove(); 
        $('#kabupatenNTT10').remove();
        $('#kabupatenNTT11').remove();
        $('#kabupatenNTT12').remove(); 
        $('#kabupatenNTT13').remove(); 
        $('#kabupatenNTT14').remove(); 
        $('#kabupatenNTT15').remove(); 
        $('#kabupatenNTT16').remove(); 
        $('#kabupatenNTT17').remove(); 
        $('#kabupatenNTT18').remove(); 
        $('#kabupatenNTT19').remove(); 
        $('#kabupatenNTT20').remove();
        $('#kabupatenNTT21').remove(); 
        $('#kabupatenNTT22').remove();
  
      } 
      else if(pilihprovinsi == 'NTT'){
        $('select[name="Kabupaten"]').append('<option id="kabupatenNTT1" value="Alor">Kabupaten Alor</option>\
        <option id="kabupatenNTT2" value="Belu">Kabupaten Belu</option>\
        <option id="kabupatenNTT3" value="Ende">Kabupaten Ende</option>\
        <option id="kabupatenNTT4" value="Flores Timur">Kabupaten Flores Timur</option>\
        <option id="kabupatenNTT5" value="Kupang">Kabupaten Kupang</option>\
        <option id="kabupatenNTT6" value="Lembata">Kabupaten Lembata</option>\
        <option id="kabupatenNTT7" value="Malaka">Kabupaten Malaka</option>\
        <option id="kabupatenNTT8" value="Manggarai">Kabupaten Manggarai</option>\
        <option id="kabupatenNTT9" value="Manggarai Barat">Kabupaten Manggarai Barat</option>\
        <option id="kabupatenNTT10" value="Manggarai Timur">Kabupaten Manggarai Timur</option>\
        <option id="kabupatenNTT11" value="Nagekeo">Kabupaten Nagekeo</option>\
        <option id="kabupatenNTT12" value="Ngada">Kabupaten Ngada</option>\
        <option id="kabupatenNTT13" value="Rote Ndao">Kabupaten Rote Ndao</option>\
        <option id="kabupatenNTT14" value="Sabu Raijua">Kabupaten Sabu Raijua</option>\
        <option id="kabupatenNTT15" value="Sikka">Kabupaten Sikka</option>\
        <option id="kabupatenNTT16" value="Sumba Barat">Kabupaten Sumba Barat</option>\
        <option id="kabupatenNTT17" value="Sumba Barat Daya">Kabupaten Sumba Barat Daya</option>\
        <option id="kabupatenNTT18" value="Sumba Tengah">Kabupaten Sumba Tengah</option>\
        <option id="kabupatenNTT19" value="Sumba Timur">Kabupaten Sumba Timur</option>\
        <option id="kabupatenNTT20" value="Timor Tengah">Kabupaten Timor Tengah Selatan</option>\
        <option id="kabupatenNTT21" value="Timor Tengah Utara">Kabupaten Timor Tengah Utara</option>\
        <option id="kabupatenNTT22" value="Kota Kupang">Kota Kupang</option>\
        ');
  
  
        $('#kabupatenBali1').remove();
        $('#kabupatenBali2').remove(); 
        $('#kabupatenBali3').remove(); 
        $('#kabupatenBali4').remove(); 
        $('#kabupatenBali5').remove(); 
        $('#kabupatenBali6').remove(); 
        $('#kabupatenBali7').remove(); 
        $('#kabupatenBali8').remove(); 
        $('#kabupatenBali9').remove(); 
  
        
        $('#kabupatenNTB1').remove();
        $('#kabupatenNTB2').remove(); 
        $('#kabupatenNTB3').remove(); 
        $('#kabupatenNTB4').remove(); 
        $('#kabupatenNTB5').remove(); 
        $('#kabupatenNTB6').remove(); 
        $('#kabupatenNTB7').remove(); 
        $('#kabupatenNTB8').remove(); 
        $('#kabupatenNTB9').remove(); 
        $('#kabupatenNTB10').remove();
  
      }
  }

  // PILIHAN FILTER
  function provinsiselectFilter() {
      var pilihprovinsi = document.getElementById("pilihProvinsiFilter").value;
      console.log(pilihprovinsi);
      if (pilihprovinsi == 'BALI') {
        $('select[name="KabupatenFilter"]').append('<option id="kabupatenBali1" value="Badung">Kabupaten Badung</option>\
        <option id="kabupatenBali2" value="Bangli">Kabupaten Bangli</option>\
        <option id="kabupatenBali3" value="Buleleng">Kabupaten Buleleng</option>\
        <option id="kabupatenBali4" value="Gianyar">Kabupaten Gianyar</option>\
        <option id="kabupatenBali5" value="Jembrana">Kabupaten Jembrana</option>\
        <option id="kabupatenBali6" value="Karangasem">Kabupaten Karangasem</option>\
        <option id="kabupatenBali7" value="Klungkung">Kabupaten Klungkung</option>\
        <option id="kabupatenBali8" value="Tabanan">Kabupaten Tabanan</option>\
        <option id="kabupatenBali9" value="Denpasar">Kota Denpasar</option>\
        ');
  
        $('#kabupatenNTB1').remove();
        $('#kabupatenNTB2').remove(); 
        $('#kabupatenNTB3').remove(); 
        $('#kabupatenNTB4').remove(); 
        $('#kabupatenNTB5').remove(); 
        $('#kabupatenNTB6').remove(); 
        $('#kabupatenNTB7').remove(); 
        $('#kabupatenNTB8').remove(); 
        $('#kabupatenNTB9').remove(); 
        $('#kabupatenNTB10').remove();
  
        $('#kabupatenNTT1').remove();
        $('#kabupatenNTT2').remove(); 
        $('#kabupatenNTT3').remove(); 
        $('#kabupatenNTT4').remove(); 
        $('#kabupatenNTT5').remove(); 
        $('#kabupatenNTT6').remove(); 
        $('#kabupatenNTT7').remove(); 
        $('#kabupatenNTT8').remove(); 
        $('#kabupatenNTT9').remove(); 
        $('#kabupatenNTT10').remove();
        $('#kabupatenNTT11').remove();
        $('#kabupatenNTT12').remove();
        $('#kabupatenNTT13').remove();
  
  
        // document.getElementById("struktural").innerHTML = "<option value="IV e">IV e</option>"
      } else if(pilihprovinsi == 'NTB'){
        $('select[name="KabupatenFilter"]').append('<option id="kabupatenNTB1" value="Bima">Kabupaten Bima</option>\
        <option id="kabupatenNTB2" value="Dompu">Kabupaten Dompu</option>\
        <option id="kabupatenNTB3" value="Lombok Barat">Kabupaten Lombok Barat</option>\
        <option id="kabupatenNTB4" value="Lombok Tengah">Kabupaten Lombok Tengah</option>\
        <option id="kabupatenNTB5" value="Lombok Timur">Kabupaten Lombok Timur</option>\
        <option id="kabupatenNTB6" value="Lombok Utara">Kabupaten Lombok Utara</option>\
        <option id="kabupatenNTB7" value="Sumbawa">Kabupaten Sumbawa</option>\
        <option id="kabupatenNTB8" value="Sumbawa Barat">Kabupaten Sumbawa Barat</option>\
        <option id="kabupatenNTB9" value="Kota Bima">Kota Bima</option>\
        <option id="kabupatenNTB10" value="Kota Mataram">Kota Mataram</option>\
        ');
        $('#kabupatenBali1').remove();
        $('#kabupatenBali2').remove(); 
        $('#kabupatenBali3').remove(); 
        $('#kabupatenBali4').remove(); 
        $('#kabupatenBali5').remove(); 
        $('#kabupatenBali6').remove(); 
        $('#kabupatenBali7').remove(); 
        $('#kabupatenBali8').remove(); 
        $('#kabupatenBali9').remove(); 
  
  
        $('#kabupatenNTT1').remove();
        $('#kabupatenNTT2').remove(); 
        $('#kabupatenNTT3').remove(); 
        $('#kabupatenNTT4').remove(); 
        $('#kabupatenNTT5').remove(); 
        $('#kabupatenNTT6').remove(); 
        $('#kabupatenNTT7').remove(); 
        $('#kabupatenNTT8').remove(); 
        $('#kabupatenNTT9').remove(); 
        $('#kabupatenNTT10').remove();
        $('#kabupatenNTT11').remove();
        $('#kabupatenNTT12').remove(); 
        $('#kabupatenNTT13').remove(); 
        $('#kabupatenNTT14').remove(); 
        $('#kabupatenNTT15').remove(); 
        $('#kabupatenNTT16').remove(); 
        $('#kabupatenNTT17').remove(); 
        $('#kabupatenNTT18').remove(); 
        $('#kabupatenNTT19').remove(); 
        $('#kabupatenNTT20').remove();
        $('#kabupatenNTT21').remove(); 
        $('#kabupatenNTT22').remove();
  
      } 
      else if(pilihprovinsi == 'NTT'){
        $('select[name="KabupatenFilter"]').append('<option id="kabupatenNTT1" value="Alor">Kabupaten Alor</option>\
        <option id="kabupatenNTT2" value="Belu">Kabupaten Belu</option>\
        <option id="kabupatenNTT3" value="Ende">Kabupaten Ende</option>\
        <option id="kabupatenNTT4" value="Flores Timur">Kabupaten Flores Timur</option>\
        <option id="kabupatenNTT5" value="Kupang">Kabupaten Kupang</option>\
        <option id="kabupatenNTT6" value="Lembata">Kabupaten Lembata</option>\
        <option id="kabupatenNTT7" value="Malaka">Kabupaten Malaka</option>\
        <option id="kabupatenNTT8" value="Manggarai">Kabupaten Manggarai</option>\
        <option id="kabupatenNTT9" value="Manggarai Barat">Kabupaten Manggarai Barat</option>\
        <option id="kabupatenNTT10" value="Manggarai Timur">Kabupaten Manggarai Timur</option>\
        <option id="kabupatenNTT11" value="Nagekeo">Kabupaten Nagekeo</option>\
        <option id="kabupatenNTT12" value="Ngada">Kabupaten Ngada</option>\
        <option id="kabupatenNTT13" value="Rote Ndao">Kabupaten Rote Ndao</option>\
        <option id="kabupatenNTT14" value="Sabu Raijua">Kabupaten Sabu Raijua</option>\
        <option id="kabupatenNTT15" value="Sikka">Kabupaten Sikka</option>\
        <option id="kabupatenNTT16" value="Sumba Barat">Kabupaten Sumba Barat</option>\
        <option id="kabupatenNTT17" value="Sumba Barat Daya">Kabupaten Sumba Barat Daya</option>\
        <option id="kabupatenNTT18" value="Sumba Tengah">Kabupaten Sumba Tengah</option>\
        <option id="kabupatenNTT19" value="Sumba Timur">Kabupaten Sumba Timur</option>\
        <option id="kabupatenNTT20" value="Timor Tengah">Kabupaten Timor Tengah Selatan</option>\
        <option id="kabupatenNTT21" value="Timor Tengah Utara">Kabupaten Timor Tengah Utara</option>\
        <option id="kabupatenNTT22" value="Kota Kupang">Kota Kupang</option>\
        ');
  
  
        $('#kabupatenBali1').remove();
        $('#kabupatenBali2').remove(); 
        $('#kabupatenBali3').remove(); 
        $('#kabupatenBali4').remove(); 
        $('#kabupatenBali5').remove(); 
        $('#kabupatenBali6').remove(); 
        $('#kabupatenBali7').remove(); 
        $('#kabupatenBali8').remove(); 
        $('#kabupatenBali9').remove(); 
  
        
        $('#kabupatenNTB1').remove();
        $('#kabupatenNTB2').remove(); 
        $('#kabupatenNTB3').remove(); 
        $('#kabupatenNTB4').remove(); 
        $('#kabupatenNTB5').remove(); 
        $('#kabupatenNTB6').remove(); 
        $('#kabupatenNTB7').remove(); 
        $('#kabupatenNTB8').remove(); 
        $('#kabupatenNTB9').remove(); 
        $('#kabupatenNTB10').remove();
  
      }
  }


  function kabupatenselectFilter() {
    var input = document.getElementById("pilihKabupatenFilter");
    filter = input.value.toUpperCase();
    console.log(filter);
    table = document.getElementById("TabelPenyakit5Year");
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


{{-- MODAL EDIT --}}
<script>
  var data_penyakit5year= {!! json_encode($data_penyakit5year -> toArray())!!};
  
  function updateData(id) {
    var result = data_penyakit5year.filter(obj => obj.id === id)[0];
    document.getElementById("KabupatenEdit").value = result.Kabupaten;
    document.getElementById("PenyakitEdit").value = result.Penyakit;
    document.getElementById("Th2018Edit").value = result.Th2018;
    document.getElementById("Th2019Edit").value = result.Th2019;
    document.getElementById("Th2020Edit").value = result.Th2020;
    document.getElementById("Th2021Edit").value = result.Th2021;
    document.getElementById("Th2022Edit").value = result.Th2022;

    $('#editForm').attr('action', '/pengaturan_Penyakit_terakhir/' + id)
  }

</script>

{{-- MODAL HAPUS --}}
<script>
  var NamaPegawai = '';
  var data_penyakit5year= {!! json_encode($data_penyakit5year -> toArray())!!};
  function hapusData(id) {
    var result = data_penyakit5year.filter(obj => obj.id === id)[0];
    $('#DeleteForm').attr('action', '/pengaturan_Penyakit_terakhir/' + id)
  }
</script>