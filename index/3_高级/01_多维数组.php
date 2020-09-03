<?php
# 创建一个二维数组
$a1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo var_dump($a1);

# 创建一个键值对的二维数组
$b1 = array(
    "java" => array(1, 2, 3),
    "kotlin" => array(4, 5, 6),
    "go" => array(7, 8, 9)
);
echo "<pre>"; // 格式化输出
print_r($b1);
echo "</pre>";

echo "<br>";

echo "b1中键为java的值分别是:" . $b1["java"][0] . "-" . $b1["java"][1] . "-" . $b1["java"][2];
