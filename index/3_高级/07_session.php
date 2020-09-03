<?php
# Session:用于存储关于用户会话的信息,或者更改用户会话的设置.Session变量存储单一用户的信息,并且对于应用程序中的所有页面都是可用的.
# Session的工作机制:为每个访客创建一个唯一的ID(UID),并基于这个UID来存储变量.UID存储在Cookie中,或者通过URL进行传导.

# 开始Session
// 把用户信息存储到session之前,必须启动会话.必须位于<HTML>标签之前
session_start(); // 启动会话
$_SESSION['user'] = 1; // 存储session数据
$sessionUser = $_SESSION['user']; // 获取session的值

if(isset($_SESSION['view'])){
    $_SESSION['view'] += 1;
}else{
    $_SESSION['view'] = 1;
}
echo '预览次数为:'.$_SESSION['view'].'<br>';

# 销毁Session
unset($_SESSION['view']); // 销毁session变量view
session_destroy(); // 销毁session中所有的变量
