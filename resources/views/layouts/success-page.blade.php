@extends('master')
@section('title', 'Checkout Succes')
@include('components.navbar')
@section('body')
<section class="success-page">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 col-12 text-center">
                <img src="/icon/ill_checkout.png" alt="" class="img-fluid" width="380">
                <p>WHAT A DAY!</p>
                <p>Berhasil Checkout</p>
                <a href="#" class="btn btn-primary mb-5">My Dashboard</a>
             
            </div>
        </div>
    </div>
</section>
@endsection
