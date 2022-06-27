@extends('layout.app')

@section('content')

    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            @foreach($sections as $section)

                <div class="row" >
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up"> {{$section->title}} </h1>

                        <div data-aos="fade-up" data-aos-delay="600">
                            {{$section->details}}
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ Storage::url($section->image)}}"  style="width: 400px; height: 400px" class="img-fluid" alt="">
                    </div>

                </div>
            @endforeach

        </div>

    </section>

    <main id="main">


    @if(!empty($offers))
        <!-- ======= Values Section ======= -->
            <section id="values" class="values">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h1>العروض</h1>
                    </header>

                    <div class="row">

                        @foreach($offers as $item)
                            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="box">
                                    <img src="{{Storage::url($item->image)}}" class="img-fluid" alt="">
                                    <h3>{{$item->title}} </h3>
                                    <p>{{$item->description}} </p>
                                    <p> كود الطلب ( {{$item->code}} ) </p>
                                    <span> {{$item->price}} L.E</span>
                                    {{--                            <a class="nav-link scrollto" href="./inner-page 4.html">طلب اوردر</a>--}}
                                </div>
                            </div>

                        @endforeach


                    </div>

                </div>

            </section><!-- End Values Section -->
    @endif


        <!-- ======= Contact Section ======= -->
        <section id="contac" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>التواصل</h2>

                </header>

                <div class="row gy-4">

                    <div class="col-lg-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>عنوان</h3>
                                    <p> 10 شارع ناصر الاسماعليه </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3> اتصل بنا</h3>
                                    <p>01282478847<br>01068299217</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>ارسل لنا</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>متاحين </h3>
                                    <p>staurday - Friday<br>9:00AM - 11:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--
                              <div class="col-lg-6">
                                <form action="forms/contact.php" method="post" class="php-email-form">
                                  <div class="row gy-4">

                                    <div class="col-md-6">
                                      <input type="text" name="name" class="form-control" placeholder="الاسم" required>
                                    </div>
                                    <div class="col-md-6 ">
                                      <input type="email" class="form-control" name="number" placeholder="رقم الهاتف " required>
                                    </div>

                                    <div class="col-md-12 ">
                                      <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required>
                                    </div>


                                    <div class="col-md-12">
                                      <textarea class="form-control" name="message" rows="6" placeholder="رسالتك" required></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                      <div class="loading">تحميل</div>
                                      <div class="error-message"></div>
                                      <div class="sent-message">Your message has been sent. Thank you!</div>

                                      <button type="submit">ارسل لنا</button>
                                    </div>
                    -->
                </div>
                </form>

            </div>

            </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
