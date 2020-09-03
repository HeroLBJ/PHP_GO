<?php

$request = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($request)) {
    $list = array(
        "java" => "学习java吧",
        "kotlin" => "学习kotlin吧",
        "C++" => "学习C++吧",
        "php" => "学习PHP吧"
    );
    foreach ($request as $child) {
        # PHP_EOL为常量 == "\n"
        echo $list[$child]. '<br/>';
    }
} else {
    ?>
    <form action="" method="post">
        <!-- multiple="multiple" 设置多选 -->
        <!-- name="q[]" 以数组方式获取 -->
        <select multiple="multiple" name="q[]">
            <option value="">请选择语言</option>
            <option value="java">Java</option>
            <option value="kotlin">Kotlin</option>
            <option value="C++">C++</option>
            <option value="php">PHP</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <?php
}

?>
