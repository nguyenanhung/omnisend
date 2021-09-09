# Omnisend

Omnisend: Ecommerce Email Marketing and SMS Platform

## Installation

Simple installation with Composer

```shell
composer require nguyenanhung/omnisend
```

## Example

```php
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