<?php

# var_dump():返回变量的数据类型和值
echo '整型:' . var_dump(555) . '<br>';
echo '字符串:' . var_dump("555") . '<br>';
echo 'bool:' . var_dump(true) . '<br>';
echo '浮点型:' . var_dump(10.10) . '<br>';
echo '数组:' . var_dump(array('java', 'php', 'c')).'<br>';

class Car
{
    var $color;

    function __construct($color = 'green')
    {
        $this->color = $color;
    }

    function whatColor()
    {
        return $this->color;
    }
}
$car1 = new Car();
$car2 = new Car('write');
echo "对象:".var_dump($car1).'<br>';
echo '对象:'.var_dump($car2).'<br>';
