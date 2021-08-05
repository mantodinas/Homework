<?php

$RandomLetters=[];
$letters=['A','B','C','D'];
foreach(range(1,200) as $i){
    $RandomLetters[]=$letters[rand(0,3)];
}

echo '<br>';
print_r($RandomLetters);
echo '<br>';
echo '<pre>';
print_r(array_count_values($RandomLetters));
echo '<br>';
echo '</pre>';

/*
3.	
Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra 
kiekvienos raidės.
*/