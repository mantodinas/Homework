<?php

$komoda = [];
foreach (range(1, 10) as $stalcius) {
    foreach (range(1, 5) as $skyrelis) {
        $komoda[$stalcius][$skyrelis] = rand(5, 25);
    }
}
echo '<pre>';
print_r($komoda);

/*
1. 
Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai 
iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/