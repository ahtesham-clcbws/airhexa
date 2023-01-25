<?php foreach (SERVICES_MENU as $key => $service) : ?>
    <li class="<?= $_SERVER['REQUEST_URI'] === route_to($service['route']) ? 'active' : '' ?>">
        <a href="<?= route_to($service['route']) ?>"><?= $service['name'] ?></a>
    </li>
<?php endforeach; ?>