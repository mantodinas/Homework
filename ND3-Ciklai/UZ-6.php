<?php

echo '<br>pirmas scenarijus<br>';
do {
    $throw = (rand(0,1) == 0) ? 'H' : 'S';
    echo "$throw <br>";
} while ($throw != 'H');

echo '<br>antras scenarijus<br>';
$herbai = 0;
do {
    $throw = (rand(0,1) == 0) ? 'H' : 'S';
    if ($throw == 'H') {
        $herbai++;
    }
    echo "$throw <br>";
} while ($herbai < 3);
 
echo '<br>trecias scenarijus<br>';
$herbai = 0;
do {
    $throw = (rand(0,1) == 0) ? 'H' : 'S';
    if ($throw == 'H') {
        $herbai++;
    } else {
        $herbai = 0;
    }
    echo "$throw <br>";
} while ($herbai < 3);

/*
6.	
Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, 
kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame 
į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu 
herbas. Suprogramuokite keturis skirtingus scenarijus kai 
monetos metimą stabdome:

a)	Iškritus herbui;

b)	Tris kartus iškritus herbui;

c)	Tris kartus iš eilės iškritus herbui;
*/