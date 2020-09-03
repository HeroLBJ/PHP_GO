<?php
# 松散比较: 使用"=="比较,只比较值,不比较类型
# 严格比较: 使用"==="比较,比较值也比较类型
if (42 == "42") {
    echo "松散比较 相等";
} else {
    echo "松散比较 不相等";
}
echo "<br>";
if (42 === "42") {
    echo "严格比较 相等";
} else {
    echo "严格比较 不相等";
}

echo '<br>';

// 0 "0" null "null" false "false" ""

//echo "0 == '0' => " . (0 == "0") . '<br>';
//echo "0 == null => " . (0 == null) . '<br>';
//echo "0 == 'null' => " . (0 == "null") . '<br>';
//echo "0 == false => " . (0 == false) . '<br>';
//echo "0 == 'false' => " . (0 == "false") . '<br>';
//echo "0 == '' => " . (0 == "") . '<br>';

echo "'0' == null => " . ('0' == null) . '<br>';
echo "'0' == 'null' => " . ('0' == "null") . '<br>';
echo "'0' == false => " . ('0' == false) . '<br>';
echo "'0' == 'false' => " . ('0' == "false") . '<br>';
echo "'0' == '' => " . ('0' == "") . '<br>';