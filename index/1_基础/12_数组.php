<?php
$a = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
## 获取数组长度
echo "数组a的长度为:" . count($a);
echo "<br>";

## 遍历数组
$count = count($a);
for ($i = 0; $i < $count; $i++) {
    echo $a[$i] . PHP_EOL;
}
echo "<br>";

## 关联数组
$xxx = array(
    "鼠" => "鼠牛虎兔",
    "龙" => "龙蛇马羊",
    "猴" => "猴鸡狗猪",
);

## 遍历关联数组
foreach ($xxx as $k => $v) {
    echo $k . " => " . $v . PHP_EOL;
}