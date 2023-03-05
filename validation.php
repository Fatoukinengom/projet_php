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

include ("config-alwaysdata.php")

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
 if ($query){
    $message = "ajouté avec succés";
}else{
    $message ="une erreur";
}
 


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
    <link rel="stylesheet"href="le_css.css"> 
</head>
<body>
    
    <div id="page1">
        <div id="logo">
            <img src=logo-iam-01.jpg"alt="non disponible"width="200px"height="100px">
            <div id="div1">
                <ul>
                    <li> <a href="indexac.php"> ACCEUIL</a></li>
                    <li> <a href="index.php"> SERVICES</a></li>
                    <li> <a href="index1.php">CONTACTS</a></li>
                    <li> <a href="index2.php"> A PROPOS</a></li>
                    
                </ul>
                <input placeholder="RECHERCHE" type="search">
            </div>
        </div>
       
    </div>
    <div id="login">
        <ul>
        <li><a href="inscrire.php">s'inscrire</a></li>
        <li><a href="identifier.php">s'identifier</a></li>
        </ul>
    </div>
    <div> 
        <h1>Validation</h1>
        <h1><?php echo $message ; ?></h1>

    </div>
    </div>
</body>
</html>