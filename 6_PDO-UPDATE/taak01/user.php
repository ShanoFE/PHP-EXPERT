<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

if( isset($_POST['firstname'])  ){
    echo "crash!!";
    $id = 1;
    $form_firstname = $_POST['firstname'];
    $form_lastname = $_POST['lastname'];
    $form_lastname = $_POST['email'];
    $form_password = $_POST['password'];
    $form_role = $_POST['role'];

$sql = "UPDATE users SET firstname = :ph_firstname, lastname = :ph_lastname, email = :ph_email, password = :ph_password, role = :ph_role WHERE id = :ph_id";
$stmt = $database_connectie->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_firstname", $form_firstname );
$stmt->bindParam(":ph_lastname", $form_lastname );
$stmt->bindParam(":ph_email", $form_email );
$stmt->bindParam(":ph_password", $form_password );
$stmt->bindParam(":ph_role", $form_role );
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
    <form action="" method="post">
      
        <input type="text" name="firstname" value="" placeholder="firstname">
        <input type="text" name="lastname" value="" >
        <input type="text" name="email" value="" >
        <input type="text" name="password" value="" >
        <input type="text" name="role" value="" >
        <button type="submit">Update gebruiker</button>
    </form>
</body>
</html>