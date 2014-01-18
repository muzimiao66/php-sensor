<?php
require_once "HorsebeanSensor.php";

$sensor = Horsebean\Factory::createSensor();

/*参照如下范例代码依次添加监视指标*/
$sensor->add('run', 1);

/*报告监视数据*/
echo $sensor->toJSON();
?>