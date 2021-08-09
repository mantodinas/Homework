<?php

$masyvas1=[];
$masyvas2=[];
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas1,true)!==false);
    $masyvas1[]=$value;
}
print_r($masyvas1);
echo '<br>';
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas2,true)!==false);
    $masyvas2[]=$value;
}
echo '<br>';
print_r($masyvas2);

/*
6.	
Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai 
skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės 
turi būti unikalios savo masyve (t.y. neturi kartotis).
*/