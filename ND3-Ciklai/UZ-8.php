<?php

$puse = 10;
for ($i = 1; $i < $puse; $i++) {
    for ($j = $i; $j < $puse; $j++)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo '<br>';
}

for ($i = $puse; $i > 0; $i--) {
    for ($j = $puse - $i; $j > 0; $j--)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
    echo "<br>";
}

/*
8.	
Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį 
kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 
eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų 
atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/