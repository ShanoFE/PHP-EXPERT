<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];


$games = [

    [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ],
];

echo "Speelgoed" . " " .  $speelgoed[0]['naam']  . " " . "uit de categorie  " . $speelgoed[0]['soort'] . " " . "kost" . " " . $speelgoed[0]['prijs'];
echo "<br>";
echo "Speelgoed" . " " .  $speelgoed[1]['naam']  . " " . "uit de categorie  " . $speelgoed[1]['soort'] . " " . "kost" . " " . $speelgoed[1]['prijs'];
echo "<br>";
echo "Speelgoed" . " " .  $speelgoed[2]['naam']  . " " . "uit de categorie  " . $speelgoed[2]['soort'] . " " . "kost" . " " . $speelgoed[2]['prijs'];
echo "<br>";
echo "Speelgoed" . " " .  $games[0]['naam']  . " " . "van uitgever  " . $games[0]['uitgever'] . " " . "kost" . " " . $games[0]['prijs'];
echo "<br>";
echo "Speelgoed" . " " .  $games[1]['naam']  . " " . "van uitgever  " . $games[1]['uitgever'] . " " . "kost" . " " . $games[1]['prijs'];
echo "<br>";
echo "Speelgoed" . " " .  $games[2]['naam']  . " " . "van uitgever  " . $games[2]['uitgever'] . " " . "kost" . " " . $games[2]['prijs'];
for ($x = 0; $x; $x++) {
  echo "$x <br>";
}                   
?>