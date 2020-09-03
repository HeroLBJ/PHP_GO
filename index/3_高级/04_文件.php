<?php
# 打开文件:fopen()
/**
 * mode:
 *  r:只读
 *  r+:读写
 *  w:只写;打开并清空文件的内容;如果文件不存在,则创建.
 *  w+:读写.打开并清空内容;不存在则创建
 *  a:追加;在文件尾写;不存在则创建
 *  a+:读/追加.文件尾写内容.
 *  x:只写,创建新文件,如果存在,返回false和一个错误
 *  x+:读/写.创建新文件,如果存在,返回false和一个错误
 */
$file = fopen("welcome.txt","w+") or exit("Unable to open file!");
echo $file;

# 关闭文件
fclose($file);

# 检测文件末尾:feof() 在循环遍历未知长度的数据时,feof()函数很有用
if(feof($file)){
    echo "文件末尾";
}

# 逐行读取文件:fgets() 在调用该函数后,文件指针会移动到下一行.
while ((!feof($file))){ // 没有到文件尾
    echo fgets($file).'<br>'; // 逐行读取
}
fclose($file);

# 逐字符读取文件 fgetc() 在调用该函数后,文件指针会移动到下一个字符
while (!feof($file)){ // 没有到达文件末尾
    echo fgetc($file); // 逐字符读取
}
fclose($file);


