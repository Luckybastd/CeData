@extends('layout')

@section('title', 'Contact Us')

@section('contact-us', 'active')

@section('isi')

<!-- Footer-Area -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center justify-content-center">
                        <div class="space-60"></div>
                        <img src="{{ asset('style/images/logo-name.png') }}" alt="Logo" style="max-width: 30%"><br>
                        <h5 class="title wow" style="color: #2B4A9D">Hubungi Kami</h5>
                        <h3 class="dark-color wow" data-wow-delay="0.4s" style="color: #2B4A9D">Temukan Kami Melalui Kontak Berikut</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-box wow" data-wow-delay="0.6s">
                        <a href="https://instagram.com/easy_data_">
                            <div class="box-icon">
                                <span class="fab fa-instagram"></span>
                            </div>
                        </a>
                        <p>@easy_data_</p>
                    </div>
                    <div class="space-20 hidden visible-xs"></div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer-box wow" data-wow-delay="0.8s">
                        <a href="mailto:easydata2302@gmail.com">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                        </a>
                        <p>easydata2302@gmail.com</p>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection