<?php

include_once(__DIR__ . "/../vendor/autoload.php");

use App\SystemServices\MonologFactory;
use App\persistence\ConnectionFactory;

MonologFactory::getInstance()->info("Testando monolog!!!!");

$conn = ConnectionFactory::getConnectionInstance();

echo "asdfasdf";