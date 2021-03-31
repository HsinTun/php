<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$a = empty ($_GET['a']) ? 0:intval($_GET['a']);
$b = empty ($_GET['b']) ? 0:intval($_GET['b']);


echo $a + $b .'<br>';

$c=[];

echo empty($c) ?'是空的': '不是';
?>
</body>
</html>
