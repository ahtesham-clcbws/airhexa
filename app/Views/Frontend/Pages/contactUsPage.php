<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<section class="breadcrumb-area d-flex align-items-center">
    <iframe width="100%" style="border:0;height:400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.310189341448!2d77.29080085104604!3d28.56044679400371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce40cbd28ab8b%3A0x0!2zMjjCsDMzJzM3LjYiTiA3N8KwMTcnMzQuOCJF!5e0!3m2!1sen!2sin!4v1674571153664!5m2!1sen!2sin"></iframe>

</section>

<!-- contact-area -->
<section id="contact" class="contact-area contact-bg pt-95 pb-95 p-relative fix" style="background-image:url(/img/bg/about_aliment_bg.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="section-title mb-60 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <span>Please fill the form.</span>
                    <!-- <h2>Get In Tuch</h2> -->
                </div>
                <form action="#" id="contactForm" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <input name="type" value="contact" style="display: none;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-name mb-20">
                                <input type="text" name="name" autocomplete="new-name" placeholder="Full Name" required>
                            </div>
                            <div class="contact-field p-relative c-email mb-20">
                                <input type="email" name="email" autocomplete="new-email" placeholder="Email" required>
                            </div>
                            <div class="contact-field p-relative c-email mb-20">
                                <input type="number" name="mobile" autocomplete="new-mobile" minlength="10" maxlength="10" placeholder="Mobile Number" required>
                            </div>
                            <div class="contact-field p-relative c-message mb-5">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write message" required></textarea>
                            </div>
                            <div class="slider-btn">
                                <button type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</button>
                                <!-- <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div> -->
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-6">
                <div class="section-title mb-60 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <span>Contact Information</span>
                    <!-- <h2>Get In Tuch</h2> -->
                </div>
                <div class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div style="font-size: 22px;">
                        <b>Address:-</b> <br /><span>159-C, Basement, Sarai Jullena,<br />New Delhi, Pin-110025 (INDIA)</span>
                        <div class="dropdown-divider"></div>
                        <b>Phone Number:-</b><br /> <span><a href="tel:8130619084">8130619084</a>, <a href="tel:8299348725">8299348725</a>, <a href="tel:7053496668">7053496668</a></span>
                        <div class="dropdown-divider"></div>
                        <b>Email ID:-</b><br /> <span><a href="mailto:airhexa.ac@gmail.com">airhexa.ac@gmail.com</a><br /><a href="mailto:info@airhexa.in">Info@airhexa.in</a></span>
                        <div class="dropdown-divider"></div>
                        <div class="social-icons mt-5" style="font-size: 30px;">
                            <h5>Follow Us</h5>
                            <?php foreach (SOCIAL_MEDIA as $key => $socialMedia) : ?>
                                <a target="_blank" href="<?= $socialMedia['url'] ?>"><i class="fab fa-<?= $socialMedia['icon'] ?> mr-2"></i></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- contact-area-end -->

<?= $this->endSection() ?>