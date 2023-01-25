<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'CCTV & Security Surveillance', 'imageUrl' => '/img/serviceBanner/cctvAndSecuritySurveillanceService.jpg']); ?>
<!-- breadcrumb-area-end -->
<!-- choose-area -->
<section class="choose-area pt-100 pb-100 p-relative">
    <div class="container">
        <div class="row">
            <!-- rightside -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">

                    <div class="content-box">
                        <h2>CCTV & Security Surveillance</h2>
                        <p>Security cameras are a great way to provide security for your home or workplace. As well as providing you with video footage of any events which may happen, they also act as a visible deterrent to criminals. Falcon offers a range of security cameras, ensuring there is one suitable for every budget. Our range consist of the state-of-the-art Analog , Turbo , IP , Stand alone cameras with sensors, optical zoom, WDR technology, pan &amp; tilt features.</p>
                        <p>We believe your security system should be easy to use, cost effective and improve the overall operations of your business. Due to recent improvements in video technology and installation, video surveillance has become more efficient in crime prevention. Installing a CCTV system represents a significant step toward protecting your company and personnel assets. Employee productivity has also been proven to increase in the presence of security cameras, while theft and “inventory shrinkage” are significantly less present. We will work with you to determine your surveillance needs to ensure your business and household is safe, secure and operating to its fullest capability.</p>
                        <p><strong>CCTV System for Offices, Banks, School &amp; Godown Etc.</strong></p>
                        <ul class="listStyleBullet">
                            <li>Integrated IP and Analog Cameras</li>
                            <li>Dome IR Camera</li>
                            <li>Outdoor Bullet IR Camera</li>
                            <li>PTZ Camera &amp; Zoom Lens Camera</li>
                            <li>Day Night Camera</li>
                            <li>3600 Panoramic View Camera</li>
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