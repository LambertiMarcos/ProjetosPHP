<?php

require 'vendor/autoload.php';

use classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$s = new Basica();
echo $s->somar(125,95)."</br>";