<?php

if(isset($_GET['color'])) {
    $color='#' . $_GET['color'];
    echo "<body style='background-color: $color;'></body>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND7-UZ2</title>
</head>
<body>
    <a href="http://localhost/Homework/ND7-WEB-mechanika/UZ-2.php"></a>
    <form method="get">
        <label>Color code</label><br>
        <input type="text" name="color" value=""><br>
        <input type="submit" value="change">
    </form>
</body>
</html>

<!--
(2 ir 3 uždaviniai)    
2. 
Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu 
kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka 
įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) 
puslapio fono spalva pasidarytų tokios spalvos.

3. 
Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti 
į laukelį ir ją išsiųsti mygtuku GET metodu formoje.
-->
