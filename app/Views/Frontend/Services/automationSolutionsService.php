<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Automation Solutions', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Automation Solutions</h2>
                        <p>With the Internet of Things taking over the lives, automation has made lives simpler and homes smarter. Smart homes are the base to smart cities and a much secure lifestyle. It is a connected home technology that is designed to automate functions and grant you control over the property. Home control mechanism gives you the access to control the security of the house.</p>
                        <p>It works on mobile application control which can be integrated with the security systems installed. You can set the schedule, and the rest is automated and based on your personal preferences thus providing convenience, control, money savings, and an overall smarter home. Home automation can also alert you to events that you might want to know about right-away while you are gone like water leaks and unexpected access to your home etc.</p>
                        <p>With a range of easy to install products and the ability to create customizable scenarios, Falcon is your answer for all your home and office automation requirements. All you need is a smartphone, a wifi connection and our best in-class products to simplify the mundane tasks of managing your home.</p>

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