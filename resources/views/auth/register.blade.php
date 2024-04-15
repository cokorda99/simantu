@extends('layouts/mainversi')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.9);">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end namae">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control namae-lb @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end maile">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end pword">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end passconr">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-outline reg">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-auto"></div>
      <div class="col col-lg-5" style="background-color: rgba(131, 89, 163, 0.5); height: 100vh;">
        <div class="container" style="margin-top: 10vh;">
          <h5 style="text-align: center; color: white;">Selamat Datang Di</h5>
            <h3 style="text-align: center; font-weight: bold; color: white;">Simantu BBVET Denpasar</h3>
            <p style="text-align: center; color: white;">Sistem Pemantauan Kinerja Balai Besar Veteriner Denpasar</p>
            <h4 style="text-align: center; font-weight: bold; color: white;">Daftar</h4>
            <br>
            <div class="container">
                <form method="POST" action="{{ route('register') }}">
                    <label for="" style="color: white; font-weight: bold;">Nama Lengkap</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control namae-lb @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="" style="color: white; font-weight: bold;">Alamat Email</label>
                    <div class="input-group mb-3">
                        <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Alamat Email" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="" style="color: white; font-weight: bold;">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <label for="" style="color: white; font-weight: bold;">Konfirmasi Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">
                    </div>
                    <br>
                    <div class="container" style="text-align: center; width: 300px;">
                        <input type="submit" class="btn btn-outline-light btn-sm btn-block" value="Daftar" style="border-radius: 25px; border: 2px solid white;">
                    </div>
                </form>
                <div class="container" style="text-align: center; margin-top: 15px;">
                    <h5 style="font-size: 15px; color: white;">Sudah Punya Akun?</h5>
                    <h5 style="font-size: 15px; color:white;" onClick="location.href='{{ route('login') }}'" >Login</h5>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
