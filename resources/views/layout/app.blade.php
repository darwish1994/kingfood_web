<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> king Food </title>

    <meta content="" name="description">

    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("vendor/aos/aos.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/remixicon/remixicon.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center text-right justify-content-between">


        <nav id="navbar" class="navbar">
            <ul>

                @foreach(\App\Http\Controllers\HomeController::getHeaderMenu() as  $item)
                    <li><a class="nav-link scrollto active" href="{{$item->path}}">{{$item->title}}</a></li>
                @endforeach

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>


    </div>
</header>


<div class="container">
    @yield('content')


    <main id="main">

    @yield('main')


    <!-- ======= Contact Section ======= -->
        <section id="contac" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>التواصل</h2>

                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            @foreach(\App\Http\Controllers\HomeController::getContact() as  $item)

                                <div class="col-md-6">
                                    <div class="info-box">
                                        <i class="bi {{$item->icon}}"></i>
                                        <h3>{{$item->title}}</h3>
                                        {!! $item->details !!}
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                </div>
                </form>

            </div>


        </section><!-- End Contact Section -->

    </main>
</div>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>KingFood</span></strong>. All Rights Reserved
        </div>

    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="{{asset("vendor/purecounter/purecounter.js")}}"></script>
<script src="{{asset("vendor/aos/aos.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("vendor/swiper/swiper-bundle.min.js")}}"></script>
<script src="{{asset("vendor/php-email-form/validate.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("js/main.js")}}"></script>
</body>

</html>






