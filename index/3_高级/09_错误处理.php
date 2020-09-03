<?php
# 基本错误处理:die()
//$file = fopen("welcome1.txt",'r');

if(file_exists('welcome1.txt')){
    $file = fopen("welcome1.txt",'r');
}else{
    die('文件不存在');
}
