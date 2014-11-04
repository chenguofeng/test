<?php
//判断字符串是否是date类型
$data = '2011-02-01';
if (date('Y-m-d', strtotime($data)) == $data) {
    echo 'true';
} else {
    echo 'false';
}
?>