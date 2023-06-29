<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>MeetDosen</title>

    <link rel="icon" href="{{ asset('/assets/img/logo-meetdosen.png') }}" type="image/ico" />

    <link rel="stylesheet" href="{{ asset('/assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">

</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>


    <header>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
            </div>
        @endif

        @include('user.navbar')

    </header>

    @include('user.carrousel')

    <div class="page-section pb-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Selamat Datang di<br> <span style="font-weight: 600;">Meet<span
                                class="text-primary">Dosen</span></span></h1>
                    <p class="text-grey mb-4">Meet Dosen is a web app that allows students to easily make appointments
                        with their lecturers. With Meet Dosen, students can search for available lecturers, view their
                        schedules, and book appointments. Meet Dosen is a convenient and efficient way for students to
                        get the help they need from their lecturers.</p>
                    <a href="https://main.polines.ac.id/id/" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="{{ asset('/Dosen/3.png') }}" height="250px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.dosen')

    @include('user.appointment')



    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Satria</a></li>
                        <li><a href="#">Afifin</a></li>
                        <li><a href="#">Fajar</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah
                        50275</p>
                    <a href="#" class="footer-link">(024) 7473417</a>
                    <a href="#" class="footer-link">sekretariat@polines.ac.id</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>


        </div>
    </footer>

    <script src="{{ asset('/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('/assets/js/theme.js') }}"></script>

</body>

</html>
