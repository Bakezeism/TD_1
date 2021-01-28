<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>page4.php</title>
        <script src="/script/script.js" type="text/javascript"></script>
        <link href="/style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <legend>Inscription</legend>
                <table border="0">
                        <tr>
                            <td>Matricule</td>
                            <td><input type="text" name="Matricule" value="" required="" autofocus="" placeholder="Tapez votre Matricule" pattern="[A-Z]*" title="En majuscule"/></td>
                    
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td><input type="text" name="Nom" value="" /></td>
        
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td><input type="text" name="prenom" value="" /></td>
        
                        </tr>
                        <tr>
                            <td>Sexe</td>
                            <td><input type="radio" name="sexe" value="Masculin"> Masculin</td>
                            <td><input type="radio" name="sexe" value="Feminin"> Feminin</td>
                            
                        </tr>
                        <tr>
                            <td>Addresse</td>
                            <td><input type="text" id="Addresse" name="Addresse" required minlength="10" maxlength="30" size="10"></td>
                        </tr>
                        <tr>
                            <td>Service</td>
                            <td><SELECT id="service" name="service"size="1">
                                <OPTION>ODONTO-STOMATOLOGIE
                                <OPTION>OBSETRIQUE
                                <OPTION>PEDIATRIE 
                                </SELECT>
                            </td>
                        </tr>
                        <tr>
                        <td>Fonction</td>
                            <td><SELECT name="Fonction" size="1">
                                <OPTION>DOCTEUR
                                <OPTION>INFIRMIER
                                <OPTION>AIDE-SOIGNANTS  
                                </SELECT>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Valider" class="classe" />
                                <input type="reset" value="Annuler" class="classe"/></td>
                            <td></td>
                        </tr>
                </table>
        </form>
    </body>
</html>

<?php
    $serveur = "localhost";
    $dbname = "cours";
    $user = "root";
    $pass = "";
    
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $service = $_POST["service"];
    $sexe = $_POST["sexe"];
    $Addresse = $_POST["Addresse"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(prenom, nom, service, sexe)
            VALUES(:prenom, :nom, :service, :sexe, :Addresse)");
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':service',$service);
        $sth->bindParam(':sexe',$sexe);
        $sth->bindParam(':Addresse',$Addresse);
        $sth->execute();
        
?>
