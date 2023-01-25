<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Access Control Biometric', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Access Control Biometric</h2>
                        <p>Biometrics Access control security systems are designed to restrict physical entry to only users with authorization. Many organizations, governmental and private, have started adopting high label of access control security systems for physical entry into their facilities. Whether it is a simple non intelligent access control system like a punching in a password, or advanced biometric systems that scan and permit entry very specifically, there are many advantages to employing these security systems.</p>
                        <p>Biometric systems will collect and store this data in order to use it for verifying personal identity. The combination of biometric data systems and biometrics recognition/ identification technologies creates the biometric security systems. The biometric security system is a lock and capture mechanism to control access to specific data. In order to access the biometric security system, an individual will need to provide their unique characteristics or traits which will be matched to a database in the system. If there is a match, the locking system will provide access to the data for the user. The locking and capturing system will activate and record information of users who accessed the data.</p>
                        <p>Biometric Access Control system authenticates and authorizes an individual based upon his/her physiological characteristics or attributes and then permits him/her to enter the sensitive area or zone. The Biometric access control system ensures greater security of the premises and proves to be significant in monitoring the vital assets or facilities of your business or enterprise.</p>

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