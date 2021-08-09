<?php

$firstName = 'Arnold';
$lastName = 'Schwarzenegger';

echo 'Full name', " ", $firstName ," ", $lastName;
echo "<br>", '3-Letters from back', " ";
echo substr($firstName,-3) ." ".substr ($lastName,-3);

/*
4.	
Sukurti du kintamuosius. Jiems priskirti
savo mylimo aktoriaus vardą ir pavardę kaip 
stringus. Sukurti trečią kintamąjį ir jam 
priskirti stringą, sudarytą iš trijų 
paskutinių vardo ir pavardės kintamųjų 
raidžių. Jį atspausdinti.
*/