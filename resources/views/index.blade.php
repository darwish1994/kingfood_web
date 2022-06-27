@extends('layout.app')

@section('content')

    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            @foreach($sections as $section)

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up"> {{$section->title}} </h1>

                        <div data-aos="fade-up" data-aos-delay="600">
                            {{$section->details}}
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ Storage::url($section->image)}}" style="width: 400px; height: 400px"
                             class="img-fluid" alt="">
                    </div>

                </div>
            @endforeach

        </div>

    </section>



@endsection


@section('main')

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


    </main><!-- End #main -->
@endsection