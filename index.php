<?php

require './constants.php';

$yii = dirname(__FILE__) . '/../etc/yii-framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/config.php';

if (YII_DEBUG) :
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
    error_reporting(E_ALL);
    ini_set('display_errors', '-1');
endif;

require_once($yii);
Yii::createWebApplication($config)->run();
