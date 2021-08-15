<?php

$letters =['A','B','C','D','E','F','G','H','I','J',];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkbox'])){
    echo $_POST['checkbox'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ9</title>
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
        <input type="checkbox" name="checkbox" id="a <?= $i ?>">
        <br>
    <?php } ?>
    <br>
        <button type="submit">generate</button>
    </form>
</body>
</html>

<!--
9. 
Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir 
atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite 
taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, 
forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta
checkboksų (ne kurie, o kiek).


DAY-12 video nuo 02:07:12
NEPABAIGTA !

-->
