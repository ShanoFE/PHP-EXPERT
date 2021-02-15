<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

if( isset($_GET['id'])  ){
    print_r($_GET);
    
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = :ph_id"; ///DELETE FROM products WHERE id = 0;
    $stmt = $database_connectie->prepare($sql); 
    $stmt->bindParam(":ph_id", $id );
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

    <a href="?id=1">Delete</a>
</body>
</html>