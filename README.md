# Omnisend

[![Latest Stable Version](https://poser.pugx.org/nguyenanhung/omnisend/v/stable)](https://packagist.org/packages/nguyenanhung/omnisend)
[![Total Downloads](https://poser.pugx.org/nguyenanhung/omnisend/downloads)](https://packagist.org/packages/nguyenanhung/omnisend)
[![Latest Unstable Version](https://poser.pugx.org/nguyenanhung/omnisend/v/unstable)](https://packagist.org/packages/nguyenanhung/omnisend)
[![composer.lock](https://poser.pugx.org/nguyenanhung/omnisend/composerlock)](https://packagist.org/packages/nguyenanhung/omnisend)
[![License](https://poser.pugx.org/nguyenanhung/omnisend/license)](https://packagist.org/packages/nguyenanhung/omnisend)

Omnisend: Ecommerce Email Marketing and SMS Platform

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