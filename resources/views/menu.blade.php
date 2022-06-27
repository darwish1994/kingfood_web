@extends('layout.app')

@section('content')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p>قائمة الطعام</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">الاكل</li>
                        <li data-filter=".filter-app">بيتزا</li>
                        <li data-filter=".filter-card">باستا</li>
                        <li data-filter=".filter-web2">ساندوتشات</li>
                        <li data-filter=".filter-web">الفراخ</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($products as $item)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{Storage::url($item->image)}}" class="img-fluid" alt="">
                            <p>{{$item->name}}</p>
                            <h4>{{$item->price}} L.E</h4>
                            <div class="portfolio-info">
                                <h4>{{$item->price}} L.E</h4>
                                <p>{{$item->name}}</p>
                                <div class="portfolio-links">
                                    <a href="{{Storage::url($item->image)}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="مشروم"><i class="bi bi-plus"></i></a>
                                    <a href="./inner-page 4.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>

        </div>

        </div>

    </section>
    <!-- End Portfolio Section -->
@endsection