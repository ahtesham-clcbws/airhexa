<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Heating, Ventilation, Air Conditioning (HVAC)', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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

                        <p>In 2014, HVAC division started, in which design, supply, installation, service and maintenance of air conditioning, ventilation solutions for all types of commercial, industrial and domestic environments. We work closely with Architects, Consulting Engineers, Contractors and End Users to supply the most efficient and cost effective air conditioning solutions available.</p>
                        <p>We provide design, supply and installation of heating, ventilation, air conditioning and heat pump equipment and associated services for commercial premises. The design, supply and servicing of refrigeration equipment for food display counters, all to meet the current Environmental Health Regulations.</p>
                        <p>We offer expertise and competitive tendering in areas such as :</p>
                        <ul class="listStyleBullet">
                            <li>Central Chilled water Plant systems.</li>
                            <li>DX System / VRV systems.</li>
                            <li>Primary / secondary pumping system</li>
                            <li>Thermal storage system</li>
                            <li>Hot water generator, Solar heater and related low side work</li>
                            <li>Ventilation system and evaporative cooling systems, roof extractors and jet fan systems.</li>
                            <li>Clean room technology for micro electronics, micro mechanics and pharma</li>
                            <li>District Cooling System</li>
                            <li>Heat recovery and desiccant cooling systems</li>
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