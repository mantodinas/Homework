<?php

$pirmas = rand(0 , 4);
$antras = rand(0 , 4);

echo '<pre>';
echo "$pirmas<br>";
echo "$antras<br>";

if ($pirmas > $antras && $antras !==0) {
    echo round(($pirmas/$antras), 2);
 }
elseif (($antras > $pirmas && $pirmas !==0)) {
    echo round(($antras/$pirmas), 2);
}
elseif ($antras == $pirmas) {
    echo 'skaiciai yra vienodi, nope nepavyksta';
}
else {
    echo 'dalmuo yra 0, nope nepavyksta';
}
 
/*
2.	
Naudokite funkcija rand(). Sukurkite du kintamuosius
ir naudodamiesi funkcija rand() jiems priskirkite
atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę 
padalinkite iš mažesnės. Atspausdinkite rezultatą jį
suapvalinę iki 2 skaičių po kablelio.
*/