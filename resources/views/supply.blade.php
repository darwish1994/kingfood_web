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


                <table>
                    <tr>
                        <th>اسم الصنف</th>
                        <th>الكمية</th>
                        <th>السعر</th>
                        <th>التاريخ</th>
                        <th>التفاصيل</th>
                        <th>Action</th>
                    </tr>

                    @foreach($supplies as $supply)
                        <tr>
                            <th>{{$supply->name}}</th>
                            <th>{{$supply->quantity}}</th>
                            <th>{{$supply->price}}</th>
                            <th>{{$supply->date}}</th>
                            <th>{{$supply->details}}</th>
                            <th><a href="{{url('supplier/delete/').$supply->id}}">Delete</a></th>
                        </tr>
                    @endforeach

                </table>
            </div>

        </div>

    </section><!-- End Contact Section -->


@endsection
