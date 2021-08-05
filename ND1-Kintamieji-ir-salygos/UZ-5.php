<?php

$number1 = rand(0, 2);
$number2 = rand(0, 2);
$number3 = rand(0, 2);
$number4 = rand(0, 2);

$zeroes = 0;
$ones = 0;
$twos = 0;

$check1 = match ($number1) {
    0 => $zeroes++,
    1 => $ones++,
    2 => $twos++,
};
$check2 = match ($number2) {
    0 => $zeroes++,
    1 => $ones++,
    2 => $twos++,
};
$check3 = match ($number3) {
    0 => $zeroes++,
    1 => $ones++,
    2 => $twos++,
};
$check4 = match ($number4) {
    0 => $zeroes++,
    1 => $ones++,
    2 => $twos++,
};
echo "0 count $zeroes<br> 1 count $ones <br> 2 count $twos";

/*
5.	
Sukurkite keturis kintamuosius ir rand() funkcija 
sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite 
kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/