@extends('layouts.app')
@section('title')
Contact
@endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Contact US</h1>
                    <span class="color-text-a">Nice to meet you, do you have question? let us know.</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Contact Star /-->
<section class="contact">
    <div class="container">
        <div class="row">
            {{-- <div class="col-sm-12">
                <div class="contact-map box">
                    <div id="map" class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div> --}}
            <div class="col-sm-12 section-t8">
                <div class="row">
                    <div class="col-md-5 section-md-t3">
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="ion-ios-paper-plane"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Say Hello</h4>
                                </div>
                                <div class="icon-box-content">
                                    <a class="mb-1" href="">Email.
                                        <span class="color-a">marketing@example.com</span>
                                    </a>
                                    <br>
                                    <a class="mb-1" href="https://wa.me/6282146333864">Phone.
                                        <span class="color-a">+62 082 146 333 864</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="ion-ios-pin"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Find us in</h4>
                                </div>
                                <div class="icon-box-content">
                                    <p class="mb-1">
                                        Ubud Bali Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <span class="ion-ios-redo"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Social networks</h4>
                                </div>
                                <div class="icon-box-content">
                                    <div class="socials-footer">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="https://facebook.com/ptah_bali" class="link-one">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                           
                                            <li class="list-inline-item">
                                                <a href="https://instagram.com/ptah_bali" class="link-one">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Contact End /-->


{{-- cta --}}
<section class="call-to-action p-5 mt-5 bg-maps">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h2 class="title-a text-center">Maps</h2>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus eum tempora illum nostrum exercitationem rerum vero doloremque possimus dignissimos.</p>
            </div>
            <div class="col-12 d-flex justify-content-center" id="map">
                {{-- <a href="/realestate" class="btn btn-outline-success w-10 d-flex align-items-center justify-content-center mx-1">Card View</a> --}}
                <a href="/maps" class="btn btn-success  d-flex align-items-center justify-content-center mx-1 p-2 h5">Check Our Maps</a>
            </div>
        </div>
    </div>
</section>

@endsection
