<?php

$Number150 = 0;
for($i = 0; $i < 300; $i++){
    $Number = rand(0, 300);
    if($Number > 150){
        $Number150++;
    }
    if ($Number > 275){
        echo "<span style = 'color: red;'>$Number </span>";
    } else {
        echo "<span>$Number </span>";
    }
}
echo '<br>';
echo 'Numbers bigger then 150 are :' . $Number150;

/*
2.	
Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir 
suskaičiuokite kiek tarp jų yra didesnių už 150.  
Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/