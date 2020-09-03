<?php

# 文件被删除结束后,默认的被存储在临时目录中,必须将它从临时目录中删除或移动到其他地方,如果没有则会被删除.
# 也就是说不管是否上传成功,脚本执行完后临时目录里的文件肯定会被删除.
# 所以:在删除之前要用PHP的copy()函数将它复制到其他位置,此时,才算完成了上传文件过程.

$_FILES['file']['name']; // 客户端文件的原名称
$_FILES['file']['type']; // 文件的MIME类型,需要浏览器提供该信息的支持,例如"image/gif"
$_FILES['file']['size']; // 已上传文件的大小,单位为字节
$_FILES['file']['tmp_name']; // 文件被上传后在服务器端存储的临时文件名,一般是系统默认.可以在php.ini的upload_tmp_dir指定,但用putenv()函数设置是不起作用的
$_FILES['file']['error']; // 上传错误相关代码
// UPLOAD_ERR_OK - 值：0; 没有错误发生，文件上传成功。
// UPLOAD_ERR_INI_SIZE - 值：1; 上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。
// UPLOAD_ERR_FORM_SIZE - 值：2; 上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。
// UPLOAD_ERR_PARTIAL - 值：3; 文件只有部分被上传。
// UPLOAD_ERR_NO_FILE - 值：4; 没有文件被上传。
// UPLOAD_ERR_NO_TMP_DIR -其值为 6，找不到临时文件夹。PHP 4.3.10 和 PHP 5.0.3 引进。
// UPLOAD_ERR_CANT_WRITE - 其值为 7，文件写入失败。PHP 5.1.0 引进。

// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
# explode:将字符串以.分割成数组
$temp = explode(".", $_FILES["file"]["name"]);
# 文件大小
echo $_FILES["file"]["size"];
# 获取数组中最后一个字符串
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
    # in_array 判断first是否在second中存在
    && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    } else {
        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";

        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
        } else {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
        }
    }
} else {
    echo "非法的文件格式";
}