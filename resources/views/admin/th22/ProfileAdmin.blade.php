@extends('admin/th22/layouts/main')

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
                    <form action="{{ url('v22/Admin_profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <center>
                        <div class="file-input-wrapper text-center">
                            <div class="file-icon">
                            <input type="file" id="image" name="image" onchange="previewImage(event)" accept="image/png, image/gif, image/jpeg" >
                            </div>
                            <img id="preview" src="../images/{{Auth::user()->image}}" class="rounded-circle img-thumbnail" alt="Foto Profil">
                        </div>
                        </center>
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

<script>
    function previewImage(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function(){
        var preview = document.getElementById('preview');
        preview.src = reader.result;
        // preview.style.display = 'block';
    }
    reader.readAsDataURL(input.files[0]);
}
</script>
@endsection
