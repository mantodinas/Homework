<?php

$h = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);

$hours = ($h < 10) ? "0$h" : $h;
$minutes = ($min < 10) ? "0$min" : $min;
$seconds = ($sec < 10) ? "0$sec" : $sec;
echo "<h1> Clock: $hours:$minutes:$seconds </h1>";
echo '<br>';
$extra = rand(0, 300);

$sec += $extra;
$temp = 0;
if ($sec > 59) {
    $temp = floor($sec / 60);
    $sec = $sec % 60;
}
if ($temp != 0) {
    $min += $temp;
    $temp = 0;
    if ($min > 59) {
        $temp = floor($min / 60);
        $min = $min % 60;
    }
}
if ($temp != 0) {
    $h += $temp;
    $temp = 0;
    if ($h > 23) {
        $h = $h % 24;
    }
}

$hours = ($h < 10) ? "0$h" : $h;
$minutes = ($min < 10) ? "0$min" : $min;
$seconds = ($sec < 10) ? "0$sec" : $sec;


/*
10.	
Padarykite skaitmeninį laikrodį, rodantį valandas,
minutes ir sekundes. Valandom, minutėm ir sekundėm 
sugeneruoti panaudokite funkciją rand(). Sugeneruokite 
skaičių nuo 0 iki 300. Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių 
pridėjimo ir pridedamų sekundžių skaičių.
*/