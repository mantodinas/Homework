<?php

$var1 = rand(-10, 10);
$var2 = rand(-10, 10);
$var3 = rand(-10, 10);

$color1 = ($var1 < 0) ? 'green' : (($var1 > 0) ? 'blue' : 'red');
$color2 = ($var2 < 0) ? 'green' : (($var2 > 0) ? 'blue' : 'red');
$color3 = ($var3 < 0) ? 'green' : (($var3 > 0) ? 'blue' : 'red');

echo "<h2 style=\"color:$color1;display:inline-block;padding-right:20px;\">$var1</h2>";
echo "<h2 style=\"color:$color2;display:inline-block;padding-right:20px;\">$var2</h2>";
echo "<h2 style=\"color:$color3;display:inline-block;padding-right:20px;\">$var3</h2>";

/*
7.	
Naudokite funkcija rand(). Atspausdinkite 3 
skaičius nuo -10 iki 10. Skaičiai mažesni už
0 turi būti žali, 0 - raudonas, didesni 
už 0 mėlyni. 
*/