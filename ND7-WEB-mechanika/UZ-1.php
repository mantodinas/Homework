<?php

if(isset ($_GET['color'])) {
    $color='FF0000';
    echo "<body style='background-color: $color;";
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ1</title>
</head>
<body style='background-color:black;'>
    <a href="http://localhost/Homework/ND7-WEB-mechanika/UZ-1.php?color=1">Raudonas</a>
    <a href="http://localhost/Homework/ND7-WEB-mechanika/UZ-1.php">Juodas</a>
</body>
</html>

<!--
1.
Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET 
duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, 
kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų 
raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, 
vėl pasidarytų juodas.
-->