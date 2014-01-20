<?php
/**
* 获取运维监控系统传感器需要的PHP应用信息。
* @return Array
*/
function get_horsebean_sensor_config(){
    return array(
        /*需要监视的应用名称*/
        "name" => "php_app",
        /*需要监视的应用版本号*/
        "version" => "0.0.0",
        /*当前应用部署的IP地址*/
        "ip" => "127.0.0.1",
        /*当前应用的端口号*/
        "port" => "80",
        /*当前应用部署的位置*/
        "location" => "实验室",
        /*监视方式（101：HTTP短链接主动监视；102：HTTP短链接被动监视）*/
        "mode" => "102", //不能修改
        /*监视类型*/
        "type" => "test",
        /*监视的时间间隔（单位：秒）*/
        "interval" => "300",
        /*被动监视的传感器URL地址*/
        "sensor" => "http://127.0.0.1:8080/horsebean/sensor.php",
        /*监视服务的注册URL地址*/
        "service" => array("uri" => "http://127.0.0.1:3333/svr/register", "version" => "0.1.0")
    );
}
?>