<?php

$color = "green";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $color = "yellow";
    header("location:./UZ-6.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ6</title>
    <style>
        .bg-color{
            background-color:<?=$color?>
        }
    </style>
</head>
<body class="bg-color">
    <form action="" method="get">
        <button type="submit">get</button>
    </form>

    <form action="" method="post">
        <input type="text" name="h">
        <button type="submit">post</button>
    </form>
</body>
</html>

<!--
7. 
Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo 
peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.
-->
