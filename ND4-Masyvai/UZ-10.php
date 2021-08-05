<?php

$array = [];
for ($i= 0 ; $i <10; $i++) {
    if (count($array) <2) {
        $array[] = rand(5,25);
    }
    else {
        $array[] = $array[count($array)-2] +$array[count($array)-1];
    }
}
echo '<pre>';
echo '<br>';
echo count($array);
print_r($array);

/*
10.	
Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi 
skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro 
suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir 
ketvirto suma ir t.t.
*/