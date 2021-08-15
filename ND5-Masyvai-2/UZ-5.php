<?php

$komoda5 = [];
$idNumber = rand(1, 1000000);
$rowNumber = rand(0, 100);
//  rand(0 , 100)
$idValues = [];
$rowValues = [];
foreach (range(0, 29) as $i) {
    $komoda5[$i] = ['user_id' => 1, 'place_in_row' => 2];
}
foreach ($komoda5 as $key => $value) {
    while (in_array($idNumber, $idValues)) {
        $idNumber = rand(1, 1000000);
    }

    $idValues[] = $idNumber;
    $komoda5[$key]['user_id'] = $idNumber;
    while (in_array($rowNumber, $rowValues)) {
        $rowNumber = rand(0, 100);
    }
    $rowValues[] = $rowNumber;
    $komoda5[$key]['place_in_row'] = $rowNumber;
}
echo '<pre>';
print_r($komoda5);

/*
5. 
Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas 
yra masyvas [user_id => xxx, place_in_row => xxx] user_id 
atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row 
atsitiktinis skaičius nuo 0 iki 100.
*/