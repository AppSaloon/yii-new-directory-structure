<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../../common/lib/yii/framework/yii.php';

$base=dirname(__FILE__).'/../config/main.php';
$local=dirname(__FILE__).'/../config/main-local.php';
//$config=CMap::mergeArray($base, $local);


// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($base )->run();
