<?php

//------------------------------------------UZDAVINYS NR 7
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


//------------------------------------------UZDAVINYS NR 7
echo '<br>';
$masyvas3=[];
foreach($masyvas1 as $value){
    if(array_search($value,$masyvas2,true)===false){
        $masyvas3[]=$value;
    }
}
print_r($masyvas1);

/*
7.	
Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios 
yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/