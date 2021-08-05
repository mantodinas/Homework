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
//print_r($masyvas2);
echo '<br>';

//-------------------------------------UZDAVINYS NR 8
$masyvas4=[];
foreach($masyvas1 as $value){
    if(array_search($value,$masyvas2,true)===false){
        $masyvas4[]=$value;
    }
}
print_r($masyvas4);

/*
8.	
Sugeneruokite masyvą iš elementų, kurie kartojasi 
abiejuose 6 uždavinio masyvuose.
*/