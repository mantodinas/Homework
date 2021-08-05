<?php

$var1 = rand(0, 100);
$var2 = rand(0, 100);
$var3 = rand(0, 100);
$average = round(($var1 + $var2 + $var3 / 3), 3);
echo 'Average: '."$average";

$sum = 0;
$elements = 0;


if( 10 < $var1 && $var1 < 90){
    $sum += $var1;
    $elements++;
}
if( 10 < $var2 && $var2 < 90){
    $sum += $var2;
    $elements++;
}
if( 10 < $var3 && $var3 < 90){
    $sum += $var3;
    $elements++;
}if($elements === 0){
    echo " " ,'There is nothing to calculate from the average';
} else {
    echo '<br>Specific Average: '.$sum/$elements;
}

/*
9.	
Naudokite funkcija rand(). Sukurkite tris kintamuosius
su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite 
jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas
reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite 
iki sveiko skaičiaus.
*/