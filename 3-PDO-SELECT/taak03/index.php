<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = 'SELECT * FROM users WHERE email = :email AND status= :status';
$statement = $database_connectie->prepare($sql);
$statement->bindParam(":email", $email);
$statement->bindParam(":status", $status);
$user = $statement->fetch();

$email = "mohamed@toolsforever.nl";
$status = "1";
$statement->execute();

echo $email;
echo "<br>";
echo $status;
?>