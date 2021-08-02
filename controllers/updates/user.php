<?php
require_once('../cnx.php');

if(isset($_POST['ok']))
{
  extract($_POST);



  $date=date('d-m-Y H:i:s'); 

  $requete =" UPDATE t_users SET name=?,prenom=?,sexe=?, username=?,id_role=?,updatedAt=? WHERE id_user=?";
  $params =array($name,$prenom,$sexe,$username,$role,$date, $id); 
  $resultat = $bdd->prepare($requete);
  $resultat->execute($params);


  header ('location:../../views/pages/index.php?p=home');
}
