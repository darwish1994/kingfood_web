@extends('layout.auth')

@section('content')

    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> التواصل </h2>
                <p>
                    سجل الأن</p>
            </header>

            <div class="row">

                <div class="col-lg-12">


                </div>

                <div class="col-lg-6">
                    <form action="{{url('register')}}" method="post" >

                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="f_name" class="form-control" placeholder=" الاسم الاول"
                                       required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="l_name" class="form-control" placeholder=" الاسم الاخير"
                                       required>
                            </div>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="البريد الاليكترونى"
                                       required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" placeholder="الهاتف" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="العنوان" required>
                            </div>

                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="كلمة السر" required>
                            </div>


{{--                           --}}


{{--                            <div class="col-md-12 text-center">--}}
{{--                                <div class="loading">تحميل</div>--}}
{{--                                <div class="error-message"></div>--}}
{{--                                <div class="sent-message">Your message has been sent. Thank you!</div>--}}

{{--                            </div>--}}

                        </div>

                        <input type="submit" value="تسجيل"/>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section --
@endsection
