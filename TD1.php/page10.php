<?php
    $n = $_GET['Nom'];
    $a = $_GET['sexe'];
    $m = $_GET['Matricule'];
    $ad = $_GET['Addresse'];
    $s = $_GET['service'];
    $f = $_GET['Fonction'];
    ?>
<table >
  <tr>
    <td>Nom</td>
    <td>sexe</td>
    <td>Matricule</td>
    <td>Address</td>
    <td>Fonction</td>
  </tr>
  <tr>
    <td><?php echo "$n"?></td>
    <td><?php echo "$a"?></td>
    <td><?php echo "$m"?></td>
    <td><?php echo "$ad"?></td>
    <td><?php echo "$f"?></td>
  </tr>
</table>
