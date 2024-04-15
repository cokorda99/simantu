@extends('layouts/mainversi')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.9);">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end email">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror email-form" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end passwor">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label remember" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                                <button type="submit" class="btn btn-outline btn-login">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                @if (Route::has('password.request'))
                                    <a class="btn-link btn-forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

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
        <div class="container" style="margin-top: 15vh;">
          <h5 style="text-align: center; color: white;">Selamat Datang Di</h5>
            <h3 style="text-align: center; font-weight: bold; color: white;">Simantu BBVET Denpasar</h3>
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
                    <div class="input-group mb-3">
                        <input type="password" name="password"class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 15px;">
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
                <div class="container" style="text-align: center; margin-top: 15px;">
                    <h5 style="font-size: 15px; color: white;">Belum Punya Akun?</h5>
                    <h5 style="font-size: 15px; color:white;" onClick="location.href='{{ route('register') }}'" >Daftar</h5>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
	
@endsection
