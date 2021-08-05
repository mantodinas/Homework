<?php

$star = '';
for($i = 0; $i <= 399; ++$i){
         $star = $star.'*';
    };

echo chunk_split($star,50);echo '<br>'; 


/*
1.	
Naršyklėje nupieškite linija iš 400 “*”. 

    a)	
    Naudodami css stilių “suskaldykite” liniją
    taip, kad visos žvaigždutės matytųsi ekrane;

    b)	
    Programiškai “suskaldykite” žvaigždutes 
    taip, kad vienoje eilutėje nebūtų 
    daugiau nei 50 “*”; 
*/


/*
----------------------------------
$star = '';
for($i = 0; $i <= 399; ++$i){
         $star = $star.'*';
    };

echo $star;
----------------------------------
Nubraižo linija linija iš 400 “*”
*/


/*
----------------------------------------
$star = '';
for($i = 0; $i <= 399; ++$i){
         $star = $star.'*';
    };

echo chunk_split($star,100);echo '<br>';
----------------------------------------
Nu Nubraižo linija linija iš 400 “*” 
ir paskirsto po 100 sutalpinant ekrane
*/

