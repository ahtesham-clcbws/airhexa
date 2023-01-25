<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Plumbing & Drainage System ', 'imageUrl' => '/img/serviceBanner/plumbingSystemService.jpg']); ?>
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
                        <h2>Plumbing & Drainage System </h2>

                        <p>Air Hexa Air Solutions LLP Works places great emphasis on assurance that each installed plumbing system is equipped well dimensioned and securely connected pipes, drains, fittings, valves, assemblies and equipment for proper water distribution. Our designers always guarantee the implementation of a global and Indian regulations and standards to ensure delivery best quality. </p>
                        <p>The plumbing systems that We specializes in: </p>

                        <ul class="listStyleBullet">
                            <li>Sanitary and drainage systems </li>
                            <li>Water distribution </li>
                            <li>Sewerage Treatment Plant (STP) • Soil, Waste & Vent piping. </li>
                            <li>Water treatment </li>
                            <li>Variable and fixed speed pumping systems. </li>
                            <li>Kitchen and laundry plumbing </li>
                            <li>Irrigation systems and controls </li>
                            <li>Sand traps and grease traps</li>
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