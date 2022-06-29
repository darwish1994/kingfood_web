@extends('layout.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html"> الرئيسية<a></li>

            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> العربه </h2>
            </header>

            <div class="row">
                <div class="row col-lg-12">
                    <div class="col-lg-5">اسم الصنف</div>
                    <div class="col-lg-2">الكمية</div>
                    <div class="col-lg-2">السعر</div>
                    <div class="col-lg-3">Action</div>
                </div>
            </div>
            @foreach($items as $supply)
                <div class="row">
                    <div class="row col-lg-12">
                        <div class="col-lg-5">{{$supply->name}}</div>
                        <div class="col-lg-2">{{$supply->quantity}}</div>
                        <div class="col-lg-2">{{$supply->price}}</div>
                        <div class="col-lg-3">
                            <a href="{{url('cart/remove/').$supply->id}}">Remove</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </section><!-- End Contact Section -->


@endsection
