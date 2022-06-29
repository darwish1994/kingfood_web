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
                        <th>رقم الطلب</th>
                        <th>اسم الصنف</th>
                        <th>الكمية</th>
                        <th>السعر</th>
                        <th>التاريخ</th>
                    </tr>


                    @foreach($orders as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <th>{{$item->name}}</th>
                            <th>{{$item->quantity}}</th>
                            <th>{{$item->total}}</th>
                            <th>{{$item->created_at}}</th>
                        </tr>
                    @endforeach

                </table>


            </div>




        </div>

    </section><!-- End Contact Section -->


@endsection
