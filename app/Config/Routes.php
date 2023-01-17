<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index', ['as' => 'homePage']);
$routes->view('about-us', 'Frontend/Pages/aboutUsPage', ['as' => 'aboutUsPage']);
$routes->view('projects', 'Frontend/Pages/projectsPage', ['as' => 'projectsPage']);
$routes->view('clients', 'Frontend/Pages/clientsPage', ['as' => 'clientsPage']);
$routes->view('gallery', 'Frontend/Pages/galleryPage', ['as' => 'galleryPage']);
$routes->view('contact-us', 'Frontend/Pages/contactUsPage', ['as' => 'contactUsPage']);

// Services Pages Start
$routes->group('service', static function ($routes) {
    // $routes->get('electrical-system', static function () {
    //     return print_r([$_SERVER['REQUEST_URI'], route_to('fireFightingSystemService')]);
    // });
    $routes->view('electrical-system', 'Frontend/Services/electricalSystemsService', ['as' => 'electricalSystemsService']);
    $routes->view('fire-fighting-system', 'Frontend/Services/fireFightingSystemService', ['as' => 'fireFightingSystemService']);
    $routes->view('plumbing-system', 'Frontend/Services/plumbingSystemService', ['as' => 'plumbingSystemService']);
    $routes->view('hvac', 'Frontend/Services/hvacService', ['as' => 'hvacService']);
    $routes->view('solar-system', 'Frontend/Services/solarSystemService', ['as' => 'solarSystemService']);
    $routes->view('civil-and-interior-works', 'Frontend/Services/civilAndInteriorWorksService', ['as' => 'civilAndInteriorWorksService']);
    $routes->view('cctv-and-security-surveillance', 'Frontend/Services/cctvAndSecuritySurveillanceService', ['as' => 'cctvAndSecuritySurveillanceService']);
    $routes->view('access-control-biometric', 'Frontend/Services/accessControlBiometricService', ['as' => 'accessControlBiometricService']);
    $routes->view('automation-solutions', 'Frontend/Services/automationSolutionsService', ['as' => 'automationSolutionsService']);
    $routes->view('intercom-and-networking', 'Frontend/Services/intercomAndNetworkingService', ['as' => 'intercomAndNetworkingService']);
});
// Services Pages End

// Admin Auth Pages Start
// Admin Auth Pages End

// Admin Routes
$routes->group('admin', ['filter' => 'adminFilter'], static function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('contacts', 'AdminController::contacts');
    $routes->get('inquiries', 'AdminController::inquiries');
});

// redirect non used routes.
$routes->addRedirect('service', 'homePage');






// $routes->get('about-us', 'PagesController::index', ['as' => 'aboutUsPage']);
// $routes->get('projects', 'PagesController::index', ['as' => 'projectsPage']);
// $routes->get('clients', 'PagesController::index', ['as' => 'clientsPage']);
// $routes->get('gallery', 'PagesController::index', ['as' => 'galleryPage']);
// $routes->get('contact-us', 'PagesController::index', ['as' => 'contactUsPage']);

// $routes->group('service', static function ($routes) {
//     $routes->get('electrical-systems', ['as' => 'electricalSystemsService'], static function ($routes) {
//     });
//     $routes->get('fire-fighting-system', ['as' => 'fireFightingSystemService'], static function ($routes) {
//     });
//     $routes->get('plumbing-system', ['as' => 'plumbingSystemService'], static function ($routes) {
//     });
//     $routes->get('hvac', ['as' => 'hvacService'], static function ($routes) {
//     });
//     $routes->get('solar-system', ['as' => 'solarSystemService'], static function ($routes) {
//     });
//     $routes->get('civil-and-interior-works', ['as' => 'civilAndInteriorWorksService'], static function ($routes) {
//     });
//     $routes->get('cctv-and-security-surveillance', ['as' => 'cctvAndSecuritySurveillanceService'], static function ($routes) {
//     });
//     $routes->get('access-control-biometric', ['as' => 'accessControlBiometricService'], static function ($routes) {
//     });
//     $routes->get('automation-solutions', ['as' => 'automationSolutionsService'], static function ($routes) {
//     });
//     $routes->get('intercom-and-networking', ['as' => 'intercomAndNetworkingService'], static function ($routes) {
//     });
// });

// $routes->group('service', static function ($routes) {
//     $routes->get('electrical-systems', 'ServicesController::electricalSystemsService', ['as' => 'electricalSystemsService']);
//     $routes->get('fire-fighting-system', 'ServicesController::fireFightingSystemService', ['as' => 'fireFightingSystemService']);
//     $routes->get('plumbing-system', 'ServicesController::plumbingSystemService', ['as' => 'plumbingSystemService']);
//     $routes->get('hvac', 'ServicesController::hvacService', ['as' => 'hvacService']);
//     $routes->get('solar-system', 'ServicesController::solarSystemService', ['as' => 'solarSystemService']);
//     $routes->get('civil-and-interior-works', 'ServicesController::civilAndInteriorWorksService', ['as' => 'civilAndInteriorWorksService']);
//     $routes->get('cctv-and-security-surveillance', 'ServicesController::cctvAndSecuritySurveillanceService', ['as' => 'cctvAndSecuritySurveillanceService']);
//     $routes->get('access-control-biometric', 'ServicesController::accessControlBiometricService', ['as' => 'accessControlBiometricService']);
//     $routes->get('automation-solutions', 'ServicesController::automationSolutionsService', ['as' => 'automationSolutionsService']);
//     $routes->get('intercom-and-networking', 'ServicesController::intercomAndNetworkingService', ['as' => 'intercomAndNetworkingService']);
// });



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
