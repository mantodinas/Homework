<?php

//1. ir 1b
// $masyvas = range(0, 29);
//foreach (range(0, 29) as $value) {
//    $masyvas [] = rand(20,40);
// }

for ($i = 0; $i < 30; $i++) {
    $masyvas[] = rand(20,40);
}

foreach ($masyvas as $value) {
    echo $value. " ";
}

/*
1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.

1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.
*/