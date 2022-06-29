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


                </div>

                <div class="col-lg-6">
                    <form action="{{url('supplier')}}" method="post" >
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="اسم الصنف" required>
                            </div>


                            <div class="col-md-12">
                                <input type="number" class="form-control" name="quantity" placeholder="الكمية" required>
                            </div>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="price" placeholder="السعر" required>
                            </div>
                            <div class="col-md-12">
                                <label for="birthday">تاريخ التوريد</label>

                                <input type ="date" class="form-control" id="birthday" name="date" placeholder="تاريخ " required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="details" rows="6" placeholder="التفاصيل" required></textarea>
                            </div>



                            <div class="col-md-12 text-center">
                                <div class="loading">تحميل</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">التوريد</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->


@endsection