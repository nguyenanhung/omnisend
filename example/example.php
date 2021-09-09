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

require_once __DIR__ . '/../vendor/autoload.php';

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
