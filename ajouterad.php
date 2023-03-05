
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

 if (isset($_POST['Ajouter'])){
    $code = $_POST['codeA'];
    $email = $_POST['Email'];
    $motdepasse =$_POST['Motdepasse'];
   
   
    $sql = ("INSERT INTO `administrateur` (`codeA`, `Email`, `Motdepasse`) VALUES (:codeA,  :Email, :Motdepasse)" );
   
    $query=$connect->prepare($sql);

    $query->bindParam(':codeA', $code);
    $query->bindParam(':Email', $email);
    $query->bindParam(':Motdepasse', $motdepasse);
    $query->execute();
   
 if ($query){
 header('location: affichage.php')
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
    <title>Identification</title>
    
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
            <li><a href="inscrire.php">s'inscrire</a></li>
            
            </ul>
        </div>
       
        
    </div>
    <div id="formulaire">
        <form action="" method="post">
            <fieldset>
                <legend><font color="white">IDENTIFICATION</font></legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="CODE" type="text"name="codeA">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="Email" type="text" name="Email">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="MOT DE PASSE" type="password" name="Motdepasse">
            </div>
            <br><br><br><br>
            <div>
                <button id="bouton" type="submit"name="Ajouter" value="Ajouter">Ajouter</button>
            </div>
        </fieldset>
        </form>

    </div>
</body>
</html>