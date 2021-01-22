<?php

    function rectangle($L,$l){

      $longueur_rectangle = 5;
      $largeur_rectangle = 4;
      $surface=$longueur_rectangle*$largeur_rectangle;
      $perimettre_du_rectangle = ($longueur_rectangle+$largeur_rectangle) * 2 ;
      $demi_perimetre_du_rectangle =  $perimettre_du_rectangle / 2 ;
      $longueur_diagonnale_rectangle =sqrt(($longueur_rectangle**2 + $largeur_rectangle**2)) ;
      
      echo "<big>LES CALCUL DANS UN RECTANGLE <big/> <br/>";
      echo "la Longueur du rectangle  est : $longueur_rectangle <br/>";
      echo "la Largeur  du rectangle  est : $largeur_rectangle <br/>";
      echo "le perimetre du rectangle  est : $perimettre_du_rectangle  <br/>";
      echo "le demi perimetre du rectangle  est : $$demi_perimetre_du_rectangle <br/>";
      echo "une longueur_diagonnale du rectangle  est : $longueur_diagonnale_rectangle <br/>";
      
    }

    function Affiche10($val){
        //boucle while 
        while ($val<=10){
            echo $val." , ";
            $val++;
        }

        for ($val;$val<=10;$val++){
            echo $val." ; ";
        }

        do {
            echo $val." . ";
            $val++;
        }
        while ($val <= 10);


    }
    function invaff($val){
        while($val>=1){
            echo $val." ; ";
            $val--;
        }

        for($val;$val>=1;$val--){
            echo $val." , ";
        }
        do {
            echo $val." , ";
            $val--;
        } while ($val >=  1);
    }

    function paire_impaire($nbr,$val){
        while($val%2==0 and $val<=$nbr ){
            echo"$val , ";
            $val+=2;
        }

    for ($val=$nbr;$val>=1;$val--){
        if($val % 2 != 0){
            echo $val." ; ";

        }
    }
    }

    function ordre_croissant($mini,$maxi,$nb1,$nb2){
        if ($nb1>$nb2){
            $maxi=$nb1;
            $mini=$nb2;
            echo "$mini , $maxi";

        }elseif($nb1<$nb2){
            $nb1=$mini;
            $nb2=$maxi;
            echo "$mini , $maxi";
        }

    }
    function ordre_décroissant_2($mini,$maxi,$moy,$nb1,$nb2,$nb3){
        if($nb1>$nb2){
            $min=$nb2;
            $max=$nb1;
        }else{
            //$nb1<=$nb2
          $min=$nb1;
          $max=$nb2;
        }
       
        if($nb3<$min){
            $moy=$min;
            $min=$nb3;
        }else{
            //$nb3>=$min 
            if($nb3<$max){
              //$nb3>=$min && $nb3<$max
              $moy=$nb3;
            }else{
              //$nb3>=$max
              $moy=$max;
              $max=$nb3;
            }
      
        }
        echo "$max,$moy,$min";
    } 
    //afficher le produit des valeurs parfaits entre 1 et une valeur Générée
    function produits_parfait($nbr,$i,$total){
        for($i=1; $i<$nbr; $i++){

            if($nbr % $i == 0)

            $total += $i;

        }if($total == $nbr){

          echo "$nbr est parfait <br/>";
          $total*=$i ;
          echo "le produits des nombres parfait est : $total";
          


        }
        
    }
    function ordre_décroissant_3($mini,$maxi,$moy,$moy2,$nb1,$nb2,$nb3,$nb4){
        if($nb1>$nb2){
            $min=$nb2;
            $max=$nb1;
        }else{
            //$nb1<=$nb2
          $min=$nb1;
          $max=$nb2;
        }
       
        if($nb3<$min){
            $moy=$min;
            $min=$nb3;
        }else{
            //$nb3>=$min 
            if($nb3<$max){
              //$nb3>=$min && $nb3<$max
              $moy=$nb3;
            }else{
              //$nb3>=$max
              $moy=$max;
              $max=$nb3;
            }
            
      
        }
  
        if($nb4<$min){
            $moy2=$min;
            $min=$nb4;
        }else{
            //$nb4>=$min 
            if($nb4<$max){
              //$nb4>=$min && $nb4<$max
              $moy2=$nb4;
            }else{
              //$nb3>=$max
              $moy2=$max;
              $max=$nb4;
            }
            
      
        }
        echo "$max,$moy2,$moy,$min";
    }   
    function generer_affichez($i,$nombre){
        for ($i = 1; $i <= $nombre; $i++) {
            // Notez que $i est préservé entre chaque production de valeur.
            yield $i;}

    }
    function valide_email($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L'adresse e-mail : $email est valide";
          }else{
            echo "L'adresse e-mail : $email n'est pas valide";
          }
    }

    function PremierelettreMj($chaine1,$chaine2){
          echo ucfirst($chaine1);
          echo "<br> ";
          echo ucfirst(strtolower($chaine2));
    }

    function validation_tel($value)
        {
        if (preg_match("221[1-9]", $value)){
            echo "Le numéros $value est correct";
        }else {
            echo "Le numéros entré $value est incorrect";
        }
        }
?>