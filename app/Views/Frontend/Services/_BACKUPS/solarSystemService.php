<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Solar System', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->
<!-- choose-area -->
<section class="choose-area pt-100 pb-100 p-relative">
    <!-- <div class="chosse-img wow fadeInRight animated" data-animation="fadeInRight animated" data-delay=".2s">
    </div> -->
    <div class="container">
        <div class="row">
            <!-- rightside -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">

                    <div class="content-box">
                        <h2>Solar System</h2>
                        <p>With the dramatic decline in manufacturing, installation and equipment costs, solar thermal are more cost-effective than ever before. Solar systems have a 25-year power production warranty and an average lifespan of 50 years or more, so an investment in solar saves in utility costs in the long run.</p>
                        <p>Our solar power solutions help you generate your own power with easy to use solar equipments – a low maintenance, silent and pollution-free alternative to diesel generators. With the solar power equipments you can generate electricity for locations where grid is inaccessible or the access is prohibitively expensive. These solar power pack systems can also be used in conjunction with existing grid for uninterrupted supply of electricity. Our solutions are based on proven solar technology, which makes them highly efficient and completely maintenance-free. We promise to deliver fully managed solar energy services.</p>
                        <p>Through our years of solar experience, we understand that moving forward with solar energy solutions is an important decision. Falcon is here to support you and your stakeholders in every way possible. The solar process should never be a burden on your organization, as we strive to make your facilities high performing and cost-effective.</p>

                    </div>
                </div>

            </div>
            <!-- rightside -->

            <!-- leftside -->
            <?= view('Components/WebServicesSidebar'); ?>
            <!-- /leftside -->

        </div>

    </div>
</section>
<!-- choose-area-end -->

<?= $this->endSection() ?>