@extends('master')
@section('title', 'Home')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/home"><img src="/icon/logo.png" alt="" width="187" class="p-2"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        </ul>
        <div class="d-flex">
            <a class="btn btn-secondary me-3" href="{{ route('login') }}" role="button">Sign In</a>
            <a class="btn btn-primary" href="#" role="button">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>