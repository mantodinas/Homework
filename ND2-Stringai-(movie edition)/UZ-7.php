<?php

$balses = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");

$sakinys1 = 'An American in Paris';
echo $sakinys1 = str_ireplace($balses,'', $sakinys1);
echo '<br>';

echo '<br>';
$sakinys2 = 'Breakfast at Tiffany\'s';
echo $sakinys2 = str_ireplace($balses,'', $sakinys2);
echo '<br>';

echo '<br>';
$sakinys3 = '2001: A Space Odyssey';
echo $sakinys3 = str_ireplace($balses,'', $sakinys3);
echo '<br>';

echo '<br>';
$sakinys4 = 'It\'s a Wonderful Life';
echo $sakinys4 = str_ireplace($balses,'', $sakinys4);
echo '<br>';

/*
7.	
Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame ištrinti visas balses. Rezultatą atspausdinti. 
Kodą pakartoti su stringais: “Breakfast at Tiffany's”
, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/