<!-- footer -->
<footer class="bg-dark footer-p pt-95 pb-30 ">

    <div class="footer-top pb-30">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Follow Us</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <?php foreach (SOCIAL_MEDIA as $key => $socialMedia) : ?>
                                    <li><a target="_blank" href="<?= $socialMedia['url'] ?>"><i class="fab fa-<?= $socialMedia['icon'] ?>"></i> <?= $socialMedia['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Our Links</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="<?= route_to('homePage') ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                                <li><a href="<?= route_to('aboutUsPage') ?>"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                <li><a href="<?= route_to('projectsPage') ?>"><i class="fas fa-chevron-right"></i> Project</a></li>
                                <li><a href="<?= route_to('clientsPage') ?>"><i class="fas fa-chevron-right"></i> Clients</a></li>
                                <li><a href="<?= route_to('galleryPage') ?>"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                                <li><a href="<?= route_to('contactUsPage') ?>"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Services</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <?php foreach (SERVICES_MENU as $key => $service) : ?>
                                    <li><a href="<?= route_to($service['route']) ?>"><i class="fas fa-chevron-right"></i> <?= $service['name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Contact Us</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-contact">
                                <ul>
                                    <li>
                                        <i class="icon dripicons-phone"></i>
                                        <span><a href="tel:8130619084">8130619084</a><br /><a href="tel:8299348725">8299348725</a></span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span><a href="mailto:airhexa.ac@gmail.com">airhexa.ac@gmail.com</a><br /><a href="mailto:info@airhexa.in">Info@airhexa.in</a></span>
                                    </li>
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>159-C, Basement, Sarai<br /> Jullena, New Delhi,<br /> Pin-110025 (INDIA)</span>
                                    </li>
                                </ul>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p><a href="<?= route_to('homePage') ?>">Air Hexa Air Solutions</a> &copy; <?= date('Y') ?> | Designed & Powered by <a target="_blank" href="https://www,adronsoft.org/">adronSoft</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->

<!-- Quote-modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 1.3rem!important;">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="quoteModalLabel">Get A Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-4">
                <form action="#" id="quoteForm" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <?= csrf_field() ?>
                    <input name="type" value="quote" style="display: none;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-name mb-20">
                                <input type="text" name="name" autocomplete="new-name" placeholder="Full Name" required>
                            </div>
                            <div class="contact-field p-relative c-email mb-20">
                                <input type="email" name="email" autocomplete="new-email" placeholder="Email">
                            </div>
                            <div class="contact-field p-relative c-email mb-20">
                                <input type="number" name="mobile" autocomplete="new-mobile" minlength="10" maxlength="10" placeholder="Mobile Number" required>
                            </div>
                            <div class="contact-field p-relative c-email mb-20">
                                <select class="" name="service" required>
                                    <option value="" selected>Select Service</option>
                                    <?php foreach (SERVICES_MENU as $key => $service) : ?>
                                        <option value="<?= $service['name'] ?>"><?= $service['name'] ?></option>
                                    <?php endforeach; ?>
                                    <option value="Other">Other Service</option>
                                </select>
                            </div>
                            <div class="contact-field p-relative c-subject mb-20">
                                <input type="text" name="subject" autocomplete="new-subject" placeholder="Subject:- eg:I would like to discuss">
                            </div>
                            <div class="contact-field p-relative c-message mb-3">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Elaborate" required></textarea>
                            </div>
                            <div class="slider-btn">
                                <button type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Request</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>