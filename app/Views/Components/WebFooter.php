<!-- footer -->
<footer class="footer-bg footer-p pt-95 pb-30 ">

    <div class="footer-top pb-30">
        <div class="container">
            <div class="row justify-content-between">

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
                                        <span>1800-121-3637<br>+91 555 234-8765</span>
                                    </li>
                                    <li>
                                        <i class="icon dripicons-mail"></i>
                                        <span><a href="mailto:info@example.com">info@example.com</a><br><a href="mailto:sale@example.com">sale@example.com</a></span>
                                    </li>
                                    <li>
                                        <i class="fal fa-map-marker-alt"></i>
                                        <span>380 St Kilda Road, Melbourne<br>VIC 3004, Australia</span>
                                    </li>
                                </ul>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6 d-none">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Our Links</h5>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Partners</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Career</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Reviews</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Help</a></li>
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
                <div class="col-xl-5 col-lg-5 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h5>Subscribe To Our News Letter</h5>
                        </div>
                        <div class="footer-text mb-20">
                            <p>Pellentesque quis volutpat odio, rhoncus tempor tellus. Proin condimentum turpis.</p>
                            <!-- form -->
                            <form name="ajax-form" id="contact-form4" action="https://formsubmit.io/send/90aa5128-c301-47bf-ae81-794fa4c07dda" method="post" class="contact-form  newslater">
                                <div class="form-group">
                                    <input class="form-control" id="email2" name="email" type="email" placeholder="Your email" value="" required>
                                    <button type="submit" class="btn btn-custom" id="send2"><i class="fad fa-paper-plane"></i></button>
                                </div>
                                <!-- /Form-email -->
                            </form>
                            <!-- /form -->
                        </div>
                        <div class="footer-social">
                            <span>Follow Us</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
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
                        <p>&copy; <?= date('Y') ?> Air Hexa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->