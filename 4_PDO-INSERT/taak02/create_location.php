<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

//als er op de knop gedrukt is dan moet deze code uitgevoerd worden
if( isset($_POST['name'])  ){

    print_r($_POST);
    $naam = $_POST['name'];
    $adres = $_POST['address'];
    $stad = $_POST['city'];
    $sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)" ;
    $stmt = $database_connectie->prepare($sql); 
    $stmt->bindParam(":ph_name", $naam ); 
    $stmt->bindParam(":ph_address", $adres );
    $stmt->bindParam(":ph_city", $stad );
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
    
        <input type="text" name="name" id="">
        <input type="text" name="address" id="">
        <input type="text" name="city" id="">
        <button type="submit">Maak gebruiker</button>
    </form>
</body>
</html>