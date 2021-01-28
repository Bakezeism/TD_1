
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>page4.php</title>
        <script src="/script/script.js" type="text/javascript"></script>
        <link href="/style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="page6.php" method="GET">
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
$tableau[1] = ['Nom','Matricule'];
$tableau[2] = ['Nom','Matricule'];
$tableau[3] = ['Nom','Matricule'];
$tableau[4] = ['Nom','Matricule'];
$tableau[5] = ['Nom','Matricule'];
    ?>

<table >
  <tr>
    <td>Nom Employer</td>
    <td>sexe</td>
    <td>Matricule</td>
    <td>Address</td>
    <td>Fonction</td>
  </tr>
  <tr>
    <td><?php echo $tableau[1]?></td>
    <td><?php echo $tableau[2]?></td>
    <td><?php echo $tableau[3]?></td>
    <td><?php echo $tableau[5]?></td>
  </tr>

</table>