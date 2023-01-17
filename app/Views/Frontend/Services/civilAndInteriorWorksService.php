<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Civil & Interior Works', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Civil & Interior Works</h2>
                        <p>Our approach to turnkey civil services, is all about collaborative teaming that fulfils multiple parallel objectives, to achieve the functional quality at efficient pricing.</p>
                        <p>Our services include – Due Diligence Land Identification &amp; Selection Soil Testing Excavation Foundation Construction Co-ordination with PMC/Architect Single point of reporting Glass &amp; Glazing Fire Protection Product Procurement Design Planning MEP work Drywall Partitions.</p>
                        <p>We help in constructing a fully planned house, commercial property or any other type of property as per the customer requirement. We have full fledged team of civil workers who can help in completing the work with quality, perfection and on time.</p>
                        <p>We at Falcon can easily carry out your desired construction in the most economical and professional manner with our Civil Work Management Services. Armed with a strong team of highly skilled professionals, we get down to supervise the assigned project in a very methodical manner. We check for all possible obstructions in advance, and act accordingly to ensure that there are no needless delays in the execution of a project at any point of time during its implementation.</p>

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