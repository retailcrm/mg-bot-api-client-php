[![Build Status](https://img.shields.io/travis/retailcrm/mg-bot-api-client-php/master.svg?style=flat-square)](https://travis-ci.org/retailcrm/mg-bot-api-client-php)
[![Latest stable](https://img.shields.io/packagist/v/retailcrm/mg-bot-api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/mg-bot-api-client-php)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/mg-bot-retailcrm/api-client-php.svg?style=flat-square)](https://packagist.org/packages/retailcrm/mg-bot-api-client-php)


# retailCRM API PHP client

This is php retailCRM MG Bot API client.

## Requirements

* PHP 7.0 and above
* PHP's cURL support
* PHP's JSON support

## Install

1) Get [composer](https://getcomposer.org/download/)

2) Run into your project directory:
```bash
composer require retailcrm/mg-bot-api-client-php ~1.0
```

If you have not used `composer` before, include autoloader into your project.
```php
require 'path/to/vendor/autoload.php';
```

## Usage

### Assign dialog
```php
use \RetailCrm\Mg\Bot\Client;
use \RetailCrm\Mg\Bot\Model\Request\DialogAssignRequest;

$client = new Client('https://mg.url.demo', 'T9DMPvuNt7FQJMszHUd', true);

try {
    $request = new DialogAssignRequest();
    $request->setDialogId(60);
    $request->setUserId(4);

    $response = $client->dialogAssign($request);
} catch (\RetailCrm\Common\Exception\CurlException $exception) {
    echo $exception->getMessage();
} catch (\RetailCrm\Common\Exception\LimitException $exception) {
    echo $exception->getMessage();
} catch (\InvalidArgumentException $exception) {
    echo $exception->getMessage();
} catch (\Exception $exception) {
    echo $exception->getMessage();
}

if ($response->isSuccessful()) {
    $response->getPreviousResponsible();
}
```

### Documentation

* [English](https://139810.selcdn.ru/download/doc/mg-bot-api/bot.v1.en.html)
* [Russian](https://help.retailcrm.ru/Developers/MgBot)
