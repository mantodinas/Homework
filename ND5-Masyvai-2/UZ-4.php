<?php
//------------------3-UZDAVINYS
echo '<br>';
$komoda4 = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(rand(2, 20), rand(2, 20)) as $skyrelis) {
        $komoda4[$stalcius][$skyrelis] = chr(rand(65, 90));
    }
}
foreach ($komoda4 as $key => $value) {
    sort($komoda4[$key]);
}
echo '3 uždavinys';
echo '<br>';
print_r($komoda4);
echo '<br>';

//------------------4-UZDAVINYS
echo '<br>';
echo '4 uždavinys (išrušiuoti 3 uždavinio elementai)';
echo '<br>';
array_multisort($komoda4, SORT_ASC);
print_r($komoda4);
foreach (range(0, (count($komoda4) - 2)) as $i) {
    foreach (range(($i + 1), (count($komoda4) - 1)) as $j) {
        if (count($komoda4[$i]) > count($komoda4[$j])) {
            $temp = $komoda4[$i];
            $komoda4[$i] = $komoda4[$j];
            $komoda4[$j] = $temp;
        }
    }
}
foreach (range(0, (count($komoda4) - 2)) as $i) {
    foreach (range(($i + 1), (count($komoda4) - 1)) as $j) {
        if (!in_array('K', $komoda4[$i]) && in_array('K', $komoda4[$j])) {
            $temp = $komoda4[$i];
            $komoda4[$i] = $komoda4[$j];
            $komoda4[$j] = $temp;
        }
    }
}
print_r($komoda4);
echo '<br>';

/*
4. 
Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad 
elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai 
kurie turi bent vieną “K” raidę, visada būtų didžiojo 
masyvo visai pradžioje.
*/