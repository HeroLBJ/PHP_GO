<?php
# __LINE__:文件中当前行号
echo "当前行号" . __LINE__ . '<br>';

# __FILE__:文件的完整路径和文件名.如果用在被包含文件中,则返回被包含的文件名.
echo "该文件位于:".__FILE__."<br>";

# __DIR__:文件所在目录.如果用在被包括文件中,则返回被包括的文件所在的目录.
echo "文件目录:".__DIR__."<br>";

# __FUNCTION__:函数名
echo "函数名为:".__FUNCTION__."<br>";

# __CLASS__:类名
echo "类名为:".__CLASS__."<br>";

# __TRAIT__:类名
echo "类名为:".__TRAIT__."<br>";