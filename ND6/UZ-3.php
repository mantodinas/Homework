<?php

$masyvas = [
    [
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    ],
    range(0, 9),
];



for($i = 0; $i <= 9; $i++) {
   echo $masyvas[0][$i] . " " . $masyvas[1][$i] . "<br>";
}

echo "<br><br>";

for($i = 0; $i <= 9; $i++) {
   echo $masyvas[0][$i] * $masyvas[0][$i]. " " . $masyvas[1][$i] * $masyvas[1][$i] . "<br>";
}

/*
3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
reikšmės - skaičiai nuo 0 iki 9.

3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

3c. padarykite tą patį, ką darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu
*/