@extends('layouts.landing.app')
@section('content')
    @push('styles')
        <style>
            body {
                /* background-color: brown; */
            }
        </style>
    @endpush
    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg1.jpg') }})">
            <div class="slider-content">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <h2 class="slide-title" data-animation-in="slideInLeft">Selamat Datang di</h2>
                            <h3 class="slide-sub-title" data-animation-in="slideInRight">Sistem Absensi Mahasiswa<br>
                                Universitas Teknologi Digital
                            </h3>
                            <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                {{-- <a href="services.html" class="slider btn btn-primary">Our Services</a>
                                <a href="contact.html" class="slider btn btn-primary border">Contact Now</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg2.jpg') }})">
            <div class="slider-content text-left">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title-box" data-animation-in="slideInDown">Sistem Absensi Modern</h2>
                            <h3 class="slide-title" data-animation-in="fadeIn">Digitalisasi Presensi Kampus</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Sistem Absensi Mahasiswa<br>
                                Universitas Teknologi Digital</h3>
                            <p data-animation-in="slideInRight">
                                {{-- <a href="services.html" class="slider btn btn-primary border">Pelayanan Kami</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg3.jpg') }})">
            <div class="slider-content text-right">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title" data-animation-in="slideInDown">Fitur Lengkap Absensi</h2>
                            <h3 class="slide-sub-title" data-animation-in="fadeIn">Efisiensi dan Akurasi Data</h3>
                            <p class="slider-description lead" data-animation-in="slideInRight">
                                Sistem absensi digital yang memudahkan mahasiswa dan dosen dalam proses presensi
                                dengan teknologi terkini.
                            </p>
                            <div data-animation-in="slideInLeft">
                                <a href="{{ route('user.kontak') }}" class="slider btn btn-primary"
                                    aria-label="contact-with-us">Hubungi
                                    Kami</a>
                                {{-- <a href="about.html" class="slider btn btn-primary border"
                                    aria-label="learn-more-about-us">Learn more</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action-box no-padding">
        <div class="container my-container">
            <div class="action-style-box">
                <ul class="info-box my-box-wrap">
                    <li class="single-info">
                        <div class="info-icon">
                            <i class="fas fa-qrcode fa-lg"></i>
                        </div>
                        <div class="info-my-content">
                            <a href="#">
                                <p>Absensi QR Code</p>
                            </a>
                        </div>
                    </li>
                    <li class="single-info">
                        <div class="info-icon">
                            <i class="fas fa-mobile-alt fa-lg"></i>
                        </div>
                        <div class="info-my-content">
                            <a href="#">
                                <p>Aplikasi Mobile</p>
                            </a>
                        </div>
                    </li>
                    <li class="single-info">
                        <div class="info-icon">
                            <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <div class="info-my-content">
                            <a href="#">
                                <p>Rekap Otomatis</p>
                            </a>
                        </div>
                    </li>
                    <li class="single-info">
                        <div class="info-icon">
                            <i class="fas fa-bell fa-lg"></i>
                        </div>
                        <div class="info-my-content">
                            <a href="#">
                                <p class="multi-line">Notifikasi Real-time</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    {{-- slider icon img --}}
    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">

            <div class="my-center-slider my-icon-slider">

                <div class=" ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" style="width: 250px" class="img img-fluid text-center mx-auto"
                                src="{{ asset('landing/images/icon-slider/logo-nogratifikasi.png') }}" alt="logo teknologi">
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->
                <div class=" ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" style="width: 250px" class="img img-fluid text-center mx-auto"
                                src="{{ asset('landing/images/icon-slider/logo-berakhlak.png') }}" alt="logo digital">
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->
                <div class=" ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" style="width: 250px" class="img img-fluid text-center mx-auto"
                                src="{{ asset('landing/images/icon-slider/logo-bangga-melayani.png') }}"
                                alt="logo universitas">
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->
                <div class=" ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" style="width: 250px" class="img img-fluid text-center mx-auto"
                                src="{{ asset('landing/images/icon-slider/sehat-tanpa-korupsi.png') }}"
                                alt="logo pendidikan">
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->
                <div class=" ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" style="width: 250px" class="img img-fluid text-center mx-auto"
                                src="{{ asset('landing/images/icon-slider/kami-siap-zi-wbk.png') }}" alt="logo akademik">
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->



            </div><!-- Main row end -->


        </div>
        <!--/ Container end -->
    </section><!-- Service end -->




    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <div class="ts-intro">
                        <h2 class="into-title">Tentang Sistem</h2>
                        <h3 class="into-sub-title">SISTEM ABSENSI MAHASISWA</h3>
                        <p class="my-sub-content">
                            Aplikasi Sistem Absensi Mahasiswa Universitas Teknologi Digital dirancang untuk memberikan
                            kemudahan dalam proses presensi perkuliahan secara digital dan terintegrasi. Dengan memanfaatkan
                            teknologi terkini, sistem ini memungkinkan mahasiswa melakukan absensi dengan cepat, akurat,
                            dan efisien melalui berbagai metode.
                        </p>
                        <p class="my-sub-content">
                            Sistem absensi mencakup berbagai fitur modern termasuk presensi menggunakan QR Code,
                            fingerprint, dan aplikasi mobile. Data kehadiran mahasiswa tercatat secara real-time dan
                            terintegrasi dengan sistem akademik kampus, memudahkan dosen dan administrasi dalam memantau
                            kehadiran mahasiswa.
                        </p>
                        <p class="my-sub-content">
                            Dengan adanya sistem ini, proses rekapitulasi kehadiran menjadi lebih efektif dan transparan.
                            Sistem menghasilkan laporan kehadiran otomatis, notifikasi untuk mahasiswa yang mendekati batas
                            ketidakhadiran, serta integrasi dengan sistem penilaian akademik.
                            Kami berkomitmen untuk menyediakan sistem absensi yang handal, akurat, dan mendukung
                            efisiensi proses akademik di Universitas Teknologi Digital.
                        </p>
                    </div><!-- Intro box end -->
                </div><!-- Col end -->



                <!-- <div class="col-lg-6 mt-4 mt-lg-4 justify-content-center">
                                                <h3 class="into-sub-title"> </h3>
                                                <div class="box-video"> -->

                <!--<iframe width="420" height="315" title="Program Pengembangan keprofesian Guru. Pendidikan Jasmani, olahraga dan kesehatan" src="https://www.youtube.com/embed/gJ3g7xX9O-s"-->
                <!--    allowfullscreen>-->
                <!--</iframe>-->
                <!-- <div class="video-placeholder" data-src="https://www.youtube.com"
                                                        onclick="loadVideo(this)">
                                                        <div class="video-title">Rencana Pelaksanaan Pembelajaran</div>
                                                    </div> -->
                <!--<div class="video-title">Balai Besar Guru Penggerak</div>-->
            </div>
            <!--/ Accordion end -->
        </div><!-- Col end -->




        </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">

            <div class="row my-icon2-slider">

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-jurnal.png') }}"
                                alt="icon qr code">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="service-single.html">Absensi QR Code</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-pengaduan.png') }}"
                                alt="icon mobile app">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="#">Aplikasi Mobile</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-ppid.png') }}"
                                alt="icon dashboard">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="#">Dashboard Dosen</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-sim-penggiat.png') }}"
                                alt="icon laporan">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="#">Laporan Kehadiran</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-virtual-tour.png') }}"
                                alt="icon notifikasi">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="#">Notifikasi</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->

                <div class="col-lg col-md ">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('landing/images/icon-slider/slider2/icon-web-visualisasi-data.png') }}"
                                alt="icon integrasi">
                        </div>
                        <div class="text-center">
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="#">Integrasi Sistem</a></h3>

                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div><!-- Col 1 end -->
            </div><!-- Main row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Service end -->

    <section id="news" class="news">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                </div>
            </div>
            <!--/ Title row end -->

            <!--/ Content row end -->

            {{-- <div class="general-btn text-center mt-4">
                <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
            </div> --}}

        </div>
        <!--/ Container end -->
    </section>
    <!--/ News end -->


    @push('scripts')
        <script>
            function loadVideo(element) {
                var iframe = document.createElement('iframe');
                iframe.setAttribute('width', '420');
                iframe.setAttribute('height', '315');
                iframe.setAttribute('title',
                    'Program Pengembangan keprofesian Guru. Pendidikan Jasmani, olahraga dan kesehatan');
                iframe.setAttribute('src', element.getAttribute('data-src'));
                iframe.setAttribute('allowfullscreen', '');
                element.parentNode.replaceChild(iframe, element);
            }

            // Optionally, you can use Intersection Observer to load video only when in viewport
            document.addEventListener('DOMContentLoaded', function () {
                var lazyVideos = [].slice.call(document.querySelectorAll('.video-placeholder'));

                if ('IntersectionObserver' in window) {
                    var lazyVideoObserver = new IntersectionObserver(function (entries, observer) {
                        entries.forEach(function (video) {
                            if (video.isIntersecting) {
                                loadVideo(video.target);
                                lazyVideoObserver.unobserve(video.target);
                            }
                        });
                    });

                    lazyVideos.forEach(function (video) {
                                                                                lazyVideoObserv er.observe(video);
                    });
                } else {
                    // Fallback for older browsers
                    lazyVideos.forEach(function (video) {
                        loadVideo(video);
                    });
                }
            });
        </script>
    @endpush
@endsection