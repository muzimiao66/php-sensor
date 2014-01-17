#!/usr/bin/php
<?php
define('ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/');

/**
* 向监视服务注册应用。
*/
function register($config){
    $service = $config["service"]["uri"];
    $version = $config["service"]["version"];
    unset($config["service"]);
    print_r($config);
}
include ROOT . "conf.php";
$config = get_horsebean_sensor_config();
register($config);
/*
if (1 == $argc || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
   print_r("usage: {\$PHP_PATH}/php {\$horsebean}/register.php [-c ./conf.php]\n");
   print_r("option:\n");
   print_r("--help or -help or -h or -?\t\tshow horsebean php-sensor info.\n");
   print_r("--config or -config or -c config-path\tset horsebean php-sensor config file.\n");
} elseif($argc > 1 && in_array($argv[1], array('--config', '-config', '-c'))) {
}*/
?>