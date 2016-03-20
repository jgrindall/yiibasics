<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE | E_STRICT | E_DEPRECATED);
error_reporting(E_ALL ^ E_NOTICE);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

defined('YII_ENV') or define('YII_ENV', 'dev');

require_once($yii);
Yii::createWebApplication($config)->run();
