@extends('admin/th23/layouts/main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Profil Admin</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('v23/Admin_profile') }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group text-center">
                            <img src="../assets/dist/img/avatar5.png" class="rounded-circle img-thumbnail" alt="Foto Profil" width="150">
                        </div>
                        <div class="form-group" hidden>
                            <label for="nama">ID:</label>
                            
                            <input type="text" class="form-control" id="id" placeholder="Masukkan Nama Anda" value="{{Auth::user()->id}}" name="id">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" value="{{Auth::user()->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" value="{{Auth::user()->email}}" readonly>
                        </div>
                        <!-- <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                        </div> -->
                            <!-- {{Auth::user()}} -->
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- {{ $data_user }} -->
  </section>
</div>
@endsection
