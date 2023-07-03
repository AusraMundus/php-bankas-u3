<?php
use Bank\App;
session_start();
define('URL', 'http://bankasdb.test/');

require __DIR__ . '/../vendor/autoload.php';

echo App::start();