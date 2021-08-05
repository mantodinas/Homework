<?php

$vinisCount = 0;
$smūgiai = 0;
$viniesIlgis = 850;
for ($i=0; $i< 5; $i++) {
    while ($viniesIlgis >= 0) {
        $viniesIlgis -= rand(5, 20);
        $smūgiai++;
    }
    $vinisCount++;
}
echo "ikalta: $vinisCount";
echo "<br>";
echo "mažais smūgiais: $smūgiai";

/*
10.	
Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami 
rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).

a)	“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. 
Suskaičiuokite kiek reikia smūgių.

b)	“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, 
bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/