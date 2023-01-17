<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Fire Fighting System', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Fire Fighting System</h2>
                        <p>In 2014, the fire fighting division started providing a wide range of solutions with the help of a professionally qualified team in the area of life &amp; property safety in accordance with standards/regulations viz. NBC,TAC &amp; NFPA.</p>
                        <p>With in a short span the company is executing many projects in India in various sectors. The design team use the latest drawing tools &amp; software including AutoCAD, Revit11, &amp; Pipe net to enhance design accuracy.</p>

                        <ul class="listStyleBullet">
                            <li>Fire and Safety solutions</li>
                            <li>Fire Hydrant and Wet Riser System</li>
                            <li>Sprinkler System</li>
                            <li>Water Spray System (HVW and MVW)</li>
                            <li>Pre-Action System</li>
                            <li>Gas based Fire Suppression System like CO2 System</li>
                            <li>Clean Agent System and Inert Gas System</li>
                            <li>Fire Detection and Alarm System</li>
                            <li>Hand Appliances</li>
                            <li>Public Address System</li>
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