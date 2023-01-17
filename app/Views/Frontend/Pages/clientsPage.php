<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Our Clients', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->

<!-- brand-area -->
<div class="brand-area pt-60 pb-60" style="background-color:#fff">
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