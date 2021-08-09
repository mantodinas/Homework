<?php

if (1 == ($_GET['blue'] ?? '')) {
    header('location: http://localhost/Homework/ND7-WEB-mechanika/UZ-5-red.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ5</title>
</head>

<body style='background-color: blue;'>
<a href="http://localhost/Homework/ND7-WEB-mechanika/UZ-5-red.php?red=1">
<h1>Red</h1>
</a>
</body>

</html>

<!--
5. 
Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite 
linkus į pačius save (abu į save ne į kitą puslapį!). Padarykite taip, 
kad paspaudus ant linko puslapis ne tiesiog persikrautų, o PHP kodas 
(ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį 
(iš raudono į mėlyną ir atvirkščiai).
-->
