<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Intercom & Networking', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Intercom & Networking</h2>

                        <p>Communication is an essential part of any company. Whether you’re contacting your employees or notifying the general public of an urgent event, you need paging and intercoms systems to successfully carry out your duties.</p>
                        <p>Falcon can install a public address system within your place of work at an affordable price. We can discuss your needs and come up with a custom communication solution for you.</p>
                        <p>Any type of business, big or small, requires a fast and efficient communication system to be able to function well. Communication is a vital key in all business operation such as sales, planning, decision making, coordination and many others. We offer efficient and reliable intercom system and computer networking solutions suitable for Organizations, Hotels, School, Hospitals, Enterprises, Homes, etc.</p>
                        <p>A weak link in any company can be the reason behind unproductive outcome. Don’t let that link be your company’s network. An unreliable or broken intercom network can really cripple a business right from top to bottom level. With the next level engineers on board and experience of working with many major companies.</p>

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