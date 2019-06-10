<?php

if (function_exists('date_default_timezone_set')
    && function_exists('date_default_timezone_get')
) {
    date_default_timezone_set(date_default_timezone_get());
}

$loader = include dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('RetailCrm\\Mg\\Bot\\Test', __DIR__);

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');
