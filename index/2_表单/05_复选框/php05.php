<?php
$request = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($request)) {
    $list = array(
        'java' => '学习java吧',
        'php' => '学习PHP吧',
        'go' => '学习go吧'
    );
    foreach ($request as $item) {
        echo $list[$item] . "<br/>";
    }
} else {
    ?>
    <form action="" method="post">
        <input type="checkbox" name="q[]" value="java">java
        <input type="checkbox" name="q[]" value="php">php
        <input type="checkbox" name="q[]" value="go">go
        <input type="submit" value="提交">
    </form>
    <?php
}
?>