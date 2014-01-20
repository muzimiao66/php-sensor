<?php 
namespace horsebean;

/**
* 传感器的外壳抽象基类。
*/
abstract class Hull{
    private $sensor;

    /**
    * 构造函数。
    * @param $sensor {horsebean\iSensor} 需要加壳的传感器。
    */
    function __construct($sensor){
        $this->sensor = $sensor;
    }

    /**
    * 添加监视指标。
    * @param $key {String} 监视指标的键。
    * @param $value {String | Number} 监视指标的值。
    */
    public function add($key, $value){
        $this->sensor->add($key, $value);
    }

    /**
    * 将监视指标数据序列化为JSON格式。
    * @return {String} 序列化后的数据。
    */
    public function toJSON(){
        return $this->sensor->toJSON();
    }
}
?>