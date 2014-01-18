<?php 
namespace Horsebean;

/**
* 传感器工厂。
*/
class Factory
{
    function __construct(){}

    /**
    * 创建一个传感器实例。
    * @return {Sensor} 传感器实例。
    */
    public static function createSensor(){
        return new Sensor();
    }
}

/**
* 传感器的接口。
*/
interface iSensor{
    /**
    * 添加监视指标。
    * @param $key {String} 监视指标的键。
    * @param $value {String | Number} 监视指标的值。
    */
    public function add($key, $value);

    /**
    * 将监视指标数据序列化为JSON格式。
    * @return {String} 序列化后的数据。
    */
    public function toJSON();
}

/**
* 传感器默认实现。
*/
class Sensor implements iSensor
{
    private $dict;

    function __construct(){
        $this->dict = array();
    }
    function Sensor(){
        $this->__construct();
    }

    /**
    * 添加监视指标。
    * @param $key {String} 监视指标的键。
    * @param $value {String | Number} 监视指标的值。
    */
    public function add($key, $value){
        $this->dict[$key] = $value;
    }

    /**
    * 将监视指标数据序列化为JSON格式。
    * @return {String} 序列化后的数据。
    */
    public function toJSON(){
        return json_encode($this->dict);
    }
}
?>