<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpMqtt\Client\MqttClient;

$server   = 'localhost'; 
$port     = 1883;
$clientId = 'php_test_' . uniqid();

$mqtt = new MqttClient($server, $port, $clientId);
$mqtt->connect();



$mqtt->publish('connect/check', 'From publisher', 0);

$mqtt->loop(true);
