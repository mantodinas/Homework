<?php

function stringRender ($length) {
    $characters = 'qwertyuiopasdfghjklzxcvbnm';
    $charactersLenght = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString.= $characters[rand(0, $charactersLenght-1)];
    }
return   $randomString;
}

echo stringRender(3);


/*
10.	
Parašyti kodą, kuris generuotų atsitiktinį 
stringą iš lotyniškų mažųjų raidžių. 
Stringo ilgis 3 simboliai.
*/