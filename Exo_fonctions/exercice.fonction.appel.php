<?php
    require_once("exercice_fonctions.php");

    echo "<big>Appel Fontions Rectangle<big/><br/>";
    $L=rand(1,500);
    $l=rand(2,502);
    rectangle($L,$l);

    echo "<br/>Boucle while , for , do...while<br/> exo_1_boucle<br/> ";
    $val=1;
    Affiche10($val);

    echo " <br/>exo_2_boucle<br/> ";
    $val=10;
    invaff($val);

    echo " <br/>exo_3_boucle<br/> ";
    $val=0;
    $nbr=rand(0,10);
    paire_impaire($nbr,$val);

    echo " <br/>Exo2_conditionnelle ordre_croissant<br/> ";
    $nb1=rand(2,10);
    $nb2=rand(0,10);
    $maxi=null;
    $mini=null;
    ordre_croissant($mini,$maxi,$nb1,$nb2);

    echo " <br/>Exo3_conditionnelle ordre_décroissant<br/> ";
    $nb1=rand(2,10);
    $nb2=rand(0,10);
    $nb3=rand(3,12);
    $maxi=null;
    $moy=null;
    $mini=null;
    ordre_décroissant_2($mini,$maxi,$moy,$nb1,$nb2,$nb3);
    
    echo " <br/>Exo4_produit_parfait <br/> ";
    $total=0;
    $i=1;
    $nbr=6;
    produits_parfait($nbr,$i,$total);

    echo " <br/>Exo5 ordre_décroissant 4 valeurs <br/> ";
    $nb1=rand(2,10);
    $nb2=rand(0,10);
    $nb3=rand(3,12);
    $nb4=rand(4,13);
    $maxi=null;
    $moy=null;
    $moy2=null;
    $mini=null;
    ordre_décroissant_3($mini,$maxi,$moy,$moy2,$nb1,$nb2,$nb3,$nb4);
    
    echo " <br/>valeurs générer  <br/> ";
    $i=null;
    $nombre=rand(1,4);
    generer_affichez($i,$nombre);
    

    echo " <br/>verifie l'email   <br/> ";
    $email="bakezechiel@gmail.com";
    valide_email($email);

    echo " <br/>premiere lettre en MAJ et le reste en Minuscule    <br/> ";
    $chaine1="BONJOUR";
    $chaine2="BONJOUR";
    PremierelettreMj($chaine1,$chaine2);


    echo " <br/>Numéros de telephone validation <br/> ";
    $value="221773653722";
    validation_tel($value);




    











?>