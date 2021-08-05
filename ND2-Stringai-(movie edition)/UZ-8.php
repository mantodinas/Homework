<?php

$test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$re = '/\d/';  //regex same as [0-9]

echo $test;

/*
8.	
Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '
.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
Surasti ir atspausdinti epizodo numerį.
*/