<?php
$oneUnitPrice = 1;
$amount = rand(5, 3000);

if ($amount > 1000 && $amount <= 2000) {
    $oneUnitPrice = $oneUnitPrice - ($oneUnitPrice * 0.03);
} elseif ($amount > 2000) {
    $oneUnitPrice = $oneUnitPrice - ($oneUnitPrice *  0.04);
} else {$oneUnitPrice = 1;}
echo "purchased $amount candles, one candle price $oneUnitPrice Eur";

echo '<br>'; echo '<br>';

/*
8.	
Įmonė parduoda žvakes po 1 EUR. Perkant daugiau
kaip už 1000 EUR taikoma 3 % discount, daugiau kaip
už 2000 EUR - 4 % discount. Parašykite programą, kuri 
skaičiuos žvakių kainą ir atspausdintų atsakymą kiek 
žvakių ir kokia kaina perkama. Žvakių kiekį generuokite 
rand() funkcija nuo 5 iki 3000.
*/