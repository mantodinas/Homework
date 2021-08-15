<?php

echo '<br>';
$komoda4 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(rand(2, 20), rand(2, 20)) as $skyrelis) {
        $komoda4[$stalcius][$skyrelis] = chr(rand(65, 90));
    }
}
foreach ($komoda4 as $key => $value) {
    sort($komoda4[$key]);
}
print_r($komoda4);
echo '<br>';

/*
3. 
Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas 
turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės atsitiktinai parinktos raidės iš intervalo 
A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/