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
                        <p class="text-uppercase">{{ $camp->title }}</p>
                        <p>Bootcamp ini akan mengajak Anda untuk <br>
                            belajar penuh mulai dari pengenalan dasar<br>
                            sampai membangun sebuah projek asli</p>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('store', $camp->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }} " >
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email Address</label> 
                                <input name="email" type="email" class="form-control" value="{{ Auth::user()->email }} " readonly>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Occupation</label>
                                @if (Auth::user()->occupation !== null)
                                <input name="occu" type="text" class="form-control" value="{{ Auth::user()->occupation }} ">
                                @else
                                <input name="occu" type="text" class="form-control">
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Card Number</label>
                                <input name="card_number" type="number" class="form-control">
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Expired</label>
                                        <input name="expired" type="month" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">CVC</label>
                                        <input name="cvc" maxlength="3"  type="number" class="form-control" oninput="this.value=this.value.slice(0,this.maxLength)" >
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
