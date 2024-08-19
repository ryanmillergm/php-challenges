<?php

require 'Invoice.php';
require 'Customer.php';

use App\Customer;
use App\Invoice;

// require_once __DIR__ . '/../vendor/autoload.php';

// set_exception_handler(function(\Throwable $e) {
//     var_dump($e->getMessage());
// });

// echo array_rand([], 1);

// $invoice = new Invoice(new Customer());
$invoice = new Invoice(new Customer(['foo' => 'bar']));

try {
    $invoice->process(25);
} catch(\App\Exception\MissingBillingInfoException $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
} catch(\InvalidArgumentException $e) {
    echo 'Invalid argument exception' . PHP_EOL;
} finally {
    echo 'Finally block' . PHP_EOL;
}