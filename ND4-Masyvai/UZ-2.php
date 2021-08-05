<?php

foreach(range(0,29) as $i){
    $atsitiktinisMasyvas[$i]=rand(5,25);
}
echo '<pre>';
echo '<br>';
print_r($atsitiktinisMasyvas);
//------------------------------------UZDAVINYS NR2
echo '<br>';
echo 'a';
echo '<br>';
$didesniUZ10=0;
foreach($atsitiktinisMasyvas as $value){
    if($value>10){
        $didesniUZ10++;
    }
}
echo  $didesniUZ10 . '<br>';
echo 'b';
echo '<br>';
$max=[];
$maxValue=PHP_INT_MIN;
foreach ($atsitiktinisMasyvas as $key => $value) {
    if($value>$maxValue){
        $max=[];
        $maxValue=$value;
           }
    if($value==$maxValue){
        $max[]=$key;
    }
}
echo '<pre>';
echo '<br>';
print_r($atsitiktinisMasyvas);
echo '<br>';
print_r($max);
echo '<br>';
echo 'c';
echo '<br>';
$suma=0;
foreach ($atsitiktinisMasyvas as $index => $value) {
    if($index%2==0){
    $suma+=$index;
    }
}
echo $suma;
echo '<br>';
echo 'd';
echo '<br>';
$masyvas=[];
foreach ($atsitiktinisMasyvas as $key => $value) {
$masyvas[]=$value-$key;
}
echo '<pre>';
echo '<br>';
print_r($masyvas);
echo '<br>';
echo 'e';
echo '<br>';
foreach (range(1,10) as $_) {
$masyvas[]=rand(5,25);
}
echo '<pre>';
echo '<br>';
print_r($masyvas);
echo '<br>';
echo 'f';
echo '<br>';
$porinis=[];
$neporinis=[];
foreach ($masyvas as $key => $value) {
    $key % 2 ? $neporinis[]=$value:$porinis[]=$value;
}
print_r($porinis);
print_r($neporinis);
echo '<br>';
echo 'g';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($key % 2 === 0 && $val > 15) {
        $masyvas[$key] = 0;
    }
}

print_r($masyvas);
echo '<br>';
echo 'h';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($val > 10) {
        $indeksas = $key;
        break;
    }
}
echo $indeksas;
echo '<br>';
echo 'i';
echo '<br>';
foreach ($masyvas as $key => $val) {
    if ($key % 2 === 0) {
        unset($masyvas[$key]);
    }
}
print_r($masyvas);

/*
2.	
Naudodamiesi 1 uždavinio masyvu:

a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

b)	Raskite didžiausią masyvo reikšmę ir jos indeksą arba 
    indeksus jeigu yra keli;

c)	Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio 
    masyvo reikšmes minus tos reikšmės indeksas;

e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis 
    nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi 
    būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

g)	Pirminio masyvo elementus su poriniais indeksais padarykite 
    lygius 0 jeigu jie didesni už 15;

h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė 
    didesnė už 10;

i)	Naudodami funkciją unset() iš masyvo ištrinkite visus elementus 
    turinčius porinį indeksą;
*/