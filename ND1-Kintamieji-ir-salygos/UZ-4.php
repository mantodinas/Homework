<?php


echo'a = '.$a = rand(0, 10);
echo'<br>';
echo'b = '.$b = rand(0, 10);
echo'<br>';
echo'c = '.$c = rand(0, 10);
echo'<br>';
if ($a < $b + $c  &&  $b < $a + $c &&  $c < $a + $b ) {
   echo' trikampį sudaryti galima  ';
} else {
    echo' trikampį sudaryti negalima  ';
}

/*
4.	
Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys
kintamieji (naudokite rand() funkcija nuo 1 iki 10).
Parašykite PHP programą, kuri nustatytų, ar galima 
sudaryti trikampį ir atsakymą atspausdintų.
*/