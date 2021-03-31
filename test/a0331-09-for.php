<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;


        }

    </style>
</head>
<body>
<table >
    <?php for ($i=0;$i<10;$i++):  ?>
    <tr >
        <?php for($j=0;$j<10;$j++):

            $c = sprintf('#%X%X00%X%X', $i, $i, $j, $j);

            ?>
        <td style="background-color:<?= $c ?>; ">&nbsp;</td>
        <?php endfor;?>
    </tr>

    <?php endfor;?>
</table>




</body>
</html>
