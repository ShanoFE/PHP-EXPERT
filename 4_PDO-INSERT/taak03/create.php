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
    $koopprijs = $_POST['purchase_price'];
    $verkoopprijs = $_POST['selling_price'];
    $sql = "INSERT INTO products (name, purchase_price, selling_price) VALUES (:ph_name , :ph_purchase_price, :ph_selling_price)" ;
    $stmt = $database_connectie->prepare($sql); 
    $stmt->bindParam(":ph_name", $naam ); 
    $stmt->bindParam(":ph_purchase_price", $koopprijs );
    $stmt->bindParam(":ph_selling_price", $verkoopprijs );
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
        <input type="text" name="purchase_price" id="">
        <input type="text" name="selling_price" id="">
        <button type="submit">Maak gebruiker</button>
    </form>
</body>
</html>