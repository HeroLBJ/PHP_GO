<?php

# 声明一个变量
$a = 21;
$b = "ad";
$c = true;

# PHP是弱类型的语言,不需要声明变量的类型

# PHP的变量作用域 Local/Global/Static/Parameter

# 在所有函数中定义的变量,拥有全局作用域.除了函数外,全局变量可以被脚本中的任何部分访问;
# 要在一个函数中访问一个全局变量,需要使用global关键字.
$d = 5; // 全局变量
function run0401()
{
    $e = 10; // 局部变量
    echo "<p>测试函数内变量</p>";
//    echo "变量d为: $d "; // 编译错误
    echo "变量e为:$e";
}

run0401();

echo "<p>测试函数外变量</p>";
echo "变量d为: $d ";
//echo "变量e为:$e"; // 编译错误

# global在函数中访问全局变量
function run0402()
{
    global $d;
    echo "<p>测试函数内变量调用全局变量</p>";
    echo "全局变量d = $d";
}

run0402();

# php将所有全局变量保存在GLOBAL[index]数组中,index是变量的名称,该数组可在函数内部直接调用,且可以修改.
function run0403()
{
    echo '<br/>';
    $a = $GLOBALS['a'];
    $b = $GLOBALS['b'];
    $c = $GLOBALS['c'];
    $d = $GLOBALS['d'];
    echo "全局变量a=$a,b=$b,c=$c,d=$d";
    $GLOBALS["d"] = 100;
    echo '<br/>';
    $newD = $GLOBALS["d"];
    echo "修改全局变量,newD = $newD";
}

run0403();

# Static作用域:当一个函数完成时,它所有变量都被删除;如果希望这个变量不被删除,可使用static关键字
echo "<p>static关键字的使用:</p>";
function run0404()
{
    static $f = 0; // $f被保留下来了,但依然是局部变量
    echo $f;
    $f++;
    echo PHP_EOL;
}

run0404();
run0404();
run0404();
run0404();
run0404();
run0404();
run0404();
run0404();
run0404();
run0404();

echo "<p>方法参数作用域:</p>";

function run0405($g)
{
    $g++;
    $g++;
    echo $g.PHP_EOL;
}

$h = 10;
run0405($h);
echo $h.PHP_EOL;