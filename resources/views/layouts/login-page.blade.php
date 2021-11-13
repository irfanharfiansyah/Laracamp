@extends('master')
@section('title', 'Login')

<section class="login-page">
    <div class="container-fluid">
        <div class="row h-100 ">
            <div class="col-lg-6 col-12" style="background-color: #4D1CAB">
                <div class="logo-left text-center">
                    <img src="/icon/login.png" alt="" class="img-fluid ">
                </div>
            </div>
            <div class="col-lg-6 col-12  align-self-center">
                <div class="logo-right ">
                    <img src="/icon/logo.png" alt="" class="img-fluid" width="200">
                    <p>Start Today</p>
                    <p>Because tomorrow become never</p>
                    <a href="{{ url('/') }}" class="btn btn-google">
                       <img src="/icon/ic_google.svg" alt="" class="img-fluid"> Sign In with Google
                    </a>
                    <div class="img-people mt-5">
                        <img src="/icon/people.png" alt="" class="img-fluid mt-5" width="500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
