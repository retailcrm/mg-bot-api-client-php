[![Build Status](https://img.shields.io/travis/retailcrm/mg-bot-api-client-php/master.svg?style=flat-square)](https://travis-ci.org/retailcrm/mg-bot-api-client-php)
[![Covarage](https://img.shields.io/codecov/c/gh/retailcrm/mg-bot-api-client-php/master.svg?style=flat-square)](https://codecov.io/gh/retailcrm/mg-bot-api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/mg-bot-api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/mg-bot-api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/retailcrm/mg-bot-api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/mg-bot-api-client-php)


# Message Gateway Bot API PHP client

This is php library for retailCRM MG Bot API.

## Requirements

* PHP 7.1 and above
* PHP's cURL support
* PHP's JSON support

## Install

1) Get [composer](https://getcomposer.org/download/)

2) Run into your project directory:
```bash
composer require retailcrm/mg-bot-api-client-php ~1.*
```

If you have not used `composer` before, include autoloader into your project.
```php
require 'path/to/vendor/autoload.php';
```

## Usage

### Assign dialog
```php
<?php

use RetailCrm\Common\Exception;
use RetailCrm\Mg\Bot\Client;
use RetailCrm\Mg\Bot\Model\Request\DialogAssignRequest;

$client = new Client('https://mg.url.demo', 'T9DMPvuNt7FQJMszHUd', true);

try {
    $request = new DialogAssignRequest();
    $request->setDialogId(60);
    $request->setUserId(4);

    /* @var \RetailCrm\Mg\Bot\Model\Response\AssignResponse $response */
    $response = $client->dialogAssign($request);
} catch (Exception\LimitException | Exception\InvalidJsonException | Exception\UnauthorizedException $exception) {
    echo $exception->getMessage();
}

echo $response->getPreviousResponsible();
```

### Documentation

* [English](https://help.retailcrm.pro/Developers/MgBot)
* [Russian](https://help.retailcrm.ru/Developers/MgBot)
