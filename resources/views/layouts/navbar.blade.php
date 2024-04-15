<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <!-- <a class="navbar-brand fonts" href="/" style="color: white;">Si MANTU</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                <button type="button" class="button" onClick="location.href='{{ route('login') }}'" style="width: 150px; height: 35px; margin: 7px; border-radius: 30px; border: 3px solid #152238; color: #152238; font-weight: bold; font-size: 15;">Login</button>
                                    <!-- <a class="nav-link logg" href="{{ route('login') }}" style="color: #152238; font-family: 'Nunito', sans-serif; font-size: 20px; font-weight: bold;">{{ __('Login') }}</a> -->
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                  <button type="button" class="button" onClick="location.href='{{ route('register') }}'" style="width: 150px; height: 35px; margin: 7px; border-radius: 30px; border: 3px solid #152238; color: #152238; font-weight: bold; font-size: 15px;">Register</button>
                                    <!-- <a class="nav-link regg" href="" style="color: #152238; font-family: 'Nunito', sans-serif; font-size: 20px; font-weight: bold;">{{ __('Register') }}</a> -->
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
      
    </div>
  </div>
</nav>