@extends('master')
@section('title', 'haloo')
@include('components.navbar')
@section('body')
<section class="banner">
    <div class="container">
        <div class="txt-sec1">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row align-items-center">
                        <div class="copywriting col-lg-6  col-12">
                            <p class="text-green">LEARN FROM EXPERTS</p>
                            <p>Start Your<span class="text-purple"> Developer<br>Journey</span> Today</p>
                            <p>Our bootcamp is helping junior developers who <br>are really passionate in the
                                programming.</p>
                            <a href="#" class="btn btn-primary ">Get Started</a>
                        </div>
                        <div class="banner-img col-lg-6 col-12">
                            <img src="/image/banner.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brand">
                <div class="col-lg-12 text-center">
                    <img src="/icon/brand.png" alt="" class="img-fluid" width="700">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefit">
    <div class="container">
        <div class="row">
            <div class="header col-lg-12 col-12 text-center">
                <p class="text-green">OUR SUPER BENEFITS</p>
                <p>Learn Faster & Better</p>
            </div>
        </div>
        <div class="item-benefit">
            <div class="row text-center">
                <div class="ben1 col-lg-3 col-sm-6 col-12">
                    <img src="/icon/ic_globe.png" alt="" class="img-fluid" width="50">
                    <p>Diversity</p>
                    <p>Learn from anyone around the <br> world and get a new skills</p>
                </div>
                <div class="ben2 col-lg-3 col-sm-6 col-12">
                    <img src="/icon/ic_globe2.png" alt="" class="img-fluid" width="50">
                    <p>A.I Guideline</p>
                    <p>Lara will help you to choose <br>
                        which path that suitable for you</p>
                </div>
                <div class="ben3 col-lg-3 col-sm-6 col-12">
                    <img src="/icon/ic_globe3.png" alt="" class="img-fluid" width="50">
                    <p>1-1 Mentoring</p>
                    <p>We will ensure that you will get <br>
                        what you really do need</p>
                </div>
                <div class="ben4 col-lg-3 col-sm-6 col-12">
                    <img src="/icon/ic_globe4.png" alt="" class="img-fluid" width="50">
                    <p>Future Job</p>
                    <p>Get your dream job in your dream <br>
                        company together with uss</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="step">
    <div class="container ">
        <div class="row  align-items-center justify-content-center pb-90 ">
            <div class="col-lg-6 col-12 text-center  wrap-image pl-150">
                <img src="/image/step1.png" alt="" class="img-fluid " width="358">
            </div>
            <div class="col-lg-6 col-12 pl-50">
                <p>BETTER CAREER</p>
                <p>Prepare The Journey</p>
                <p>We do really care to our students’ future career <br>
                    so it would be good if you are taking a quick interview</p>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="row  align-items-center justify-content-center pb-90">
            <div class="col-lg-6 col-12 text-center wrap-image pl-150">
                <img src="/image/step2.png" alt="" class="img-fluid " width="358">
            </div>
            <div class="col-lg-6 col-12 pl-50">
                <p>STUDY HARDER</p>
                <p>Finish The Project</p>
                <p>Each of you will be joining the private group and also <br>
                    working together with team members on project</p>
                <a href="#" class="btn btn-secondary">View Demo</a>
            </div>
        </div>
        <div class="row  align-items-center justify-content-center pb-90">
            <div class="col-lg-6 col-12  text-center wrap-image pl-150">
                <img src="/image/step3.png" alt="" class="img-fluid " width="358">
            </div>
            <div class="col-lg-6 col-12 pl-50">
                <p>END GAME</p>
                <p>Big Demo Day</p>
                <p>Learn how to speaking in public to demonstrate your <br>
                    final project and receive the important feedbacks</p>
                <a href="#" class="btn btn-secondary">Showcase</a>
            </div>
        </div>
    </div>
</section>

<section class="pricing ">
    <div class="container">
        <div class="row pb-90 ">
            <div class="copywriting col-lg-5 col-12 mt-50" style="margin-top: 170px">
                <p class="text-green">GOOD INVESTMENT</p>
                <p>Start Your Journey</p>
                <p>We do have a couple of plans that might fit for you. <br>
                    Kindly download our full syallbus below.</p>
                <a href="#" class="btn btn-green">View Syllabus</a>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row ">
                    <div class="col-lg-6 col-12">
                        <div class="table-pg">
                            <p class="text-center text-green mb-4">GILA BELAJAR</p>
                            <p class="price text-center mb-5">$280K</p>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Pro Techstack Kit</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>iMac Pro 2021 & Display</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>1-1 Mentoring Program</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Final Project Certificate</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Offline Course Videos</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Future Job Opportinity</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Premium Design Kit</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Website Builder</p>
                            </div>
                            <p><a href="{{ route('checkout') }}" class="btn btn-primary w-100">Take This Plan</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-bm">
                            <p class="text-center text-green mb-4">BARU MULAI</p>
                            <p class="price text-center mb-5">$140K</p>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>1-1 Mentoring Program</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Final Project Certificate</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Offline Course Videos</p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="/icon/ic_check.svg" alt="">
                                <p>Offline Course Videos</p>
                                <div class="clear"></div>
                            </div>
                            <p><a href="{{ route('checkout') }}" class="btn btn-secondary w-100">Take This Plan</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row brand2">
            <div class="col-lg-12 col-12 text-center">
                <img src="/icon/brand.png" alt="" class="img-fluid" width="700">
            </div>
        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="wrap text-center">
                    <p>SUCCESS STUDENTS</p>
                    <p>We Really Love Laracamp</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10  col-12">
                <div class="row ">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="/icon/rate.svg" alt="" class="img-fluid star mb-3" width="120">
                            <p>I was not really into code but
                                after they teach me how to
                                train my logic then I was really
                                fall in love with code</p>
                            <img src="/icon/fanny_photo.png" alt="" class="img-fluid user mb-3" width="40">
                            <p class="mb-0">Fanny</p>
                            <p>Developer at Google</p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-12">
                        <div class="item-review">
                            <img src="/icon/rate.svg" alt="" class="img-fluid mb-3" width="120">
                            <p>I was not really into code but
                                after they teach me how to
                                train my logic then I was really
                                fall in love with code</p>
                            <img src="/icon/angga.png" alt="" class="img-fluid user mb-3" width="40">
                            <p class="mb-0">Angga</p>
                            <p>Developer at Google</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="/icon/rate.svg" alt="" class="img-fluid mb-3" width="120">
                            <p>I was not really into code but
                                after they teach me how to
                                train my logic then I was really
                                fall in love with code</p>
                            <img src="/icon/beatrice.png" alt="" class="img-fluid user mb-3" width="40">
                            <p class="mb-0">Jully</p>
                            <p>Developer at Google</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection