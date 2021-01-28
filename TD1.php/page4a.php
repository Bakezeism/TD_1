<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
VOS INFOSRMATIONS SAISIE
</title>
</head>
<body>
<h1>Bonjour,  <?php echo $_GET['Nom'] ?></h1>
<h2>Vous etre  <?php echo $_GET['sexe'] ?></h2>
   <?php
    $n = $_GET['Nom'];
    $a = $_GET['sexe'];
    $m = $_GET['Matricule'];
    $ad = $_GET['Addresse'];
    $s = $_GET['service'];
    $f = $_GET['Fonction'];
    ?>
Votre nom est  <?php echo "$n" ?>
<br/> Votre matricule :  <i><?php echo "$m"; ?></i>
<br/> Votre Addresse :  <i><?php echo "$ad"; ?></i>
<br/> Votre service :  <i><?php echo "$s"; ?></i>
<br/> Votre Fonction :  <i><?php echo "$f"; ?></i>
<br/>
</body>

</html>