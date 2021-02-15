<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM users";
$statement = $database_connectie->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $gebruiker){  
    echo "<h1>" . $gebruiker['firstname'] . "</h1>";
    echo "<h1>" . $gebruiker['lastname'] .  "</h1><br>";
    echo $gebruiker['email'] . "<br>";
    echo "<br>";
    echo $gebruiker['role'] . "<br>";
}
?>