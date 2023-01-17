<?= $this->extend('Layouts/WebLayout') ?>

<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<?= view('Components/WebServicesBreadcrumb', ['serviceName' => 'Get in Touch', 'imageUrl' => '/img/testimonial/test-bg.jpg']); ?>
<!-- breadcrumb-area-end -->
			<!-- contact-area -->
            <section id="contact" class="contact-area contact-bg pt-95 pb-95 p-relative fix" style="background-image:url(/img/bg/contact_bg.png); background-size: cover;background-repeat: no-repeat;">
                <div class="container">
             
					<div class="row">
						<div class="col-lg-5">
                        <div class="section-title mb-60 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <!-- <span>Contact</span> -->
                                <!-- <h2>Get in Touch with Us</h2> -->
                            </div>
						<form action="#" class="contact-form wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
							<div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" placeholder="Write here  Jhonathan Doe">
                                </div>                               
                            </div>
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-email mb-20">                                    
                                    <input type="text" placeholder="Write here youremail">
                                </div>                                
                            </div>
							<div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" placeholder="I would like to discuss">
                                </div>
                            </div>							
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-45">                                  
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                            <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</a>					<div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>						
                                        </div>                
                            </div>
                            </div>
                        
                    </form>
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->
			 <!-- brand-area -->
            <div class="brand-area pt-60 pb-60" style="background-color:#fff">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/img/brand/client_icon_1.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/img/brand/client_icon_2.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/img/brand/client_icon_3.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/img/brand/client_icon_4.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/img/brand/client_icon_1.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

<?= $this->endSection() ?>