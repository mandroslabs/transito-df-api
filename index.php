<?php
error_reporting(0);
header('Content-Type: application/json; charset=utf-8');
require 'vendor/autoload.php';
require 'TransitoDf.php';
use Luracast\Restler\Restler;
$rest = new Restler();
$rest->addAPIClass('TransitoDf');
$rest->handle();
?>
