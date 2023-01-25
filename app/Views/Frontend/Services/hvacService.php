<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Heating, Ventilation, Air Conditioning (HVAC)', 'imageUrl' => '/img/serviceBanner/hvacService.jpg']); ?>
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
                        <h2>Heating, Ventilation, Air Conditioning (HVAC)</h2>

                        <p>We install, maintain and repair air conditioning systems Residential, commercial and industrial such as home, school, Hospital Providing factories, offices, thermal comfort and Maintenance good indoor air quality is our main goal. </p>
                        <p>Air Hexa Air Solutions LLP Works strives to install systems with perfect quality and price that successfully provide excellent air quality at low energy costs and allow for easy maintenance.</p>
                        <p>What sets us apart is that our team goes through continuous, extensive training that is unmatched in the industry. We Follow the plans and specifications for installation, check and maintenance of systems, installation of controls, testing of individual parts and replacement of worn parts.</p>

                        <p>We offer expertise and competitive tendering in areas such as :</p>
                        <ul class="listStyleBullet">
                            <li>Chilled water systems </li>
                            <li>Ventilation and filtration systems. </li>
                            <li>DX / VRV systems </li>
                            <li>Package units </li>
                            <li>Split Unit </li>
                            <li>Fresh Air Handling Units </li>
                            <li>Ecology Units and Make up Air Handling Units </li>
                            <li>FCU </li>
                            <li>GI and PI Ducting </li>
                            <li>Ventilation System </li>
                            <li>Dust Extraction System </li>
                            <li>Smoke Exhaust System </li>
                        </ul>

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