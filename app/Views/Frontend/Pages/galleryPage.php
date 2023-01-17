<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Our Gallery', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->

<!-- choose-area -->
<section class="choose-area pt-100 pb-100 p-relative">
    <div class="container">
        <div class="row">
            <div class="content-side">
                <div class="service-detail">
                    <div class="images-box row">
                        
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-6 wow fadeInLeft">
                            <figure class="image wow fadeIn"><a href="/img/resource/service-img-1.jpg" class="lightbox-image" data-fancybox="services"><img src="/img/resource/service-img-1.jpg" alt=""></a></figure>
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- choose-area-end -->

<?= $this->endSection() ?>