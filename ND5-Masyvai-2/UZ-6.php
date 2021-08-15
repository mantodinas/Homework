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

/*
6. 
Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia 
tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/