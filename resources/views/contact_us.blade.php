@extends('layout.app')

@section('content')

    <section id="contac" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p>تواصل معنا</p>
            </header>
            <div class="container">

                <div class="row gy-4">


                    <div class="col-lg-6">
                        <form method="post" action="{{url("contact_us")}}">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="الاسم">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف ">
                                    <span class="text-danger"></span>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email"
                                           placeholder="البريد الالكتروني">
                                    <span class="text-danger"></span>
                                </div>


                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6"
                                              placeholder="رسالتك"></textarea>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="col-md-12 text-center btn hover" style="color: #30b694">


                                    <input type="submit" value="ارسل لنا"/>

                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- End Contact Section -->
@endsection