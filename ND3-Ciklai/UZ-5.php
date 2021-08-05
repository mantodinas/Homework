<?php

echo '<div style="display: block">';
for ($i = 0; $i < 100; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < 100; $j++) {
        if($i == $j || $j == 100 - 1 - $i){
            echo '<span style ="color: red;">*</span>' . " ";
        }else {
            echo '<span>*</span>' . " ";
        }
    }
    echo '</div>';
}
echo '</div>';

/*
5.	
Prieš tai nupieštam kvadratui nupieškite 
raudonas istrižaines.
*/