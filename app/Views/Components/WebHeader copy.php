<!-- header -->
<header class="header-area">
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 d-none d-lg-block">
                </div>
                <div class="col-lg-4 col-md-4 d-none d-lg-block">
                    <div class="header-social text-right">
                        <span>
                            <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </span>
                        <!--  /social media icon redux -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 d-none  d-md-block">
                    <div class="header-cta">
                        <ul>
                            <li>
                                <i class="icon dripicons-phone"></i>
                                <span>+8 12 3456897</span>
                            </li>
                            <li>
                                <i class="icon dripicons-mail"></i>
                                <span>info@example.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 d-none d-md-block">
                    <a href="#" class="top-btn">Get A Quote</a>


                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="<?= route_to('homePage') ?>"><img src="/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-9 col-lg-9"> -->
                    <div class="col">
                        <div class="main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="<?= route_to('homePage') ?>">Home</a></li>
                                    <li><a href="<?= route_to('aboutUsPage') ?>">About Us</a></li>
                                    <li class="has-sub">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('electricalSystemsService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('electricalSystemsService') ?>">Electrical System</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('fireFightingSystemService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('fireFightingSystemService') ?>">Fire Fighting System</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('plumbingSystemService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('plumbingSystemService') ?>">Plumbing System</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('hvacService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('hvacService') ?>">HVAC</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('solarSystemService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('solarSystemService') ?>">Solar System</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('civilAndInteriorWorksService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('civilAndInteriorWorksService') ?>">Civil &amp; Interior Works</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('cctvAndSecuritySurveillanceService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('cctvAndSecuritySurveillanceService') ?>">CCTV &amp; Security Surveillance</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('accessControlBiometricService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('accessControlBiometricService') ?>">Access Control &amp; Biometric</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('automationSolutionsService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('automationSolutionsService') ?>">Automation Solutions</a>
                                            </li>
                                            <li class="<?= $_SERVER['REQUEST_URI'] === route_to('intercomAndNetworkingService') ? 'active' : '' ?>">
                                                <a href="<?= route_to('intercomAndNetworkingService') ?>">Intercom &amp; Networking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= route_to('projectsPage') ?>">Projects</a></li>
                                    <li><a href="<?= route_to('clientsPage') ?>">Cilents</a></li>
                                    <li><a href="<?= route_to('galleryPage') ?>">Gallery</a></li>
                                    <li><a href="<?= route_to('contactUsPage') ?>">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                            <div class="menu-search text-right">
                                <a href="#" class="menu-tigger"><i class="fas fa-search"></i></a>
                            </div>

                        </div> -->
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-menu">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" value="" placeholder="Search" />
                <button><i class="fa fa-search"></i></button>
            </form>

            <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="#home"><span>+8 12
                                3456897</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                        <a href="#howitwork"><span>info@example.com</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="offcanvas-overly"></div>

    </div>
</header>
<!-- header-end -->