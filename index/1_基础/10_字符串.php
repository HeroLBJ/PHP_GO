<?php

# 并置运算符 .
echo "a"."b"."c";

# 获取字符串长度
$name = "张三丰";
echo "name的长度为:".strlen($name)."<br>";

# 查找字符串
$english = "abcdefg";
echo "a出现的位置:".strpos($english,"a")."<br>";
echo "d出现的位置:".strpos($english,"d")."<br>"; // 找到 返回下标
echo "x出现的位置:".strpos($english,"x")."<br>"; // 没有找到 返回值为false
