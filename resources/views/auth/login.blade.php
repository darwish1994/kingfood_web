@extends('layout.auth')

@section('content')



    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> التواصل </h2>
                <p>
                    دخول </p>
            </header>

            <div class="row">

                <div class="col-lg-12">


                </div>

                <div class="col-lg-6">
                    <form action="{{url('/login')}}" method="post" >

                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control" placeholder="البريد" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="password" name="password" class="form-control" placeholder="كلمة السر "
                                       required>
                            </div>

                            <div class="col-md-12 text-center">


                                <button type="submit">الدخول</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

@endsection
