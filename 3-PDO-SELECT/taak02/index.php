<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM locations";
$statement = $database_connectie->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $value){  
    echo "<h1>".  $value['name'] . "</h1>";
    echo "Adres: " .$value['address'] .  "<br>";
    echo "<br>";
    echo "Stad: ". $value['city'] .  "<br>";
}
?>  