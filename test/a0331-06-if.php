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

<h2><?= isset($_GET['age']) ? "年齡: {$_GET['age']}" : "沒有給年齡"  ?></h2>
<?php

if(isset($_GET['age']) && intval($_GET['age']) >=18){

    echo '<img src="../imgs/great-dane-giant-dog-breeds.jpg" alt="" width="300px">';

}else{
    echo '<img src="../imgs/GettyImages-588935825.jpg" alt="" width="300px">';
}
?>

<!--不同的寫法,分開寫包html-->
<?php /*
<?php
if(isset($_GET['age']) && intval($_GET['age']) >= 18){
    ?>
    <img src="../imgs/great-dane-giant-dog-breeds.jpg" alt="" width="300px">
    <?php
} else {
    ?>

    <img src="../imgs/GettyImages-588935825.jpg" alt="" width="300px">
    <?php
}
?>
*/?>


<!--不同的寫法,比較精簡-->
<?php
//if(isset($_GET['age']) && intval($_GET['age']) >= 18) :?>
<!--    <img src="../imgs/great-dane-giant-dog-breeds.jpg" alt="" width="300px">-->
<?php //else: ?>
<!--    <img src="../imgs/GettyImages-588935825.jpg" alt="" width="300px">-->
<?php //endif ;?>



</body>
</html>
