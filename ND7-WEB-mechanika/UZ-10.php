<?php

$color = "gray";
$letters =['A','B','C','D','E','F','G','H','I','J',];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkbox'])){
    echo count(($_POST['checkbox']))."/".$_POST['times']; 
    $color ="white";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ10</title>
    <style>
        .lbl{
            color:white;
        }
    </style>
</head>
<body style="background-color:grey;">
    <form action="" method="post">
    <?php for ($i=0; $i < rand(3,10); $i++) { ?>
        <label class="lbl" for="a<?=$i?>"> <?=$letters[$i]?> </label>
        <input type="checkbox" name="checkbox" id="a <?= $i?>">
        <br>
    <?php } ?>
    <input type="text" neme="times" value="<?=$i?>">
    <br> <button type="submit">generate</button>
    </form>
</body>
</html>

<!--
10. 
Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. 
Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.
-->
