<?php
$host = 'mysql-deploiement-php.alwaysdata.net';
$dbname = 'déploiement-php_test';
$users = '301777_test';
$pass = 'Laye_makhtar';

$charset ='utf8mb4';

try{
    $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
   
}catch (PDOException $e){
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}
?>