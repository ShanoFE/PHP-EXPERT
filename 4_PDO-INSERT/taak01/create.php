<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

//als er op de knop gedrukt is dan moet deze code uitgevoerd worden
if( isset($_POST['voornaam'])  ){

    print_r($_POST);
    $firstName = $_POST['voornaam'];
    $lastName = $_POST['achternaam'];
    $sql = "INSERT INTO users (firstname, lastname) VALUES (:ph_firstname , :ph_lastname)" ;
    $stmt = $database_connectie->prepare($sql); 
    $stmt->bindParam(":ph_firstname", $firstName ); 
    $stmt->bindParam(":ph_lastname", $lastName );
    $stmt->execute();
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    
        <input type="text" name="voornaam" id="">
        <input type="text" name="achternaam" id="">
        <button type="submit">Maak gebruiker</button>
    </form>
</body>
</html>