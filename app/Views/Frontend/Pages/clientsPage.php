<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Our Clients', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->

<!-- brand-area -->
<div class="brand-area pt-60 pb-60" style="background-color:#fff">
    <div class="container">
        <div class="row ">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-brand">
                        <img src="/img/brand/Client-<?= $i + 1 ?>.jpg">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<!-- brand-area-end -->

<?= $this->endSection() ?>