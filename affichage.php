
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
       
    </div>
    <div id="login">
        <ul>
        <li><a href="inscrire.php">s'inscrire</a></li>
        <li><a href="identifier.php">s'identifier</a></li>
        </ul>
    </div>
    <hr>
   <div id="oo">
    <br> 
  <strong><em><font color="blue">MENU ADMINISTRATEUR</font></em></strong>
   </div>
   <h1> La liste des étudiants</h1>
    </div>
</body>
</html>

<?php
$dbhost = 'localhost';
$dbname = 'allocation_chambre';
$dbuser = 'root';
$dbpswd = '';
try{
    $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
   
}catch (PDOException $e){
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}
$etudiant= $connect->query("SELECT*FROM etudiant")-> fetchAll()
?><font color ="blue">
   
   <table border ="2px"id="php">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
   <tr>
        <td>IDE</td>
        <td>name</td>
        <td>lastname</td>
        <td>email</td>
        <td>mot_de_passe</td>
        <td>age</td>
        <td>date_de_naissance</td>
        <td>code</td>
    </tr>
        
<tbody>
    <tr>
        <?php foreach ($etudiant as $value){ ;?>
        <td><?php echo $value["IDE"]?></td>
        <td><?php echo $value["code"]?></td>
        <td><?php echo $value["nom"]?></td>
        <td><?php echo $value["prenom"]?></td>
        <td><?php echo $value["email"]?></td>
        <td><?php echo $value["age"]?></td>
        <td><?php echo $value["motdepasse"]?></td>
        
            <td>
                <a href="modifier_etudiant.php">Modifier</a>
                <a href="supprimer_etudiant.php">Supprimer</a>
                <a href="ajouterad.php">Ajouter un admin</a>
                <a href="ajouter_etu.php">Ajouter un étudiant</a>
                
            </td>
       
    </tr>
<?php } ?>
        </font>
</tbody>
</table>
       
