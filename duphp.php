<?php
session_start();
if (isset($_POST['Envoyer'])){
    $C = $_POST['codeA'];
    $E = $_POST['Email'];
    $M = $_POST['Motdepasse'];
    $dbhost = 'mysql-deploiement-php.alwaysdata.net';
$db= new PDO('mysql:host=mysql-deploiement-php.alwaysdata.net;dbname=deploiement-php_test', '301777_test', 'Laye_makhtar');
$sqp= "SELECT * FROM administrateur WHERE codeA='$C'";
$result= $db->prepare($sqp);
$result->execute();

if($result->rowCount() > 0)
{
    header("Location: affichage.php");

}
else
{ 
    echo "information incorrect";
}

}
?>