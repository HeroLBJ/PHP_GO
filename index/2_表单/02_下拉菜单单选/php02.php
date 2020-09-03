<?php

$request = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

if ($request) {
    if ($request == 'Java') {
        echo '学习Java语言';
    } else if ($request == 'Php') {
        echo '学习PHP语言';
    } else if ($request == 'Kotlin') {
        echo '学习Kotlin语言';
    } else if ($request == 'Go') {
        echo '学习Golang语言';
    } else {
        echo '没有该门语言';
    }
} else {
    ?>

    <form action="" method="get">
        <select name='q'>
            <option value="">请选择一个语言</option>
            <option value="Java">JAVA</option>
            <option value="Php">PHP</option>
            <option value="Kotlin">Kotlin</option>
            <option value="Go">Golang</option>
        </select>
        <input type="submit" value="提交">
    </form>

    <?php
}
?>
