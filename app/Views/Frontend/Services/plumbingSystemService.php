<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Plumbing System', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <h2>Plumbing System</h2>

                        <p>In 2014 the Public Health division was established, in usage of water for hygiene, treatment, recycling, disinfection and disposal of water and the conservation of the environment. The design team is also fully geared to give solutions in saving of water and energy conforming to LEEDS and IGBC norms in related areas. The key attributes have resulted in its participation despite the short span of its existence in various LEED rated buildings in various prestigious projects.</p>
                        <p>Our range includes Sanitary fixtures &amp; fittings, Internal drainage (above ground) system, External drainage (underground) system, Rain water disposal system, water supply system, Rainwater harvesting, Plant &amp; utilities etc.</p>
                        <p>We utilize the latest drawing tools and software (AutoCAD Revit 11) and standards conform to the engineering solutions offered in the latest National Building and Uniform Plumbing codes in the following areas :</p>
                        <ul class="listStyleBullet">
                            <li>Water storage, filtration, softening and disinfection.</li>
                            <li>Installation of Reverse Osmosis, Ultra Filtration systems and sewage treatment plants.</li>
                            <li>Water distribution system potable and non-potable including domestic, flushing and irrigation using VFD driven hydro pneumatic systems.</li>
                            <li>Drop less grey water conveyance system to sewage treatment plants through gravity and sewage pumping.</li>
                            <li>Rain and storm water collection, storage (rain water harvesting) recycling and disposal systems.</li>
                            <li>Efficient Hot water generation, distribution and circulation systems.</li>
                            <li>Sustainable heat generation from solar panels.</li>
                            <li>Steam generation and distribution both IBR and non IBR systems.</li>
                            <li>Waste heat recovery from steam condensate and other applications.</li>
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