<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Industrial Ventilation', 'imageUrl' => '/img/serviceBanner/industrialVentilationService.jpg']); ?>
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
                        <h2>Industrial Ventilation</h2>
                        <p>
                            Air Hexa Air Solutions LLP one of the best Ventilation Contracting company in Delhi providing assistance in ventilation services which helps in exchange and circulation of air within the premises to dispense high indoor air quality by eliminating unpleasant smells and excessive moisture to outside atmosphere keep interior building circulating and prevents stagnation of the interior air. Ventilation is needed to of exchanging or replacing air in any space provide high indoor air quality which involves temperature control, oxygen replenishment and removal of moisture, odors, smoke, heat, dust, airborne bacteria, CO₂ and other gases.
                        </p>
                        <p>
                            Air Hexa Air Solutions LLP provide Industrial Ventilation Services below mentioned spaces
                        </p>
                        <ul class="listStyleBullet">
                            <li>Parking Area</li>
                            <li>Kitchen Area</li>
                            <li>Factories</li>
                            <li>Warehouses</li>
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