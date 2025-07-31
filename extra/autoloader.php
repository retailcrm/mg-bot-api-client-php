<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$autoloadFile = file_exists(__DIR__ . '/../vendor/autoload.php') 
    ? __DIR__ . '/../vendor/autoload.php'
    : __DIR__ . '/../../../autoload.php';

$loader = require $autoloadFile;

// Проверяем, существует ли метод registerLoader (актуально для doctrine/annotations < 2.0)
if (method_exists(AnnotationRegistry::class, 'registerLoader')) {
    AnnotationRegistry::registerLoader('class_exists');
}

return $loader;