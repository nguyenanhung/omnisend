<?php
/**
 * Project omnisend
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 09/26/2021
 * Time: 08:01
 */
require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\Omnisend\Services\Omnisend;

$omnisend = new Omnisend();

echo 'Version: ' . $omnisend->getVersion() . PHP_EOL;