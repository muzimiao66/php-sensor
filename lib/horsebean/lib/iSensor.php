<?php 
namespace horsebean;

/**
* 传感器的接口。
*/
interface iSensor{
    /**
    * 向监视服务注册应用。
    * @param $config {Array} 应用的键值对格式的配置信息。
    */
    public function register($config);

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
?>