<?php

define('ROOT_PATH', __DIR__);
define('CONFIG_PATH', ROOT_PATH . '/../config');
define('APP_PATH', ROOT_PATH . '/../app');
define('VENDOR_PATH', ROOT_PATH . '/../vendor');
define('AF_PATH', ROOT_PATH . '/../../aapf/src');
define('LOG_PATH', '/var/log');
define('APP_NAME', 'api.devinjin.top');
define('CONTROLLER_PATH', APP_PATH . '/Controller');
define('MIDDLEWARE_PATH', APP_PATH . '/Middleware');

require_once VENDOR_PATH . '/autoload.php';
$app = require_once AF_PATH . '/Bootstrap/app.php';
$app->run();