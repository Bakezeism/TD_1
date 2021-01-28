<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>page4.php</title>
        <script src="/script/script.js" type="text/javascript"></script>
        <link href="/style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="page3a.php" method="GET">
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
                        <td><input type="submit" value="Valider" class="classe" />
                                <input type="reset" value="Annuler" class="classe"/></td>
        
                        <td></td>
        </form>
</html>