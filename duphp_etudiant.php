<?php  
session_start();
if (isset($_POST['VALIDER'])){
    $A = $_POST['code'];
    $B = $_POST['email'];
    $D = $_POST['motdepasse'];
    $dbhost = 'mysql-deploiement-php.alwaysdata.net';
$db= new PDO('mysql:host=mysql-deploiement-php.alwaysdata.net;dbname=deploiement-php_test', '301777_test', 'Laye_makhtar');
$sqp= "SELECT * FROM etudiant WHERE code='$A' AND motdepasse = '$D'";
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