@extends('layouts/mainversi')

@section('content')

<div class="container-fluid">
@if ($errors->any())
<script>
        Swal.fire({
            title: 'Error',
            text: 'Email atau Password salah!',
            icon: 'error',
            confirmButtonText: 'Okay'
        });
    </script>
@endif
    <div class="row">
      <div class="col"></div>
      <div class="col-md-auto"></div>
      <div class="col col-lg-5" style="background-color: rgba(131, 89, 163, 0.5); height: 100vh;">
        <div class="container" style="margin-top: 15vh;">
          <h5 style="text-align: center; color: white;">Selamat Datang Di</h5>
            <h3 style="text-align: center; font-weight: bold; color: white;">SIMANTU BBVET Denpasar</h3>
            <p style="text-align: center; color: white;">Sistem Pemantauan Kinerja Balai Besar Veteriner Denpasar</p>
            <h4 style="text-align: center; font-weight: bold; color: white;">Login</h4>
            <br>
            <div class="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="" style="color: white; font-weight: bold;">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror email-form" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;" >
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="" style="color: white; font-weight: bold;">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password"class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">
                        <i class="toggle-password fa fa-eye" onclick="togglePasswordVisibility()" style="color:purple;"></i>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <br>
                    <div class="container" style="text-align: center; width: 300px;">
                        <input type="submit" class="btn btn-outline-light btn-sm btn-block" value="Login" name="login" style="border-radius: 25px; border: 2px solid white;">
                    </div>
                </form>
                <div class="container" style="text-align: center; margin-top: 15px;" hidden>
                    <h5 style="font-size: 15px; color: white;">Belum Punya Akun?</h5>
                    <h5 style="font-size: 15px; color:white;" onClick="location.href='{{ route('register') }}'" >Daftar</h5>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script>
        function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
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
</script>
	
@endsection
