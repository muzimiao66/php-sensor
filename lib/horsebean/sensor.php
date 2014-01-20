<?php
require_once 'horsebean.conf.php';
require_once HORSEBEAN_ROOT . 'lib/sensors/SensorFactory.php';
require_once HORSEBEAN_ROOT . 'CustomHull.php';

$sensor = \horsebean\sensors\SensorFactory::createSensor();
$hull = new \horsebean\CustomHull($sensor);

/*报告监视数据*/
echo $hull->toJSON();
?>