<?php


$movieNameEN = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$movieNameLT = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$engStringToArray = explode(' ', $movieNameEN);
$ltStringToArray = explode(' ', $movieNameLT);

$eng5orLess = 0; // counter for words of length 5 or less in EN movie title
$lt5orLess = 0; // counter for words of length 5 or less in LT movie title

foreach ($engStringToArray as $word) {
    if (strlen($word) <= 5) {
        $eng5orLess++;
    }
}

foreach ($ltStringToArray as $word) {
    if (strlen($word) <= 5) {
        $lt5orLess++;
    }
}

echo "There are $eng5orLess words with length 5 or less in the English title";
echo '<br>';
echo "There are $eng5orLess words with length 5 or less in the Lithuanian title";

/*
9.
Suskaičiuoti kiek stringe 
“Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
yra žodžių trumpesnių arba lygių nei 5 raidės. 
Pakartokite kodą su stringu 
“”.
*/