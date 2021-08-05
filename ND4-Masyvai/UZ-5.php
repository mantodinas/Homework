<?php

$masyvas1=[];
$masyvas2=[];
$masyvas3=[];
$masyvas123=[$masyvas1,$masyvas2,$masyvas2];
foreach(range(0,2)as $key){
    foreach(range(1,200)as $i){
        $rand=rand(0,3);
        if($rand==0){
            $masyvas123[$key][$i]='A';
        }
        else if($rand==1){
            $masyvas123[$key][$i]='B';
        }
        else if($rand==2){
            $masyvas123[$key][$i]='C';
        }
        else{
            $masyvas123[$key][$i]='D';
        }
    }
}

$masyvasCombine=[];
foreach(range(1,200)as $i){
    $masyvasCombine[$i]=$masyvas123[0][$i].$masyvas123[1][$i].$masyvas123[2][$i];
}
print_r($masyvasCombine);
sort($masyvasCombine);
print_r($masyvasCombine);
$uniqueValue=0;
$uniqueCombination=1;
for($i=1;$i<200; $i++){
    if($masyvasCombine[$i]!=$masyvasCombine[$i-1]){
        $uniqueCombination++;
            if($i!=199&&$masyvasCombine[$i]!=$masyvasCombine[$i-1]){
                $uniqueValue++;
            }
    }
}
echo $uniqueCombination;
echo '<br>';
echo $uniqueValue;

/*
5.	
Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite 
kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek 
unikalių kombinacijų gavote.
*/