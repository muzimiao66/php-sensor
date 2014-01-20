<?php 
namespace horsebean\sensors;

require_once HORSEBEAN_ROOT . "lib/iSensor.php";
require_once HORSEBEAN_ROOT . "lib/sensors/DefaultSensor.php";

/**
* 传感器工厂。
*/
class SensorFactory
{
    function __construct(){}

    /**
    * 创建一个传感器实例。
    * @return {horsebean\iSensor} 传感器实例。
    */
    public static function createSensor(){
        return new DefaultSensor();
    }
}
?>