#!/usr/bin/php
<?php
require_once 'horsebean.conf.php';
require_once 'vendor/autoload.php';

require_once HORSEBEAN_ROOT . 'lib/sensors/SensorFactory.php';

use CHH\Optparse;

$parser = new Optparse\Parser("Registered Monitoring Service.");

function usage_and_exit()
{
    global $parser;
    fwrite(STDERR, "{$parser->usage()}\n");
    exit(1);
}

$parser->addArgument("config", array("required" => true));
$parser->addFlag("help", array("alias" => "-h"), "usage_and_exit");
$parser->addFlag("version", array("alias" => "-v"));


try {
    $parser->parse();

    if ($parser["help"]) {
        echo $parser->usage();
        exit;
    }

    if ($parser["version"]) {
        echo "0.1.0";
        exit;
    }

    $config = $parser["config"];
    if ($config) {
        require_once $config;
        $config = get_horsebean_sensor_config();

        $sensor = horsebean\sensors\SensorFactory::createSensor();
        $sensor->register($config);
        exit;
    }
} catch (Optparse\Exception $e) {
    usage_and_exit();
}
?>