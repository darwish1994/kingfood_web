@extends('layout.app')

@section('content')

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

@endsection