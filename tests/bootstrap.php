<?php

if (function_exists('date_default_timezone_set')
    && function_exists('date_default_timezone_get')
) {
    date_default_timezone_set(date_default_timezone_get());
}

(static function () {
    $loader = include dirname(__DIR__) . '/vendor/autoload.php';
    $loader->add('RetailCrm\\Mg\\Bot\\Test', __DIR__);
})();


use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

try {
    $dotenv->usePutenv(true);
    $dotenv->load(__DIR__ . '/../.env');
} catch (Exception $exception) {
    echo "WARNING: Can't load .env file. Using default environment.";
}
