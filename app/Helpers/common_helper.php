<?php


function getServices(): array
{
    $services = array(
        array(
            'route' => 'hvacService',
            'name' => 'HVAC',
        ),
        array(
            'route' => 'plumbingSystemService',
            'name' => 'Plumbing &amp; Drainage Systems',
        ),
        array(
            'route' => 'fireFightingSystemService',
            'name' => 'Fire Fighting System',
        ),
        array(
            'route' => 'electricalSystemsService',
            'name' => 'Electrical System <small>(Low Current)</small>',
        ),
        array(
            'route' => 'industrialVentilationService',
            'name' => 'Industrial Ventilation',
        ),
        array(
            'route' => 'cctvAndSecuritySurveillanceService',
            'name' => 'CCTV &amp; Security Surveillance',
        ),
    );

    return $services;
}

function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}
