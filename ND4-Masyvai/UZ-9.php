<?php

//-------------------------------------UZDAVINYS NR 6
$masyvas1=[];
$masyvas2=[];
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas1,true)!==false);
    $masyvas1[]=$value;
}
//print_r($masyvas1);
echo '<br>';
foreach(range(0,99)as $index){
    do{
        $value=rand(100,999);
    }while(array_search($value,$masyvas2,true)!==false);
    $masyvas2[]=$value;
}
echo '<br>';
//print_r($masyvas2);

//-------------------------------------UZDAVINYS NR 9
$arraysCombined=array_combine($masyvas1,$masyvas2);
print_r($arraysCombined);

/*
9.	
Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio
masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
*/