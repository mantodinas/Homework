<?php

$masyvas = range(0, 9);
$masyvas2 = range(10, 19);

/*
echo "<pre>";
print_r($masyvas);
print_r($masyvas2);
echo "</pre>";
*/

for($i = 1; $i <= 100; $i++) {
    echo $masyvas2[rand(0, 9)] . " ";
}

/*
2. sukurkite masyvą su 10 skaičių nuo 0 iki 9

2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19

2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.
*/