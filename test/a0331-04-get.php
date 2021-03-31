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
$a = isset ($_GET['a']) ? $_GET['a']:0;//如果沒有設定值,回傳值為0
$b = isset ($_GET['b']) ? $_GET['b']:0;


//$a=$_GET['a']??0; //php7
//$b=$_GET['b']??0; //php7

echo $a + $b;




//echo $_GET['a']+$_GET['b'];
//http://192.168.21.72/prboject60/test/a0331-04.php?a=10&b=20
//可以直接在網址上定義a跟b

?>
</body>
</html>
