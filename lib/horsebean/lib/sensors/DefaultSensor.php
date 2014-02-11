<?php 
namespace horsebean\sensors;

use \Guzzle\Http\Client;
use \horsebean\iSensor;

/**
* 传感器默认实现。
*/
class DefaultSensor implements \horsebean\iSensor
{
    private $dict;

    function __construct(){
        $this->dict = array();
    }
    function DefaultSensor(){
        $this->__construct();
    }

    /**
    * 向监视服务注册应用。
    * @param $config {Array} 应用的键值对格式的配置信息。
    */
    function register($config){
        $uri = $config["service"]["uri"];
        $version = $config["service"]["version"];
        unset($config["service"]);

        $client = new \Guzzle\Http\Client();
        $request = $client->post($uri, array(), $config);
        $response = $request->send();
        print_r('uri:');
        print_r($uri);
        print_r('config:');
        print_r($config);
        print_r('body:');
        print_r($response->getBody());
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