@extends('admin/th24/layouts/main')

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
                    <form action="{{ url('v24/Admin_profile') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <b><label for="current_password">Edit Password</label></b>
                            <input type="checkbox" id="showAdditionalFields" style="width: 50px;" onchange="toggleAdditionalFields()">
                            <input type="text" id="editpasswordcheck" value="" name="editpasswordcheck" hidden>
                        </div>
                        <div id="additionalFields" class="hidden">
                            <label for="current_password">Password Sekarang:</label>
                            <div class="password-container">
                                <input class="form-control" id="current_password" type="password" name="current_password" placeholder="Masukkan Password Sekarang">
                                <i class="toggle-password fa fa-eye" onclick="togglePasswordVisibility()"></i>
                            </div>
                            <label for="new_password">Password Baru:</label>
                            <div class="password-container">
                                <input class="form-control" id="new_password" type="password" name="new_password" placeholder="Masukkan Password Baru">
                                <i class="toggle-password1 fa fa-eye" onclick="togglePasswordVisibility1()"></i>
                            </div>
                            <label for="new_password_confirmation">Konfirmasi Password Baru:</label>
                            <div class="password-container">
                                <input class="form-control" id="new_password_confirmation" type="password" name="new_password_confirmation" placeholder="Konfirmasi Password Baru">
                                <i class="toggle-password2 fa fa-eye" onclick="togglePasswordVisibility2()"></i>
                            </div>
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

<script>
    function toggleAdditionalFields() {
        var additionalFieldsDiv = document.getElementById("additionalFields");
        var checkbox = document.getElementById("showAdditionalFields");
        var check_curentp = document.getElementById("current_password");
        var check_newp = document.getElementById("new_password");
        var check_confirmp = document.getElementById("new_password_confirmation");

        var editpasswordvalue = document.getElementById("editpasswordcheck");

        if (checkbox.checked) {
            additionalFieldsDiv.classList.remove("hidden");
            check_curentp.setAttribute('required','required');
            check_newp.setAttribute('required','required');
            check_confirmp.setAttribute('required','required');
            editpasswordvalue.value = "true";
        } else {
            additionalFieldsDiv.classList.add("hidden");
            check_curentp.removeAttribute('required');
            check_newp.removeAttribute('required');
            check_confirmp.removeAttribute('required');
            editpasswordvalue.value = null;
        }
    }
</script>

<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("current_password");
        var icon = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }

    function togglePasswordVisibility1() {
        var passwordField = document.getElementById("new_password");
        var icon = document.querySelector(".toggle-password1");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }

    function togglePasswordVisibility2() {
        var passwordField = document.getElementById("new_password_confirmation");
        var icon = document.querySelector(".toggle-password2");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
@endsection
