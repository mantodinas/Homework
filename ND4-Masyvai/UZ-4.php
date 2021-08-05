<?php

$RandomLetters=[];
$letters=['A','B','C','D'];
foreach(range(1,200) as $i){
    $RandomLetters[]=$letters[rand(0,3)];
} 
asort($RandomLetters);
foreach($RandomLetters as $key => $Value) {
}
echo '<pre>';
print_r($RandomLetters);
echo '<br>';
echo '</pre>';

/*
4.	
Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/