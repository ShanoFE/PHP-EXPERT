<?php
$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ],
  [
    'voornaam' => 'Homer',
    'achternaam' => 'Simpson',
    'functie'  => 'fabrieksarbeider'
  ],
  [
    'voornaam' => 'Johan',
    'achternaam' => 'Cruyff',
    'functie'  => 'voetbalicoon'
  ]
  ,
  [
    'voornaam' => 'Badr',
    'achternaam' => 'Hari',
    'functie'  => 'Kickboxer'
  ]
];

/*  De medewerkers-array heeft nu meerdere arrays. */

echo $medewerkers[0]['voornaam']  . " " . $medewerkers[0]['achternaam']  . " " . "is een " . $medewerkers[0]['functie'];
echo "<br>";
echo $medewerkers[$x = 1]['voornaam']  . " " . $medewerkers[1]['achternaam']  . " " . "is een " . $medewerkers[1]['functie'];
echo "<br>";
echo $medewerkers[$x = 2]['voornaam']  . " " . $medewerkers[2]['achternaam']  . " " . "is een " . $medewerkers[2]['functie'];
echo "<br>";
echo $medewerkers[$x = 3]['voornaam']  . " " . $medewerkers[3]['achternaam']  . " " . "is een " . $medewerkers[3]['functie'];
echo "<br>";
echo $medewerkers[$x = 4]['voornaam']  . " " . $medewerkers[4]['achternaam']  . " " . "is een " . $medewerkers[4]['functie'];
for ($x = 0; $x; $x++) {
  echo "$x <br>";
}
?>