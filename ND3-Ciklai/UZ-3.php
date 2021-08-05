<?php

$Number = rand (3000, 4000 );
echo $Number;
echo '<br>';
echo '<div style="display: block">';
for ($i = 0; $i < 100; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < 100; $j++) {
        if($i == $j || $j == 100 - 1 - $i){
            echo '<span style ="color: red;"></span>';
        }else {
            echo '<span></span>';
        }
    }
    echo '</div>';
}
echo '</div>';

for($i = 77; $i < $Number; $i+=77){
    if ( $i == 77){
        echo $i;
    } else {
        echo ", $i";
    }
}

/*
3.	
Vienoje eilutėje atspausdinkite visus 
skaičius nuo 1 iki atsitiktinio skaičiaus 
tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
kurie dalijasi iš 77 be liekanos. Skaičius 
atskirkite kableliais. Po paskutinio 
skaičiaus kablelio neturi būti. Jeigu reikia, 
panaudokite css, kad visi rezultatai 
matytųsi ekrane.
*/

/*
--------------------------------
Nepabaigta !
---------------------------------
*/