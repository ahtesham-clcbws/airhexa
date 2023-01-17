<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Our Recent Projects', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->
<!-- choose-area -->
<section id="blog" class="blog-area  p-relative pt-95 pb-90 fix" style="background-image:url(img/bg/services_aliment_bg.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="img/blog/blog_img01.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="b-meta mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <i class="far fa-calendar-alt"></i> 7 March, 2019
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <i class="fas fa-user"></i> By Jhone Doe
                                </div>
                            </div>
                        </div>
                        <h4><a href="blog-details.html">Making Distribut Product Team Work More With Monday</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>

                        <div class="slider-btn">
                            <a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post active mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="img/blog/blog_img02.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="b-meta mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <i class="far fa-calendar-alt"></i> 7 March, 2019
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <i class="fas fa-user"></i> By Jhone Doe
                                </div>
                            </div>
                        </div>

                        <h4><a href="blog-details.html">Monthly eraesent justo mauris, vitae nisi ultricies.</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>
                        <div class="slider-btn">
                            <a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="img/blog/blog_img03.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="b-meta mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <i class="far fa-calendar-alt"></i> 7 March, 2019
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <i class="fas fa-user"></i> By Jhone Doe
                                </div>
                            </div>
                        </div>
                        <h4><a href="blog-details.html">User Experience Psychology And Performance Smashing</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>
                        <div class="slider-btn">
                            <a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="img/blog/blog_img01.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content">
                        <div class="b-meta mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <i class="far fa-calendar-alt"></i> 7 March, 2019
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <i class="fas fa-user"></i> By Jhone Doe
                                </div>
                            </div>
                        </div>
                        <h4><a href="blog-details.html">Praesent justo mauris, tincidunt vitae nisi
                                ultricies.</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisi cing elit sed do eiusmod tempor
                            incididunt ut labore et dolore.</p>

                        <div class="slider-btn">
                            <a href="#" class="ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose-area-end -->

<?= $this->endSection() ?>