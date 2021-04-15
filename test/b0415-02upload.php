<?php

$output = [];

//設定一空值前端圖丟到裡面在傳

if (isset($_FILES['avatar'])) {
    $output['file'] = $_FILES['avatar'];
    $fnam = __DIR__ . 'imgs/' . $_FILES['avatar']['name']; //要移動到的位置
    $output['m'] = move_uploaded_file($_FILES['avatar']['tmp_name'], $fname);
    echo json_encode($_FILES['avatar']);
}
