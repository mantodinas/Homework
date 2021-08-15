<?php

//--------------------------1-UZDAVINYS
$komoda = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(1, 5) as $skyrelis) {
        $komoda[$stalcius][$skyrelis] = rand(5, 25);
    }
}
echo '<pre>';
print_r($komoda);

//--------------------------2a-UZDAVINYS
echo '<br>';
$sk = 0;
foreach ($komoda as $stalcius) {
   foreach ($stalcius as $skyrelis) {
      if ($skyrelis > 10) {
         $sk++;
      }
   }
}
print_r("Kiek masyve yra elementu didesnių už 10, yra:" . " " . $sk);
echo '<br>';

//--------------------------2b-UZDAVINYS
echo '<br>';
$max = 0;
foreach ($komoda as $stalcius) {
   foreach ($stalcius as $skyrelis => $stalcius2) {
      if ($stalcius2 > $max) {
         $max = $stalcius2;
      }
   }
}
print( "Didžiausio elemento reikšmė:" . " " . $max);
echo '<br>';

//--------------------------2c-UZDAVINYS
echo '<br>';
$sum = [];
foreach ($komoda as $item) {
    foreach ($item as $key => $value) {
        if (!isset($sum[$key])) $sum[$key] = 0;
        $sum[$key] += $value;
    }
}
echo 'antro lygio masyvai su vienodais indeksais sumos:';
print_r($sum);
echo '<br>';

//--------------------------2d-UZDAVINYS
echo '<br>';
$komoda2 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(1, 7) as $skyrelis) {
        $komoda2[$stalcius][$skyrelis] = rand(5, 25);
    }
}
echo 'Visi masyvai prailginti iki 7 elementų:';
print_r($komoda2);
echo '<br>';

//--------------------------2e-UZDAVINYS
echo '<br>';
$sum2 = [];
foreach ($komoda2 as $value) {
    foreach ($value as $key => $number) {
        (!isset($sum2[$key])) ?
            $sum2[$key] = $number :
            $sum2[$key] += $number;
    }
}
echo 'kiekviena iš antro lygio masyvų elementų sumą 
      atskirai ir sumos panaudotos kaip reikšmes 
      sukuriant naują masyvą:' . " ";
print_r($komoda2);
print_r($sum2);
echo '<br>';

/*
2. 
Naudodamiesi 1 uždavinio masyvu:

a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;

b) Raskite didžiausio elemento reikšmę;

c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais 
   indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

d) Visus masyvus “pailginkite” iki 7 elementų

e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų 
   sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują 
   masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio 
   masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai
*/