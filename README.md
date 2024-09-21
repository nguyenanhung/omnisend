# Omnisend

[![Latest Stable Version](https://img.shields.io/packagist/v/nguyenanhung/omnisend.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/omnisend)
[![Total Downloads](https://img.shields.io/packagist/dt/nguyenanhung/omnisend.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/omnisend)
[![Daily Downloads](https://img.shields.io/packagist/dd/nguyenanhung/omnisend.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/omnisend)
[![Monthly Downloads](https://img.shields.io/packagist/dm/nguyenanhung/omnisend.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/omnisend)
[![License](https://img.shields.io/packagist/l/nguyenanhung/omnisend.svg?style=flat-square)](https://packagist.org/packages/nguyenanhung/omnisend)
[![PHP Version Require](https://img.shields.io/packagist/dependency-v/nguyenanhung/omnisend/php)](https://packagist.org/packages/nguyenanhung/omnisend)

Omnisend: Ecommerce Email Marketing and SMS Platform

## Version

- [x] `v1.x` Support all PHP Version `>=5.6`
- [x] `v2.x` Support all PHP Version `>=7.0`

## Installation

Simple installation with Composer

```shell
composer require nguyenanhung/omnisend
```

## Example

```php
<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/09/2021
 * Time: 10:32
 */
 
use nguyenanhung\Omnisend\Services\Omnisend;

require_once __DIR__ . 'vendor/autoload.php';

$options = [
    'debugStatus' => true,
    'debugLevel'  => null,
    'loggerPath'  => '/tmp',
];
$apiKey  = 'xxx';

$omnisend = new Omnisend($options);
$omnisend->setApiKey($apiKey);


// Example Request Events

$params = [
    'eventId' => 'xxx'
];
$body   = [
    'email'  => 'example@domain.com',
    'fields' => 'abc'
];

$result = $omnisend->withPostRequest()->events($body);

echo "<pre>";
print_r($result);
echo "</pre>";
```

See more at: https://github.com/nguyenanhung/omnisend/tree/main/example

## Contact

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3
