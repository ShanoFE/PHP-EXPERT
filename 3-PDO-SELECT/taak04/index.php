<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = 'SELECT * FROM users WHERE name = :name AND adres= :adres';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":name", $name);
$statement->bindParam(":adres", $adres);
$user = $statement->fetch();

$name = "Tools4ever Groningen";
$adres = "Grote markt";
$statement->execute();

echo $name;
echo "<br>";
echo $adres;
?>