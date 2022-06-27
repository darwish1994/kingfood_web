<section id="contac" class="contact">

    <div class="container" data-aos="fade-up">

        <header class="section-header">

            <p>تواصل معنا</p>
        </header>
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>عنوان</h3>
                                <p> 10 شارع ناصر الاسماعليه </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3> اتصل بنا</h3>
                                <p>01282478847<br>01068299217</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>ارسل لنا</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>متاحين </h3>
                                <p>staurday - Friday<br>9:00AM - 11:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form method="post" action="{{url("contact_us")}}">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الاسم">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-6 ">
                                <input type="number" name="phone" class="form-control" placeholder="رقم الهاتف ">
                                <span class="text-danger"></span>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني">
                                <span class="text-danger"></span>
                            </div>


                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="رسالتك"></textarea>
                                <span class="text-danger"></span>
                            </div>

                            <div class="col-md-12 text-center btn hover" style="color: #30b694">


                               <input type="submit" value="ارسل لنا"/>

                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>

</section><!-- End Contact Section -->
