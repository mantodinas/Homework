<?php

$names = [
    "Beaver",
    "Baboon",
    "Parrot",
    "Cobra",
    "Lion",
    "BlueWhale",
    "WhiteShark",
    "Piranha",
    "Scorpion",
    "BrownBear",
];

$species = [
    "rodent",
    "monkey",
    "bird",
    "snake",
    "wildCat",
    "whale",
    "shark",
    "fish",
    "insect",
    "Bear",
];


$descriptions = [
    "largest living rodents in the world",
    "one of the largest monkeys",
    "birds of the order Psittaciforme",
    "highly venomous snakes",
    "well muscled cat with a long body",
    "largest animals ever known",
    "largest predatory fish on Earth",
    "razor toothed carnivorous fish",
    "Scorpions are predatory arachnids",
    "Bears are carnivoran mammals",
];

$array = [
    [
        $names,
        $species,
        $descriptions,
    ],
    [
        [
        "species" => "species1",
        "age" => 2123,
        "name" => "vardas1",
        "description" => "description1"
        ],
        [
        "species" => "species2",
        "age" => 2123,
        "name" => "vardas2",
        "description" => "description2"
        ],
    ],

];
echo "<pre>";
print_r($array);
echo "</pre>";

foreach ($array[1] as $value) {
    foreach ($value as $value) {
        echo $ . "<br>";
    }
}
/*
5. sukurkite tris masyvus:
$names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
$species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
$descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....]
aprašus sugalvokite patys. jų reikia 10.

5b. sukurkite dvimatį masyvą iš 20 elementų. didžiąjame masyve bus sudėti mažesni
masyvai,
iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5.
masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.

5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.
*/