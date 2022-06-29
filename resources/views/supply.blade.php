@extends('layout.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html"> الرئيسية<a></li>

            </ol>
            <h2> الطلبية</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2> التواصل </h2>
                <p>
                    الطلبية</p>
            </header>

            <div class="row">
                <div class="row col-lg-12">
                    <div class="col-lg-2">اسم الصنف</div>
                    <div class="col-lg-1">الكمية</div>
                    <div class="col-lg-1">السعر</div>
                    <div class="col-lg-2">التاريخ</div>
                    <div class="col-lg-3">التفاصيل</div>
                    <div class="col-lg-3">Action</div>
                </div>
            </div>
            @foreach($supplies as $supply)
                <div class="row">
                    <div class="row col-lg-12">
                        <div class="col-lg-2">{{$supply->name}}</div>
                        <div class="col-lg-1">{{$supply->quantity}}</div>
                        <div class="col-lg-1">{{$supply->price}}</div>
                        <div class="col-lg-2">{{$supply->date}}</div>
                        <div class="col-lg-3">{{$supply->details}}</div>
                        <div class="col-lg-2">
                            <a href="{{url('supplier/delete/').$supply->id}}">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </section><!-- End Contact Section -->


@endsection