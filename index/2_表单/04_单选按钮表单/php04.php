<?php
$request = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($request) {
    if ($request == 'java') {
        echo '学习java吧';
    } else if ($request == 'go') {
        echo '学习go吧';
    } else if ($request == 'php') {
        echo '学习php吧';
    }
} else {
    ?>
    <form action="" method="get">
        <input type="radio" name="q" value="java">java</input>
        <input type="radio" name="q" value="go">go</input>
        <input type="radio" name="q" value="php">php</input>
        <input type="submit" value="提交"/>
    </form>
    <?php
}
?>

