<?php

foreach(range(0,29) as $i){
    $atsitiktinisMasyvas[$i]=rand(5,25);
}
echo '<pre>';
echo '<br>';
print_r($atsitiktinisMasyvas);

/*
1.	
Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/