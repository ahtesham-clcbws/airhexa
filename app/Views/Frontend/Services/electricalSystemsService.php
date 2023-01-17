<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Electrical Systems', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
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
                        <p>In 2010, we have established our Company as a Electrical Contracting Firm. We
                            undertake Turn-key Electrical Projects and are principally engaged in executing and
                            providing Electrical Engineering Service for power, Process, Industrial and
                            Commercial projects both High Tension as well as Low Tension for the Public and
                            Private Sector Undertakings. We provide Services like Designing, Manufacturing,
                            Service, Consultancy &amp; Supply all under one Roof. Our range includes:</p>
                        <ul class="listStyleBullet">
                            <li>Substations up to (33KV),</li>
                            <li>Overhead HT/LT Transmission lines installation.</li>
                            <li>H.T/L.T Substation Works / Transformers / RMU /Switchyard.</li>
                            <li>Design, Fabrication &amp; Erection of medium voltage panel, Control Panels,</li>
                            <li>Capacitor banks &amp; APFC Panel.</li>
                            <li>Internal Electrification of Residential/Commercial works.</li>
                            <li>Façade / Landscaping / external lighting.</li>
                            <li>Street light Poles / Outdoor lighting / Underground Cabling.</li>
                            <li>Cable Tray’s / Raceways /Floor Trunking /Junction Boxes/PVC/GI/MS Conduiting
                                /Hume Pipe /Cable Trenches etc.</li>
                            <li>Bus Ducts/Rising Mains/Sub mains /Meter Room Infra works.</li>
                            <li>Diesel Generator Sets.</li>
                            <li>LV Installation Data/Telephone/Television.</li>
                            <li>UPS / Inverter / WIFI &amp; Networking system etc.</li>
                            <li>Earthing &amp; many more……</li>
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