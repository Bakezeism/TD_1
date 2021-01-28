<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "INSERT INTO cours(Nom,Prenom,Adresse,services )
                        VALUES('Giraud','Pierre','BBBEEE','DERMATO',)";
                
                $dbco->exec($sql);
                echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>
 

<?php

$base = mysql_connect ('localhost', 'root', '');
mysql_select_db ('cours', $base) ;
?>
<html>
<head>
<title>Modification des données employe</title>
</head>
<body>
<?php

$sql ='UPDATE nom,prenom,Addresse,sexe SET adresse="3, rue des tulipes", age="65"';
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

mysql_close();
?>
les données viennent d'être modifiés.



<?php

$sql ='DELETE nom,prenom,Addresse,sexe SET adresse="3, rue des tulipes", age="65"';
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

mysql_close();
?>
</body>
</html>