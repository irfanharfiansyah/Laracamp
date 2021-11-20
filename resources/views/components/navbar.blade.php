@extends('master')
@section('title', 'Home')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/icon/logo.png" alt="" width="187" class="p-2"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Business</a>
                </li>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
            </ul>
            @auth
            <div class="d-flex align-items-center nav-item dropdown no-arrow ">
              <div class="dropdown">
                <a class="text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Halo, <span style="font-weight: bold">{{ Auth::user()->name }}!</span>
                  <img src="{{ Auth::user()->avatar }}" alt="" class="rounded-circle" width="30">
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="bi bi-box-arrow-in-right"></i> Logout</a></li>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  {{-- <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form> --}}
                </ul>
              </div>
              {{-- <a href="#" role="button" id="dropdownMenuLink"  class="text-decoration-none text-dark dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                  Halo, <span style="font-weight: bold">{{ Auth::user()->name }}!</span>
                  <img src="{{ Auth::user()->avatar }}" alt="" class="rounded-circle" width="30">
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a href="" class="dropdown-item">My Dashboard</a></li>
                    <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a></li>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                  </ul>
              </a> --}}
          </div>
            
           
            @else
            <div class="d-flex">
                <a class="btn btn-secondary me-3" href="{{ route('login') }}" role="button">Sign In</a>
                <a class="btn btn-primary" href="#" role="button">Sign Up</a>
            </div>
            @endauth
        </div>
    </div>
</nav>