<?php
$dbhost = 'mysql-deploiement-php.alwaysdata.net';
$dbname = 'deploiement-php_test';
$dbuser = '301777_test';
$dbpswd = 'Laye_makhtar';
try{
    $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
   
}catch (PDOException $e){
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}

 if (isset($_POST['suivant'])){
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $motdepasse =$_POST['motdepasse'];
    
    $sql = ("INSERT INTO `etudiant` (`code`, `nom`, `prenom`, `email`, `age`, `motdepasse`) VALUES (:code, :nom, :prenom, :email, :age, :motdepasse)" );
   
    $query=$connect->prepare($sql);
    $query->bindParam(':code', $code);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':email', $email);
    $query->bindParam(':age', $age);
    $query->bindParam(':motdepasse', $motdepasse);
 $query->execute();
}
?>