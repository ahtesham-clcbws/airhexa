<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Who We Are', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->
<!-- about-area -->
<section id="about" class="about-area about-p pt-95 pb-95 p-relative" style="background-image:url(/img/bg/about_aliment_bg.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about-content s-about-content pl-30">
                    <div class="about-title second-atitle">
                        <span>About Us <small class="circle-right"><img src="/img/bg/circle_right.png" alt="img"></small></span>
                        <h2>Industry Is A Better Horse To Ride Than Genius</h2>
                    </div>
                    <p>Donec ut ultricies ante. Proin at sodales risus. Fusce tempor dui id convallis sollicitudin. Mauris vitae elit elementum, faucibus libero a, interdum tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <P>Mauris at sapien ut libero tempor convallis volutpat et dolor. Duis eleifend odio ante, at scelerisque est blandit a. Morbi faucibus dolor nisi, id suscipit massa vulputate at.</P>
                    <div class="row  mt-20">
                        <div class="col-lg-4">
                            <img src="/img/features/signature.png" alt="img">
                            <div class="signature-text">
                                Thomas Jack
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="/img/features/30-years.png" alt="img">
                        </div>
                    </div>
                    <div class="slider-btn mt-30">
                        <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>
                        <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="s-about-img p-relative">
                    <img src="/img/features/about_img02.png" alt="img">

                </div>
            </div>

        </div>

    </div>
</section>
<!-- about-area-end -->

<!-- counter-area -->
<div class="counter-area d-none" style="background-image:url(/img/count/count-bg.jpg); background-repeat: no-repeat; background-position: bottom;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-counter-img text-center fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <img src="/img/count/count-main.png" alt="img" class="img">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <img src="/img/count/icon.png" alt="img">
                    <div class="counter p-relative">
                        <span class="count">9878</span><small>+</small>
                    </div>
                    <p>Happy Clients</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <img src="/img/count/icon2.png" alt="img">
                    <div class="counter p-relative">
                        <span class="count">500</span><small>+</small>
                    </div>
                    <p>Employees</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <img src="/img/count/icon3.png" alt="img">
                    <div class="counter p-relative">
                        <small>$</small><span class="count">58.45</span><small>M</small>
                    </div>
                    <p>Annual Turnover</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter-area-end -->
<!-- testimonial-area -->
<section id="testimonios" class="testimonial-area testimonial-p pt-95 pb-100 fix d-none" style="background-image:url(/img/bg/testimonial_bg.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-10">
                <div class="section-title center-align mb-40 wow fadeInDown animated text-center" data-animation="fadeInDown animated" data-delay=".2s">
                    <span><small class="circle-left"><img src="/img/bg/circle_Left.png" alt="img"></small> Testimonial <small class="circle-right"><img src="/img/bg/circle_right.png" alt="img"></small></span>
                    <h2>What Our Client’s Say’s</h2>
                </div>
                <div class="testimonial-active2">

                    <div class="slider slider-for">
                        <div class="single-testimonial">
                            <div class="com-icon"><img src="/img/bg/Icon_comment.png" alt="img"></div>
                            <p>“Phasellus ut consequat elit. Donec dapibus, dolor ac mollis mollis, sapien lorem gravida magna, eu ullamcorper mi lectus a tortor. Aenean elementum tortor a sem pharetra, in accumsan odio commodo. Nam ultricies ut enim nec accumsan. Vivamus vel nunc eu diam fringilla bibendum laoreet eget felis. Praesent justo mauris, tincidunt vitae nisi ultricies, condimentum finibus quam. Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus at, tincidunt ex. Donec dapibus.</p>
                            <div class="testi-author">
                                <img src="/img/testimonial/test_img01.png" alt="img">
                                <div class="ta-info">
                                    <h6>Mr Jone Dose</h6>
                                    <span>SALES EXECUTIVE</span>

                                </div>
                            </div>

                        </div>
                        <div class="single-testimonial">

                            <div class="com-icon"><img src="/img/bg/Icon_comment.png" alt="img"></div>
                            <p>“Phasellus ut consequat elit. Donec dapibus, dolor ac mollis mollis, sapien lorem gravida magna, eu ullamcorper mi lectus a tortor. Aenean elementum tortor a sem pharetra, in accumsan odio commodo. Nam ultricies ut enim nec accumsan. Vivamus vel nunc eu diam fringilla bibendum laoreet eget felis. Praesent justo mauris, tincidunt vitae nisi ultricies, condimentum finibus quam. Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus at, tincidunt ex. Donec dapibus..</p>
                            <div class="testi-author">
                                <img src="/img/testimonial/test_img02.png" alt="img">
                                <div class="ta-info">
                                    <h6>Margie R. Robinson</h6>
                                    <span>Web Developer</span>

                                </div>
                            </div>

                        </div>
                        <div class="single-testimonial">
                            <div class="com-icon"><img src="/img/bg/Icon_comment.png" alt="img"></div>
                            <p>“Phasellus ut consequat elit. Donec dapibus, dolor ac mollis mollis, sapien lorem gravida magna, eu ullamcorper mi lectus a tortor. Aenean elementum tortor a sem pharetra, in accumsan odio commodo. Nam ultricies ut enim nec accumsan. Vivamus vel nunc eu diam fringilla bibendum laoreet eget felis. Praesent justo mauris, tincidunt vitae nisi ultricies, condimentum finibus quam. Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam, gravida lacus at, tincidunt ex. Donec dapibus.</p>
                            <div class="testi-author">
                                <img src="/img/testimonial/test_img03.png" alt="img">
                                <div class="ta-info">
                                    <h6>Mr Jone Dose</h6>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">

                            <div class="com-icon"><img src="/img/bg/Icon_comment.png" alt="img"></div>
                            <p>“Nam liber tempor cum soluta nobis eleifend option congue is nihil imper per tem por legere me doming vulputate velit esse molestiesoluta nobis eleifend option congue is nihil imper per tem por legere me doming vulputate velit esse molestiesoluta nobis eleifend option congue is nihil imper .</p>
                            <div class="testi-author">
                                <img src="/img/testimonial/test_img01.png" alt="img">
                                <div class="ta-info">
                                    <h6>Mr Jone Dose</h6>
                                    <span>Web Developer</span>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="slider slider-nav">
                        <div class="testimonial-item"><img src="/img/testimonial/test_img01.png" alt="img"></div>
                        <div class="testimonial-item"><img src="/img/testimonial/test_img02.png" alt="img"></div>
                        <div class="testimonial-item"><img src="/img/testimonial/test_img03.png" alt="img"></div>
                        <div class="testimonial-item"><img src="/img/testimonial/test_img01.png" alt="img"></div>

                    </div>


                </div>
            </div>
            <div class="col-lg-1">
            </div>

        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- counter-area -->
<div class="call-area d-none" style="background-image:url(/img/call/call-bg.png); background-repeat: no-repeat; background-position: bottom;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="single-counter-img fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <img src="/img/call/call-man.png" alt="img" class="img">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h2>Perfect Solutions <span>For Any Industrials</span></h2>
                <p>Donec at nunc laoreet, aliquet mi non, scelerisque diam. Mauris pulvinar nisl eget dui luctus, eu vehicula odio tempus. Nulla maximus molestie ante eget sollicitudin.</p>
                <div class="number">+91 555 234-8765</div>
            </div>

        </div>
    </div>
</div>
<!-- counter-area-end -->
<!-- brand-area -->
<div class="brand-area pt-60 pb-60 d-none" style="background-color:#fff">
    <div class="container">
        <div class="row brand-active">
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="/img/brand/client_icon_1.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="/img/brand/client_icon_2.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="/img/brand/client_icon_3.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="/img/brand/client_icon_4.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="/img/brand/client_icon_1.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->

<?= $this->endSection() ?>