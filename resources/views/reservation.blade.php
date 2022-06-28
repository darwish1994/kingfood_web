@extends('layout.app')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{url('/')}}"> الرئيسية<a></li>

                </ol>
                <h2> الحجز</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">

                    <p>حجز الطاولة</p>
                </header>

                <div class="row">

                    <div class="col-lg-12">


                    </div>

                    @if(!empty($tables))


                        <div class="col-lg-6">
                            <form action="{{url('reservation')}}" method="post">
                                @csrf

                                <div class="row gy-4">

                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control" placeholder=" الاسم"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
                                    </div>


                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control" name="phone" placeholder="عدد الافراد"  required>
                                    </div>
                                    <div class="input-group col-md-12">

                                        <select class="form-select" name="table_id">
                                            @foreach($tables as $table)
                                                <option value="{{$table->id}}"> رقم الطاولة ({{$table->postion}})</option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="birthday">تاريخ الحجز</label>

                                        <input type="datetime-local" class="form-control" id="birthday" name="time" placeholder="تاريخ الحجز" required>
                                    </div>


                                    <div class="col-md-12 text-center">
                                        <div class="loading">تحميل</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">الحجز</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    @endif
                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
