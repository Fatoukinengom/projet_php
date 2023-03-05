
<?php  
session_start();

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
       
        <br><br><br><br><br>
    <h1><font color="white">VOUS AVEZ ETE AJOUTER AVEC SUCCES</font></h1>
    </div>
    
    <div id="formulaire">
        <form action="duphp_etudiant.php" method="post">
            <fieldset>
                <legend><font color="white">Ajouter un admin</font></legend>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="CODE" type="text"name="code">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="Email" type="text" name="email">
            </div>
            <br><br><br><br>
            <div>
                <label for=""></label>
                <input id="attac" placeholder="MOT DE PASSE" type="password" name="motdepasse">
            </div>
            <br><br><br><br>
            <div>
                <button id="bouton" type="submit"name="VALIDER" value="VALIDER">VALIDER</button>
            </div>
        </fieldset>
        </form>

    </div>
</body>
</html>