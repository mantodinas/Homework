<?php

$skaiciuKiekis = 0;
$skaiciuStringas = '';
$pirminiai = '';
do {
    $unikalusSkaicius = false;
    do {
        $random = rand(1, 200);
        if (!strpos($skaiciuStringas, $random)) {
            $skaiciuStringas .= $random . ' ';
            $skaiciuKiekis++;
            $unikalusSkaicius = true;
            $pirminis = true;
            for ($i = 2; $i <= $random/2; $i++){
                if ($random % $i == 0) {
                    $pirminis = false;
                }
            }
            if ($pirminis) {
                $pirminiai .= $random . ' ';
            }
        }
    } while (!$unikalusSkaicius);
} while ($skaiciuKiekis < 50);
echo $skaiciuStringas . '<br>';
echo $pirminiai;

/*
11.	
Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo
1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). 
Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik 
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir 
patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo 
mažiausio iki didžiausio.
*/