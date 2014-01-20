<?php
require_once HORSEBEAN_ROOT . 'lib/Hull.php';

namespace horsebean;

use horsebean\Hull;

/**
* 应用自定义的传感器外壳。
*/
class CustomHull extends horsebean\Hull {
    /**
    * 构造函数。
    * @param $sensor {horsebean\iSensor} 需要加壳的传感器。
    */
    function __construct($sensor){
        parent::__construct($sensor);

        /*参照如下范例代码依次添加监视指标*/
        $this->add('run', 1);
    }
}
?>