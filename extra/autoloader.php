<?php

// autoload.php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */

$autoloadFile = file_exists(__DIR__ . '/../vendor/autoload.php') 
    ? __DIR__ . '/../vendor/autoload.php'
    : __DIR__ . '/../../../autoload.php';

$loader = require $autoloadFile;

AnnotationRegistry::registerLoader('class_exists');

return $loader;
