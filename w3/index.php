<?php

print_r("Sup bro");

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


$factory = (new Factory)->withServiceAccount(__DIR__.'/secret/myphp-6cf18-b78ac2663bd1.json');

$database = $factory->createDatabase();

die(print_r($database));