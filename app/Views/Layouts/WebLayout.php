<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= isset($pageTitle) && !empty($pageTitle) ? $pageTitle : 'Air Hexa' ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/dripicons.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/meanmenu.css">
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <?= $this->renderSection('css') ?>
</head>

<body>

    <div id="loader">
        <div class="row text-center">
            <div class="centered">
                <div class="blob-1"></div>
                <div class="blob-2"></div>
            </div>
        </div>
    </div>

    <?= view('Components/WebHeader'); ?>

    <!-- main-area -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <!-- main-area-end -->

    <?= view('Components/WebFooter'); ?>

    <!-- JS here -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/one-page-nav-min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/ajax-form.js"></script>
    <script src="/js/paroller.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/js_isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.min.js"></script>
    <script src="/js/jquery.meanmenu.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/parallax-scroll.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/element-in-view.js"></script>
    <script src="/js/vendor/sweetalert2@11.js"></script>
    <script src="/js/main.js"></script>
    <?= $this->renderSection('js') ?>
</body>

</html>