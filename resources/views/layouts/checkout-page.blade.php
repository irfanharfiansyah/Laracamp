@extends('master')
@section('title', 'Checkout')
@include('components.navbar')
@section('body')

<section class="checkout-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="title-checkout text-center">
                    <p>YOUR FUTURE CAREER</p>
                    <p>Checkout Bootcamp</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-9 col-12">
                <div class="row ">
                    <div class="title-gb col-lg-5 col-12">
                        <img src="/image/item.png" alt="" class="img-fluid" width="500">
                        <p>GILA BELAJAR</p>
                        <p>Bootcamp ini akan mengajak Anda untuk <br>
                            belajar penuh mulai dari pengenalan dasar<br>
                            sampai membangun sebuah projek asli</p>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('success') }}" class="basic-form">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Expired</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">CVC</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="/icon/pay.png" alt="" width="13"> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
