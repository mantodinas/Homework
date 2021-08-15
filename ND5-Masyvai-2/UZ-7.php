<?php

//-------------------------5-UZDAVINYS
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

//-------------------------6-UZDAVINYS
echo '<br>';
echo '6 uždavinys 
surušiuotas masyvas pagal user_id didėjančia tvarka
ir place_in_row mažėjančia tvarka:' . " ";

sort($komoda5);
print_r($komoda5);
function sortt($a, $b)
{
    return $b['place_in_row'] > $a['place_in_row'];
};

usort($komoda5, 'sortt');
print_r($komoda5);

//-------------------------7-UZDAVINYS
echo '<br>';
function nameSurname($parametras)
{
    $masyvasRaides = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $i = 0;
    $raides = '';
    $text = '';
    while ($i <= $parametras) {
        $raides = $masyvasRaides[rand(0, (count($masyvasRaides)) - 1)];
        $text .= $raides; // sitas budas zimei geriasnis negu mano su ifais
        $i++;
    }
    return $text;
}
$komoda5 = [];
$idNumber = rand(1, 1000000);
$rowNumber = rand(0, 100);
//  rand(0 , 100)
$idValues = [];
$rowValues = [];
foreach (range(0, 29) as $i) {
    $komoda5[$i] = ['user_id' => 1, 'place_in_row' => 2, 'name' => 3, 'surname' => 4];
}
foreach ($komoda5 as $key => $value) {
    while (in_array($idNumber, $idValues,)) {
        $idNumber = rand(1, 1000000);
    }

    $idValues[] = $idNumber;
    $komoda5[$key]['user_id'] = $idNumber;
    $komoda5[$key]['name'] = nameSurname(rand(5, 15));
    while (in_array($rowNumber, $rowValues)) {
        $rowNumber = rand(0, 100);
    }
    $rowValues[] = $rowNumber;
    $komoda5[$key]['place_in_row'] = $rowNumber;
    $komoda5[$key]['surname'] = nameSurname(rand(5, 15));
}
echo '7 užduotis';
echo '<br>';
print_r($komoda5);
echo '<br>';

/*
7. 
Prie 6 uždavinio masyvo antro lygio masyvų pridėkite 
dar du elementus: name ir surname. Elementus užpildykite 
stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, 
kurių ilgiai nuo 5 iki 15.
*/