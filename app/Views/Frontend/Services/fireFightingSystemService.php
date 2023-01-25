<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Fire Fighting System', 'imageUrl' => '/img/serviceBanner/fireFightingSystemService.jpg']); ?>
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
                        <p>The reliable protection systems we install have one main purpose which is to prevent the interruption of services necessary for the public welfare and avoid area wide Conflagrations, all the while putting the safety of life the utmost priority. </p>
                        <ul class="listStyleBullet">
                            <li>Fire suppression systems </li>
                            <li>Wet & Dry sprinkler system </li>
                            <li>Fire extinguishers </li>
                            <li>Foam sprinkler & spray nozzle system. </li>
                            <li>Fire extinguishers </li>
                            <li>FM 200 system </li>
                            <li>CO₂ system </li>
                            <li>Fire hose reels </li>
                            <li>Fire hydrant systems </li>
                            <li>Automatic sprinkler system</li>
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