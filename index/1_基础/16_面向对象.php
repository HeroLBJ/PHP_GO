<?php
$user1 = new User("李晓霞",32);
echo $user1->run();

class User
{

    var $name; // 声明变量
    var $age;

    // 构造函数 创建对象时调用
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // 析构函数 在对象结束生命周期时调用
    public function __destruct()
    {
        echo "User销毁";
    }

    function run()
    {
        return $this->name . "在奔跑<br>"; // 通过$this ->来调用  注意:$this -> 后对象不用加 $
    }

}
