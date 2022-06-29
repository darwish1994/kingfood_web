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
                <table>
                    <tr>
                        <th>اسم الصنف</th>
                        <th>الكمية</th>
                        <th>السعر</th>
                        <th>Action</th>
                    </tr>


                    @foreach($items as $supply)
                        <tr>
                            <th>{{$supply->name}}</th>
                            <th>{{$supply->quantity}}</th>
                            <th>{{$supply->price}}</th>
                            <th><a href="{{url('cart/remove/'.$supply->id)}}">Remove</a></th>
                        </tr>
                    @endforeach

                </table>


            </div>

            <div class="row">
                <a href="{{url('order/create')}}">Create Order</a>
            </div>


        </div>

    </section><!-- End Contact Section -->


@endsection
