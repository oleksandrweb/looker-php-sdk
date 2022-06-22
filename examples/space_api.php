<?php

[$authenticatedClient, $config] = require __DIR__ . '/login.php';

$spaceApi = new \Swagger\Client\Api\SpaceApi($authenticatedClient, $config);

$spaces = $spaceApi->allSpaces(['name']);

foreach ($spaces as $space) {
    echo $space->getName() . "\n";
}
