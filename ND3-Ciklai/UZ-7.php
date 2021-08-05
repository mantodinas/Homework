<?php

$petroSurinktiTaskai=0;
$kazioSurinktiTaskai=0;
do {
$petroTaskai = rand(10, 20);
$kazioTaskai = rand(5, 25);
echo "Petro surinkti taskai: $petroTaskai , Kazio surinkti taskai: $kazioTaskai.";
    if ($petroTaskai > $kazioTaskai) {
        echo ' Partija laimejo: Petras.';
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
    }
    else {
        echo ' Partija laimejo: Kazys.';
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
    }
} while ($petroSurinktiTaskai <=222 || $kazioSurinktiTaskai <=222 );
echo "<br> Petro is viso surinkti taskai: $petroSurinktiTaskai <br>";
echo "<br> Kazio is viso surinkti taskai: $kazioSurinktiTaskai <br>";

/*
7.	
Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį 
nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje 
eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją 
laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija 
rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 
arba daugiau taškų. Nenaudoti cikle break.
*/