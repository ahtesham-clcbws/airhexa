<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Electrical Systems', 'imageUrl' => '/img/serviceBanner/electricalSystemsService.jpg']); ?>
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
                        <h2>Electrical System</h2>
                        <h5>Low Voltage</h5>
                        <p class="mb-0">
                            Air Hexa Air Solutions LLP Works engineers low voltage systems that distributes power where is needed, safely and reliably, while providing optimal protection for personnel and equipment. Our range of low voltage distribution elements includes:
                        </p>
                        <ul class="listStyleBullet">
                            <li>Grounding </li>
                            <li>Main Distribution Boards (MDB) </li>
                            <li>Secondary Main Distribution Boards (SMDB) </li>
                            <li>Final Distribution Boards ( FDB ) </li>
                            <li>Cables </li>
                            <li>Lighting fixtures </li>
                            <li>Sockets</li>
                        </ul>
                        <br />
                        <p class="mb-0">Emergency power systems are extremely useful in many different environments, such as residential buildings, hospitals, research laboratories, data centers and telecommunications centers. Air Hexa Air Solutions LLP specializes in many emergency power systems which include: </p>
                        <ul class="listStyleBullet">
                            <li>Generators </li>
                            <li>UPS</li>
                        </ul>

                        <h5 class="mt-3">Low Current</h5>
                        <ul class="listStyleBullet">
                            <li>Data and Communication </li>
                            <li>Fire Alarm </li>
                            <li>Access Control </li>
                            <li>Queue Management System </li>
                            <li>BMS ( Building Management System ) </li>
                            <li>Audio Visual </li>
                            <li>Lighting Control System </li>
                            <li>Video and Audio Intercom System </li>
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