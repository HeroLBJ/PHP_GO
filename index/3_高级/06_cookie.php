<?php
# Cookie是什么？
/**
 * 1.cookie常用于识别用户。
 * 2.cookie是一种服务器留在用户计算机上的小文件。
 * 3.每当同一台计算机通过浏览器请求页面时，这台计算机将会发送cookie.
 * 4.通过PHP,能够创建并取回cookie的值.
 */

# 创建Cookie
/**
 * setcookie():设置cookie,必须在<HTML>标签之前.
 */
// cookie名  cookie的值  cookie的过期时间(一小时后)
setcookie("user","usercookie",time()+3600);
// 发送cookie时,cookie的值会自动进行URL编码,取回时自动解码
setrawcookie("user2","usercookie"); // setrawcookie:防止URL编码

# 取回Cookie的值
echo $_COOKIE['user'];

# 删除Cookie的值:将Cookie过期时间设置为过去时间
setcookie("user","usercookie",time()-3600); // 过去一小时


















