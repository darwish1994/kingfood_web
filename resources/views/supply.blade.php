<?php
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


                <div class="col-lg-12">
                    <div class="col-lg-3">اسم الصنف</div>
                    <div class="col-lg-1">الكمية</div>
                    <div class="col-lg-2">السعر</div>
                    <div class="col-lg-2">التاريخ</div>
                    <div class="col-lg-4">التفاصيل</div>
                </div>
                @foreach($supplies as $supply)

                    <div class="col-lg-12">
                        <div class="col-lg-3">{{$supply->name}}</div>
                        <div class="col-lg-1">{{$supply->quantity}}</div>
                        <div class="col-lg-2">{{$supply->price}}</div>
                        <div class="col-lg-2">{{$supply->date}}</div>
                        <div class="col-lg-4">{{$supply->details}}</div>
                        <a href="{{url('supplier/delete/').$supply->id}}">Delete</a>

                    </div>
                @endforeach


            </div>

        </div>

    </section><!-- End Contact Section -->


@endsection