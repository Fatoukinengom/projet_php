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
 if ($query){
   header ('location:identif_etudiant.php');
}else{
    $message ="une erreur";
}
 

echo $message;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
    <link rel="stylesheet"href="le_css.css"> 
</head>
<body>
    
    <div id="page1">
        <div id="logo">
            <img src="logo-iam-01.jpg"alt="non disponible"width="200px"height="100px">
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
        <div id="login">
            <ul>
            
            <li><a href="identifier.php"><em>s'identifier</em></a></li>
            </ul>
        </div>
        <br><br>
    </div>
    
    <h1 id="rr"><strong><em> LE FORMULAIRE D'INSCRIPTION</em></strong></h1>
    <div id="formulaire">
        
        <form action="" method="post">
            <fieldset>
            <legend><font color="white">INSCRIPTION</font> </legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  CODE" type="int" name="code">
            </div>
            <br>
            <br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  NOM" type="text" name="nom">
            </div>
            <br>
            <br>
            <br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  PRENOM"  type="text" name="prenom">
            </div>
           
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  Email" type="email" name="email">
            </div>
            
            <br>
             <br><br><br>
            <div>
                <label for=""> </label>
                <input id="attac" placeholder="  AGE" type="int" name="age">
            </div>
            
             <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="  MOT DE PASSE" type="password" name="motdepasse">
            </div>
            <br>
            <br><br><br><br>
            >
            <div>
                <button id="bouton" type="submit" name="suivant" value="suivant">SUIVANT</button>
            </div>
            <br>
            <br>
        </fieldset>
            </form>

    </div>
</body>
</html>